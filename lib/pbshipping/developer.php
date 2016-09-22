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
# File: developer.php
# Description: developer account object for querying for account details, 
#              managing associated merchants, and querying for transaction 
#              history related to the developer account.
# 

class PBShippingDeveloper extends PBShippingApiResource {

    # 
    # CLIENT LIBRARY SPECIFIC
    # API: GET /developers/{developerId}
    # API signature: get/developers/...
    # 
    # Query for developer account attributes
    #
    public function refresh($auth_obj) {

		if (!isset($this["developerId"]))
			throw new PBShippingMissingAttributeError("developerId");
			
		$api_version = PBShipping::getApiVersion("get/developers/...");
        $api_path = sprintf("/developers/%s", $this["developerId"]);
		$json_resp = PBShippingRequestor::request($auth_obj, "get", 
			$api_version, $api_path, null, null, null);	 
        $this->exchangeArray($json_resp);
	}

    #
    # MANAGING MERCHANTS
    # API: GET /developers/{developerId}/merchants/emails/{emailId}/
    # API signature: get/developers/.../merchants/emails/...
    #
    # Register your merchants or shippers, if you have signed up for the 
    # individual account payment model.
    #
    # This method allows you to retrieve the merchant ID and related
    # information based on the Email ID they used while registering, 
    # so that you can request transactions on their behalf.  
    #     
	public function registerMerchantIndividualAccount(
		$auth_obj, $email_id) {

		if (!isset($this["developerId"]))
			throw new PBShippingMissingAttributeError("developerId");		
		$api_version = PBShipping::getApiVersion(
			"get/developers/.../merchants/emails/...");	
        $api_path = sprintf("/developers/%s/merchants/emails/%s/", 
        	$this["developerId"], $email_id);
        return PBShippingRequestor::request($auth_obj, "get", 
        	$api_version, $api_path, null, null, null);	
	}		

    #
    # CLIENT LIBRARY SPECIFIC
    # API: GET /developers/{developerId}/merchants/emails/{emailId}/
    # API signature: get/developers/.../merchants/emails/...
    # 
    # Query for merchant details using merchant's email address if developer
    # is operating in bulk mode
    #
    public function getMerchantBulkAccount(
    	$auth_obj, $emailid) {
        # use the same underlying REST call
        return $this->registerMerchantIndividualAccount($auth_obj, $emailid);
	}
		
    #
    # MANAGING MERCHANTS
    # API: POST /developers/{developerId}/merchants/registration
    # API signature: post/developers/.../merchants/registration
    #   
    # Register your merchants or shippers, if you have signed up for the 
    # bulk account payment model.
    # 
    # This method allows you to retrieve the merchant ID and related
    # information, so that you can request transactions on their behalf. 
    #		
	public function registerMerchantBulkAccount(
		$auth_obj, $address) {

		if (!isset($this["developerId"]))
			throw new PBShippingMissingAttributeError("developerId");			
		$api_version = PBShipping::getApiVersion(
			"post/developers/.../merchants/registration");	
		$api_path = sprintf("/developers/%s/merchants/registration", 
			$this["developerId"]);
		return PBShippingRequestor::request($auth_obj, "post", 
			$api_version, $api_path, null, null, $address);	
	}
 
    #
    # MANAGING MERCHANTS
    # API: GET /ledger/developers/{developerId}/transactions/reports
    # API signature: get/ledger/developers/.../transactions/reports
    #
    # Retrieve all transactions based on the given input parameters   
    #       
    public function getTransactionReport($auth_obj, $params) {

		if (!isset($this["developerId"]))
			throw new PBShippingMissingAttributeError("developerId");	
        $api_version = PBShipping::getApiVersion(
        	"get/ledger/developers/.../transactions/reports");
		$api_path = sprintf("/ledger/developers/%s/transactions/reports", 
			$this["developerId"]);
        
        return PBShippingRequestor::request($auth_obj, "get", 
        	$api_version, $api_path, null, $params, null);			
	}			
}
