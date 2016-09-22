<?php

#
# Copyright 2016 Pitney Bowes Inc.
#
# Licensed under the MIT License (the "License"); you may not use this file 
# except in compliance with the License. You may obtain a copy of the License 
# in the LICENSE file or at 
#     https://opensource.org/licenses/MIT
#
# Unless required by applicable law or agreed to in writing, software 
# distributed under the License is distributed on an "AS IS" BASIS, WITHOUT 
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  
# See the License for the specific language governing permissions and 
# limitations under the License.
#
# File: ShipmentTest.php
# Description: unit test for shipment manipulation
# 

require_once('TestUtil.php');

class ShipmentTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
    	$this->auth_obj = new PBShippingAuthentication(
    		getenv("PBSHIPPING_KEY"), getenv("PBSHIPPING_SECRET")); 
		$this->developer = TestUtil::setup_developer($this->auth_obj);		
		list($this->merchant, $this->account_num) = TestUtil::setup_merchant(
   			$this->auth_obj, $this->developer);
		$this->shipper_id = $this->merchant["postalReportingNumber"];
	}
	
	public function tearDown() {

	}
			
    public function testShipment() {
								
    	print "Testing rate query and purchasing shipment label ...";	
    	$start_balance = PBShippingAccount::getBalanceByAccountNumber(
        	$this->auth_obj, $this->account_num);			
		TestUtil::check_shipment_rate($this->auth_obj, $this->developer);
		list($shipment, $orig_txid) = TestUtil::create_single_shipment(
			$this->auth_obj, $this->developer, $this->shipper_id);
    	$end_balance = PBShippingAccount::getBalanceByAccountNumber(
        	$this->auth_obj, $this->account_num);					

 		$this->assertEquals(true, isset($shipment["shipmentId"]));
 		
 		$tracking = new PBShippingTracking(
 			array("trackingNumber" => $shipment["parcelTrackingNumber"]));
 		print "Testing get tracking status ..." . "\n";
 		try {
 			$tracking->updateStatus($this->auth_obj);
		}      
		catch(PBShippingApiError $api_err) {
			if (PBShipping::$is_production == true) 
				throw $api_err; 
			$error_info = $api_err->getErrorInfo();
			if (empty($error_info)) 
				throw $api_err;
			if ($error_info[0]["errorCode"] != 'PB-TRKPKG-ERR-7600')
				throw $api_err;
            print "   get tracking call not successful ..." . "\n";
            print "   this is normal if you are running in sandbox environment" . "\n";
            print "   since it is expected there is no real tracking number" . "\n";
		} 
		
        print "Testing reprint shipment label ..." . "\n";
        $shipment->reprintLabel($this->auth_obj);
        
        print "Testing retry shipment ..." . "\n";
		$txid = TestUtil::get_pb_tx_id();
        $shipment->retry($this->auth_obj, $txid, $orig_txid);
    
        print "Testing canceling shipment ..." . "\n";
        $cancel_result = $shipment->cancel($this->auth_obj, $orig_txid, 
        	$shipment["rates"][0]["carrier"]);
			
        $this->assertEquals(true, isset($cancel_result["status"]));
    }
}