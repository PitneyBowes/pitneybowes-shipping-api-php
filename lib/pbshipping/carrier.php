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
# File: carrier.php
# Description: shipping carrier support information query
# 

class PBShippingCarrier extends PBShippingApiResource {

    #
    # COUNTRIES LIST
    # API: GET /countries
    # API signature: get/countries
    #
    # Returns a list of supported destination countries to which the carrier 
    # offers international shipping services. 
    #	
	public function getCountries($auth_obj, $origin_country_code) {
		
		if (!isset($this["name"]))
			throw new PBShippingMissingAttributeError("name");		
		$api_version = PBShipping::getApiVersion("get/countries");	
        $api_path = "/countries";
        $params = array(
        	'carrier' => $this["name"],
        	'originCountryCode' => $origin_country_code
		);
		return PBShippingRequestor::request($auth_obj, "get", $api_version, $api_path, null, $params, null);	
	}
	
	public static function getCountriesForCarrier($auth_obj, $carrier, $origin_country_code) {
		return (new PBShippingCarrier(array("name" => $carrier)))->getCountries(
			$auth_obj, $origin_country_code);
	}
}
