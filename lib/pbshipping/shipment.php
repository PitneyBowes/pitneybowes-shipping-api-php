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
# File: shipment.php
# Description: class supporting shipment creation and management functions
# 

class PBShippingShipment extends PBShippingApiResource {

    # 
    # MANAGING RATES AND SHIPMENTS
    # API: POST /rates
    # API signature: post/rates
    #
    # Rate a shipment before a shipment label is purchased and printed.
    #
    # By default, the returned result would overwrite the current state 
    # of the object. To avoid overwriting, set the input argument 
    # overwrite to False and a copy of the result would be generated and
    # returned instead      
    #    	
	public function getRates($auth_obj, $txid, $include_delivery_commitment=null,
		$xtra_headers=null) {
		
		$api_version = PBShipping::getApiVersion("post/rates");	
        $api_path = "/rates";
		$basic_headers = array(PBShipping::txid_attrname . ":" . $txid);
		if ($xtra_headers == null)
			$hdrs = $basic_headers;
		else
			$hdrs = array_merge($basic_headers, $xtra_headers);			
		if ($include_delivery_commitment == null || !$include_delivery_commitment) 
			$params = array("includeDeliveryCommitment" => false);
		else
			$params = array("includeDeliveryCommitment" => true);
		$json_resp = PBShippingRequestor::request($auth_obj, "post", $api_version, 
			$api_path, $hdrs, $params, $this->getArrayCopy());	
		return $json_resp["rates"];
	}

    # 
    # MANAGING RATES AND SHIPMENTS
    # API: POST /shipments/
    # API signature: post/shipments
    #
    # Create a shipment and purchase a shipment label.
    #
    # By default, the returned result would overwrite the current state 
    # of the object. To avoid overwriting, set the input argument 
    # overwrite to False and a copy of the result would be generated and
    # returned instead      
    # 		
	public function createAndPurchase($auth_obj, $txid, $include_delivery_commitment=null, 
		$xtra_headers=null, $overwrite=true) {
		$api_version = PBShipping::getApiVersion("post/shipments");	
        $api_path = "/shipments";
		$basic_headers = array(PBShipping::txid_attrname . ":" . $txid);
		if ($xtra_headers == null)
			$hdrs = $basic_headers;
		else
			$hdrs = array_merge($basic_headers, $xtra_headers);	
		if ($include_delivery_commitment == null || !$include_delivery_commitment) 
			$params = array("includeDeliveryCommitment" => false);
		else
			$params = array("includeDeliveryCommitment" => true);
		$json_resp = PBShippingRequestor::request($auth_obj, "post", $api_version, 
			$api_path, $hdrs, $params, $this->getArrayCopy());
		if ($overwrite == true) {
			$this->exchangeArray($json_resp);
			return $this;
		}
		else 
			return new PBShippingShipment($json_resp);			
	}

	# 
    # MANAGING RATES AND SHIPMENTS
    # API: GET /shipments/{shipmentId}
    # API signature: get/shipments/...
    #
    # Reprint a shipment label. 
    # Note that the number of reprints of a shipment label will be scrutinized 
    # and restricted.
    #
    # By default, the returned result would overwrite the current state 
    # of the object. To avoid overwriting, set the input argument 
    # overwrite to False and a copy of the result would be generated and
    # returned instead      
    # 	
	public function reprintLabel($auth_obj, $overwrite=true) {
		if (!isset($this["shipmentId"]))
			throw new PBShippingMissingAttributeError("shipmentId");
		$api_version = PBShipping::getApiVersion("get/shipments/...");	
        $api_path = sprintf("/shipments/%s", $this["shipmentId"]);		
		$json_resp = PBShippingRequestor::request($auth_obj, "get", $api_version, 
			$api_path, null, null, null);		
		if ($overwrite == true) {
			$this->exchangeArray($json_resp);
			return $this;
		}
		else 
			return new PBShippingShipment($json_resp);	
	}
	
	public static function reprintLabelByShipmentId($auth_obj, $shipment_id) {
		return (new PBShippingShipment(array("shipmentId", $shipment_id)))->reprintLabel(
			$auth_obj);
	}

    # 
    # MANAGING RATES AND SHIPMENTS
    # API: GET /shipments?originalTransactionId
    # API signature: get/shipments
    #
    # Retry a shipment that was previously submitted with no successful response.
    #
    # By default, the returned result would overwrite the current state 
    # of the object. To avoid overwriting, set the input argument 
    # overwrite to False and a copy of the result would be generated and
    # returned instead      
    #   	
	public function retry($auth_obj, $txid, $original_txid, $overwrite=true) {
		$api_version = PBShipping::getApiVersion("get/shipments/");	
		$api_path = "/shipments";
		$hdrs = array(PBShipping::txid_attrname . ":" . $txid);
		$params = array("originalTransactionId" => $original_txid);
		$json_resp = PBShippingRequestor::request($auth_obj, "get", $api_version, 
			$api_path, $hdrs, $params, null);	
		if ($overwrite == true) {
			$this->exchangeArray($json_resp);
			return $this;
		}
		else 
			return new PBShippingShipment($json_resp);	
	}
				
	public static function retryByTransactionId($auth_obj, $txid, $original_txid) {
		return (new PBShippingShipment())->retry($auth_obj, $txid, $origina_txid);
	}

    # 
    # MANAGING RATES AND SHIPMENTS
    # API: DELETE /shipment/{shipmentId}
    # API signature: delete/shipments/...
    #
    # Cancel/void a shipment, and submit the shipment label for refund.
    #   	
	public function cancel($auth_obj, $txid, $carrier, $cancel_initiator=null) {
		if (!isset($this["shipmentId"]))
			throw new PBShippingMissingAttributeError("shipmentId");
		$api_version = PBShipping::getApiVersion("delete/shipments/...");	
		$api_path = sprintf("/shipments/%s", $this["shipmentId"]);
		$hdrs = array(PBShipping::txid_attrname . ":" . $txid);
		$payload = array("carrier" => $carrier); 
		if ($cancel_initiator != null)
			$payload["cancelInitiator"] = $cancel_initiator;
		return PBShippingRequestor::request($auth_obj, "delete", $api_version, 
			$api_path, $hdrs, null, $payload);
	}
		
	public static function cancelByShipmentId($auth_obj, $txid, 
		$shipment_id, $carrier, $cancel_initiator=null) {
		return (new PBShippingShipment(array("shipmentId" => $shipment_id)))->cancel(
			$auth_obj, $txid, $carrier, $cancel_initiator);
	}
}
