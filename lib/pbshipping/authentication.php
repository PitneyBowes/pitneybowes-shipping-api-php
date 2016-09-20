<?php
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
		$url = "https://api-sandbox.pitneybowes.com/oauth/token";
		
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
