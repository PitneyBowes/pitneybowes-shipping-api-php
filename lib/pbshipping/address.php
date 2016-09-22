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
# File: address.php
# Description: class and methods for validating mailing addresses
# 

class PBShippingAddress extends PBShippingApiResource {

    #
    # ADDRESS VALIDATION
    # API: POST /addresses/verify
    # API signature: post/addresses/verify
    #
    # Verify and cleanse any postal address within the United States. 
    # This will ensure that packages are rated accurately and the 
    # shipments arrive at their final destination on time.
    #
    # By default, the returned result would overwrite the current state 
    # of the object. To avoid overwriting, set the input argument 
    # overwrite to False and a copy of the result would be generated and
    # returned instead      
    #
	public static function verify($auth_obj, &$address, $minimal_address_validation = false, 
		$overwrite = true) {
		
		$api_version = PBShipping::getApiVersion("post/addresses/verify");	
        $api_path = "/addresses/verify";
		if ($minimal_address_validation == null || !$minimal_address_validation) 
			$hdrs = array("minimalAddressValidation: false");
		else
			$hdrs = array("minimalAddressValidation: true");
		$json_resp = PBShippingRequestor::request($auth_obj, "post", $api_version, 
			$api_path, $hdrs, null, $address);
		if ($overwrite == true) {
			$address = array_replace($address, $json_resp);
			return $address;
		}
		else 
			return new PBShippingAddress($json_resp);
	}
}
