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
# File: tracking.php
# Description: shipment tracking support.
# 


class PBShippingTracking extends PBShippingApiResource {

    #
    # TRACKING
    # API: GET /tracking/{trackingNumber}
    # API signature: get/tracking/...
    #
    # Shipment labels that are printed using the Pitney Bowes APIs are 
    # automatically tracked and their package status can be easily retrieved 
    # using this implementation of the GET operation.
    #
	public function updateStatus($auth_obj) {
		
		if (!isset($this["trackingNumber"]))
			throw new PBShippingMissingAttributeError("trackingNumber");
		if (!isset($this["packageIdentifierType"]))
			$this["packageIdentifierType"] = "TrackingNumber";			
		if (!isset($this["carrier"]))
			$this["carrier"] = "USPS";	
				
		$api_version = PBShipping::getApiVersion("get/tracking/...");	
        $api_path = sprintf("/tracking/%s", $this["trackingNumber"]);   		
        $params = array(
        	'carrier' => $this["carrier"],
        	'packageIdentifierType' => $this["packageIdentifierType"]
		);		
		$json_resp = PBShippingRequestor::request($auth_obj, "get", $api_version, 
			$api_path, null, $params, null);
		$this->exchangeArray($json_resp);
	}
}
