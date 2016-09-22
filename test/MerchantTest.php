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
# File: MerchantTest.php
# Description: unit test for merchant account query and manipulation
# 

require_once('TestUtil.php');

class MerchantTest extends PHPUnit_Framework_TestCase {
	
	public function setUp() {
    	$this->auth_obj = new PBShippingAuthentication(
    		getenv("PBSHIPPING_KEY"), getenv("PBSHIPPING_SECRET"));   
	}
	
	public function tearDown() {
	}
		
    public function testMechant() {

		$developer = TestUtil::setup_developer($this->auth_obj);
	    		
    	print "Testing merchant registration and query ..." . "\n";
		list($merchant, $account_num) = TestUtil::setup_merchant(
			$this->auth_obj, $developer);
			
        print "Testing account balance query ..." . "\n"; 
        $balance = PBShippingAccount::getBalanceByAccountNumber(
        	$this->auth_obj, $account_num);
    }
}