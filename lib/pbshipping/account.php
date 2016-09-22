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
# File: account.php
# Description: class and methods for managing account
# 

class PBShippingAccount extends PBShippingApiResource {

    #
    # MANAGING MERCHANTS
    # API: GET /ledger/accounts/{accountNumber}/balance
    # API signature: get/ledger/accounts/.../balance
    #
    # Retrieve the account balance of a merchant account.   
    #	
	public function getBalance($auth_obj) {
		
		if (!isset($this["accountNumber"]))
			throw new PBShippingMissingAttributeError("accountNumber");
		$api_version = PBShipping::getApiVersion("get/ledger/accounts/.../balance");	
        $api_path = sprintf("/ledger/accounts/%s/balance", $this["accountNumber"]);    
		return PBShippingRequestor::request($auth_obj, "get", $api_version, $api_path, null, null, null);	
	}
	
	public static function getBalanceByAccountNumber($auth_obj, $account_number) {
		return (new PBShippingAccount(array("accountNumber" => $account_number)))->getBalance($auth_obj);
	}	
}
