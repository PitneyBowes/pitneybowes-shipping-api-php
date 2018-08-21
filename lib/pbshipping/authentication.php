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
# File: authentication.php
# Description: class for handling authentication with shippping API service

class PBShippingAuthentication {

    public function __construct($api_key, $api_secret) {
    	$this->api_key = $api_key;
		$this->api_secret = $api_secret;
		$this->auth_info = null;
		$this->access_token = null;
		/* need to get the access token */
    	$this->refreshToken();
    }
	
	public function getApiKey() {
		return $this->api_key;
	}
	
	public function getApiSecret() {
		return $this->api_secret;
	}
	
	public function getAuthInfo() {
		return $this->auth_info;
	}
	
	public function getAccessToken() {
		return $this->access_token;
	}
	
    public function refreshToken() {
    	$encoded_cred = base64_encode($this->getApiKey() . ":" . $this->getApiSecret());
    	$hdrs = array(
    		'content-type: application/x-www-form-urlencoded',
    		'Authorization: Basic ' . $encoded_cred
			);
		$data = 'grant_type=client_credentials';
		
    	if (PBShipping::$is_production == false)
			$api_server = PBShipping::$sandbox; 
		else
			$api_server = PBShipping::$production;	
		$url = sprintf("%s/oauth/token", $api_server);
		
    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $hdrs);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		try {
			$result = curl_exec($curl);
			$this->auth_info = json_decode($result, true);
		} 
		catch (Exception $e) {
			print "got an exception";
		}
		$this->access_token = $this->auth_info['access_token'];
		curl_close($curl);
    }				
}
