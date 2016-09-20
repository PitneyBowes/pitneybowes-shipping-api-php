<?php
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
