<?php
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
