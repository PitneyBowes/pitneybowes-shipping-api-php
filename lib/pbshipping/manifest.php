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
# File: manifest.php
# Description: shipping api manifest management
# 

class PBShippingManifest extends PBShippingApiResource {

    # 
    # MANAGING MANIFESTS
    # API: POST /manifests
    # API signature: post/manifests
    #
    # Create a USPS scan form
    #
    # By default, the returned result would overwrite the current state 
    # of the object. To avoid overwriting, set the input argument 
    # overwrite to False and a copy of the result would be generated and
    # returned instead      
    #	
	public function create($auth_obj, $txid, $overwrite=true) {
		if (!isset($this["carrier"]))
			throw new PBShippingMissingAttributeError("carrier");
		if (!isset($this["parcelTrackingNumbers"]))
			throw new PBShippingMissingAttributeError("parcelTrackingNumbers");
		if (!isset($this["submissionDate"]))
			throw new PBShippingMissingAttributeError("submissionDate");
		if (!isset($this["fromAddress"]))
			throw new PBShippingMissingAttributeError("fromAddress");

		$api_version = PBShipping::getApiVersion("post/manifests");	
        $api_path = "/manifests";
		$hdrs = array(PBShipping::txid_attrname . ":" . $txid);
		$payload = array(
			"carrier" => $this["carrier"],
			"parcelTrackingNumbers" => $this["parcelTrackingNumbers"],
			"submissionDate" =>  $this["submissionDate"],
			"fromAddress" => $this["fromAddress"]
		);					

		$json_resp = PBShippingRequestor::request($auth_obj, "post", $api_version, 
			$api_path, $hdrs, null, $payload);
														
		if ($overwrite == true) {
			$this->exchangeArray($json_resp);
			return $this;
		}
		else 
			return new PBShippingManifest($json_resp);
	}

    # 
    # MANAGING MANIFESTS
    # API: GET /manifests/{manifestId}
    # API signature: get/manifests/...
    #
    # Reprint the USPS scan form
    #
    # By default, the returned result would overwrite the current state 
    # of the object. To avoid overwriting, set the input argument 
    # overwrite to False and a copy of the result would be generated and
    # returned instead      
    #	
	public function reprint($auth_obj, $overwrite=true) {
		if (!isset($this["manifestId"]))
			throw new PBShippingMissingAttributeError("manifestId");
			
		$api_version = PBShipping::getApiVersion("get/manifests/...");	
        $api_path = sprintf("/manifests/%s", $this["manifestId"]);
		
		$json_resp = PBShippingRequestor::request($auth_obj, "get", $api_version, 
			$api_path, null, null, null);
									
		if ($overwrite == true) {
			$this->exchangeArray($json_resp);
			return $this;
		}
		else 
			return new PBShippingManifest($json_resp);		
	}
	
	public static function reprintById($auth_obj, $manifestId) {
		return (new PBShippingManifest(array("manifestId", $manifestId)))->reprint($auth_obj);
	}

    # 
    # MANAGING MANIFESTS
    # API: GET /manifests
    # API signature: get/manifests/
    #
    # Retry a manifest request that was previously submitted with no successful 
    # response
    #
    # By default, the returned result would overwrite the current state 
    # of the object. To avoid overwriting, set the input argument 
    # overwrite to False and a copy of the result would be generated and
    # returned instead      
    #	
	public function retry($auth_obj, $txid, $original_txid, $overwrite=true) {
			
		$api_version = PBShipping::getApiVersion("get/manifests");
		$api_path = "/manifests";
		$hdrs = array(PBShipping::txid_attrname . ":" . $txid);
		$params = array("originalTransactionId" => $original_txid);
	
		$json_resp = PBShippingRequestor::request($auth_obj, "get", $api_version, 
			$api_path, $hdrs, $params, null);
									
		if ($overwrite == true) {
			$this->exchangeArray($json_resp);
			return $this;
		}
		else 
			return new PBShippingManifest($json_resp);		
	}
	
	public function retryByTransactionId($auth_obj, $txid, $original_txid) {
		return (new PBShippingManifest())->retry($auth_obj, $txid, $original_txid);
	}
}