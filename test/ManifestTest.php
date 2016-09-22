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
# File: ManifestTest.php
# Description: unit test for manifest manipulation
# 

require_once('TestUtil.php');

class ManifestTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		
    	$this->auth_obj = new PBShippingAuthentication(
    		getenv("PBSHIPPING_KEY"), getenv("PBSHIPPING_SECRET")); 
		$developer = TestUtil::setup_developer($this->auth_obj);		
		list($merchant, $account_num) = TestUtil::setup_merchant(
   			$this->auth_obj, $developer);
		$shipper_id = $merchant["postalReportingNumber"];  		
	
		list($this->shipment1, $txid) = TestUtil::create_single_shipment(
			$this->auth_obj, $developer, $shipper_id);
		list($this->shipment2, $txid) = TestUtil::create_single_shipment(
			$this->auth_obj, $developer, $shipper_id);		
	}
	
	public function tearDown() {	
	}
			
    public function testManifest() {
    		
    	date_default_timezone_set('UTC'); # need this for strftime 
    	
		$trk_nums = array(
			$this->shipment1["parcelTrackingNumber"], 
			$this->shipment2["parcelTrackingNumber"] 
		);
    	$manifest = new PBShippingManifest(array(
    		"carrier" => $this->shipment1["rates"][0]["carrier"], 
    		"submissionDate" => strftime("%Y-%m-%d", time()),
    		"parcelTrackingNumbers" => $trk_nums,
    		"fromAddress" => $this->shipment1["fromAddress"]));	
					
        print "Testing manifest creation ..." . "\n";		
 		$orig_txid = TestUtil::get_pb_tx_id();
	 	$manifest->create($this->auth_obj, $orig_txid);
	 	$this->assertEquals(true, isset($manifest["manifestId"]));
 		
        print "Testing reprint manifest ..." . "\n";
        $manifest->reprint($this->auth_obj);
        
        print "Testing retry manifest ..." . "\n";
		$txid = TestUtil::get_pb_tx_id();
        $manifest->retry($this->auth_obj, $txid, $orig_txid);
    }
}