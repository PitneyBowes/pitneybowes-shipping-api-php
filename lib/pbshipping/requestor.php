<?php
class PBShippingRequestor {
	   
    private static function buildApiUrl($api_version, $api_path, $params) {
    	if (PBShipping::$is_production == false)
			$api_server = PBShipping::$sandbox; 
		else
			$api_server = PBShipping::$production;		
		if ($params != null && !empty($params))
			$url = sprintf("%s%s%s%s?%s", $api_server, PBShipping::api_group_shipping, 
				$api_version, $api_path, http_build_query($params));	
		else
			$url = sprintf("%s%s%s%s", $api_server, PBShipping::api_group_shipping, 
				$api_version, $api_path);
		return $url;
    }
	    
    private static function utf8($value) {
        if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8")
            return utf8_encode($value);
        else
            return $value;
    }
    
    private static function encodePayloads($obj) {
		if ($obj === true) {
            return true;
        } 
        else if ($obj === false) {
            return false;
        } 
        else if (is_array($obj)) {
            $result = array();
            foreach ($obj as $k => $v)
                $result[$k] = self::encodePayloads($v);
            return $result;
        } 
        else {
            return self::utf8($obj);
        }
    }

    public static function request($auth_obj, $method, $api_version, $api_path, 
    	$xtra_headers, $params, $payload) {

		$url = self::buildApiUrl($api_version, $api_path, $params);
        $payload = self::encodePayloads($payload);
		$access_token = $auth_obj->getAccessToken();
        $basic_headers = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $access_token,
            'Accept: application/json'
        );
		if ($xtra_headers == null)
			$headers = $basic_headers;
		else
			$headers = array_merge($basic_headers, $xtra_headers);
				
        list($http_body, $http_status) = self::makeCurlRequest($method, $url, $headers, $payload);
        try {
            $json_body = json_decode($http_body, true);
        }
        catch (Exception $e) {
            $msg = "Invalid response body $rbody " . "HTTP status code: $rcode";
            throw new PBShippingApiError($msg, $http_status, $http_body);
        }
        
        if ($http_status < 200 || $http_status >= 300)
			throw new PBShippingApiError("HTTP Status code: " . $http_status, 
				$http_status, $http_body, $json_body);

		return $json_body;
    }
    
    private static function makeCurlRequest($method, $url, $headers, $payload) {
    		
    	$curl = curl_init();
    	$curl_options = array();
		
        $url = self::utf8($url);
        $curl_options[CURLOPT_URL] = $url;
				
		$method = strtolower($method);
    	if ($method == 'get') {
    		$curl_options[CURLOPT_HTTPGET] = 1;
    	}
    	else if ($method == 'post') {
    		$curl_options[CURLOPT_POST] = 1;
    		$curl_options[CURLOPT_POSTFIELDS] = json_encode($payload);  
        } 
        else if ($method == 'put') {
            $curl_options[CURLOPT_CUSTOMREQUEST] = 'PUT';
            $curl_options[CURLOPT_POSTFIELDS] = json_encode($payload);
		} 
		else if ($method == 'delete') {
            $curl_options[CURLOPT_CUSTOMREQUEST] = 'DELETE';
            $curl_options[CURLOPT_POSTFIELDS] = json_encode($payload);			
		}
		else {
            throw new Error("Unrecognized method {$method}");
        }

        $curl_options[CURLOPT_HTTPHEADER] = $headers;
        $curl_options[CURLOPT_RETURNTRANSFER] = true;
        $curl_options[CURLOPT_CONNECTTIMEOUT] = 15;
        $curl_pptions[CURLOPT_TIMEOUT] = 30;
        $curl_options[CURLOPT_FOLLOWLOCATION] = TRUE;
        
        curl_setopt_array($curl, $curl_options);
        
        $http_body = curl_exec($curl); 
        if ($http_body === false) {
            $message = curl_error($curl);
            curl_close($curl);
			throw new PBShippingApiError(curl_error($curl));
        }
        $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        return array($http_body, $http_status);
    }

}
