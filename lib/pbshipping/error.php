<?php

class PBShippingApiError extends Exception {	
    public function __construct($message, $http_status = null, $http_body = null, $json_body = null) {
        parent::__construct($message);
        $this->http_status = $http_status;
        $this->http_body = $http_body;
		$this->error_info = array();
		
		if ($json_body != null) {
			try {
				# there can be three different formats of error
				if (PBShippingApiError::isAssoc($json_body)) {
					if (isset($json_body["errors"])) {
						$error_list = $json_body["errors"];
						foreach ($error_list as $next_error) {
							$error_entry = array(
								"errorCode" => $next_error["errorCode"], 
								"message" => $next_error["errorDescription"]
							);
							array_push($this->error_info, $error_entry);
						}
					}
					else 
						throw new Exception("unexpected error content format");
				}
				else  {
					foreach ($json_body as $next_error) {
						if (isset($next_error["key"])) {
							$error_entry = array(
								"errorCode" => $next_error["key"], 
								"message" => $next_error["message"]
							);
							array_push($this->error_info, $error_entry);		
						}
						else if (isset($next_error["errorCode"])) {
							$error_entry = array(
								"errorCode" => $next_error["errorCode"], 
								"message" => $next_error["message"]
							);
							array_push($this->error_info, $error_entry);							
						}
						else 
							throw new Exception("unexpected error content format");
					}
				}
            }
            catch (Exception $e) {
			}
		}
    }
    
    public function getHttpStatus() {
        return $this->http_status;
    }
    
    public function getHttpBody() {
        return $this->http_body;
    }

	public function getErrorInfo() {
		return $this->error_info;
	}
	
	public static function isAssoc($arr) {
		return array_keys($arr) !== range(0, count($arr) - 1);
	}
}

class PBShippingAuthenticationError extends PBShippingApiError {
}

class PBShippingMissingAttributeError extends PBShippingApiError {
	public function __construct($attrname) {
		$message = "Attribute " . $attrname . "is missing";
		parent::__construct($message);
	}
}
