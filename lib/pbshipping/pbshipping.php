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
# File: pbshipping.php
# Description: shipping configuration class for controlling environment 
#              parameters, API versioning, etc. 
# 

class PBShipping {

	public static $sandbox = "https://api-sandbox.pitneybowes.com";
	public static $production = "https://api.pitneybowes.com";
	public static $is_production = false;
	public static $default_api_version = "/v1"; 
	public static $override_api_version = array(
		"post/developers/.../merchants/registration" => "/v2",
		"get/ledger/developers/.../transactions/reports" => "/v2"
	);
	const api_group_shipping = "/shippingservices";
	
	const txid_attrname = "X-PB-TransactionId";
	
	public static function getApiVersion($api_sig) {
		if (array_key_exists($api_sig, self::$override_api_version) == true)
			return self::$override_api_version[$api_sig];
		else
			return self::$default_api_version;
	}
}

