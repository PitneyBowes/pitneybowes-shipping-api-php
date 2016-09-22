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
# File: tutorial.php
# Description: a tutorial example exercising the different shipping apis
# 

require_once('lib/pbshipping.php');

$origin_addr = array(
    "addressLines" => array("37 Executive Drive"), 
    "cityTown" => "Danbury",
    "stateProvince" => "Connecticut",
    "postalCode" => "06810",
    "countryCode" => "US"
);

$dest_addr = array(
    "addressLines" => array("27 Waterview Drive"), 
    "cityTown" => "Shelton",
    "stateProvince" => "Connecticut",
    "postalCode" => "06484",
    "countryCode" => "US"
);

$my_parcel = array(
	"weight" => array(
		"unitOfMeasurement" => "OZ",
		"weight" => 1
	),
	"dimension" => array(
		"unitOfMeasurement" => "IN",
		"length" => 6,
		"width" => 0.25,
		"height" => 4,
		"irregularParcelGirth" => 0.002
	)
);

$my_shipment_document = array(
	"type" => "SHIPPING_LABEL",     
	"contentType" => "URL",
	"size" => "DOC_8X11",
	"fileFormat" => "PDF",
	"printDialogOption" => "NO_PRINT_DIALOG"
);

$my_rate_request = array(
	"carrier" => "usps",
	"serviceId" => "PM",
	"parcelType" => "PKG",
	"specialServices" => array(
        array (
            "specialServiceId" => "Ins",
            "inputParameters" => array(
            	array("name" => "INPUT_VALUE", "value" => "50")
             )
        ),
        array (
            "specialServiceId" => "DelCon",
            "inputParameters" => array(
                array("name" => "INPUT_VALUE", "value" => "0")
             )
        )
    ),
    "inductionPostalCode" => "06810"
);

function get_pb_tx_id() {
	return gmdate("YmdHis") . substr((string) microtime(), 2, 7);
}

function println ($s) {
	print $s . "\n";
}

function print_usage() {
	println("Usage: tutorial [options] ");
	println("      -h                          Display help");
	println("      --key=API_KEY               API key for authentication");
	println("      --secret=API_SECRET         API secret for authentication");
	println("      --devid=DEVELOPER_ID        Pitney Bowes Developer ID");
	println("      --merchant=MERCHANT_EMAIL   Merchant email");
}

try {
	# obtain configuration data from command line arguments
	$opts = getopt("h", array("key::", "secret::", "devid::", "merchant::"));
	if (array_key_exists("h", $opts)) {
		print_usage();
		exit(1);
	}
	
	$missing_opts = array();
	
	if (!array_key_exists("key", $opts)) {
		$api_key = getenv("PBSHIPPING_KEY");
		if ($api_key == null) 
			array_push($missing_opts, "key");
	}
	else
		$api_key = $opts["key"];		
	if (!array_key_exists("secret", $opts)) {
		$api_secret = getenv("PBSHIPPING_SECRET");
		if ($api_secret == null)
			array_push($missing_opts, "secret");
	}
	else
		$api_secret = $opts["secret"];
	if (!array_key_exists("devid", $opts)) {
		$dev_id = getenv("PBSHIPPING_DEVID");
		if ($dev_id == null)
			array_push($missing_opts, "devid");
	}
	else
		$dev_id = $opts["devid"];
	if (!array_key_exists("merchant", $opts)) {
		$merchant_email = getenv("PBSHIPPING_MERCHANT");
		if ($merchant_email == null)
			array_push($missing_opts, "merchant");
	}
	else
		$merchant_email = $opts["merchant"];
	
	if (!empty($missing_opts)) {
		println("missing options: " . implode(', ', $missing_opts));
		print_usage();
		exit(1);
	}

	# choose sandbox or production pitney bowes shipping api server	
    println("Choose the sandbox environment ...");
    PBShipping::$is_production = False;
  	
	# authenticate and obtain the authentication object for subsequent use
	# underlying API: POST /oauth/token
	println("Authenticating ...");
	$auth_obj = new PBShippingAuthentication($api_key, $api_secret);
	
	# check destination countries supported for USPS carrier
	# underlying API: GET /countries
	println("Querying for supported destination countries for USPS ...");
	$res = PBShippingCarrier::getCountriesForCarrier($auth_obj, "usps", "US");
	$n = sizeof($res);
	println("   number of supported countries is " . $n);
	println("   one example is " . $res[n/3]["countryName"] . ':' . 
		$res[n/3]["countryCode"]);

	# managing merchant account under individual or bulk account mode
	# - enable the corresponding code for your developer account
	# individual account: 
	#    underlying API: GET /developers/{developerId}/merchants/emails/{emailId}/
	# bulk account:
	#    underlying API: POST /developers/{developerId}/merchants/registration	
	$developer = new PBShippingDeveloper(array("developerId" => $dev_id));
	
	println("Managing merchant (individual account mode) ...");
	$res = $developer->registerMerchantIndividualAccount($auth_obj, $merchant_email);

	# println("Managing merchant (bulk account mode) ...");	
	# $res = $developer->registerMerchantBulkAccount($auth_obj, $origin_addr);

	$account_num = $res["paymentAccountNumber"];  
	$postal_reporting_number = $res["postalReportingNumber"];
    println("   merchant full name is " . $res["fullName"]);
    println("   shipper id is " . $postal_reporting_number);	  	
	println("   payment account number is " . $account_num);	

	# querying for merchant account balance
	# underlying API: GET /ledger/accounts/{accountNumber}/balance
	$balance = PBShippingAccount::getBalanceByAccountNumber($auth_obj, $account_num);
    println("   current balance is " . $balance["currencyCode"] . " " . 
    	$balance["balance"]);
	
	# verify origin and destination addresses and have them cleansed
	# underlying API: POST /addresses/verify  	
    println("Verifying origin and destination addresses ... ");
	PBShippingAddress::verify($auth_obj, $origin_addr);
	if (strtolower($origin_addr["status"]) == "validated_changed")
		println("   origin address cleansed, addressLine is " . 
			$origin_addr["addressLines"][0]);      
	PBShippingAddress::verify($auth_obj, $dest_addr);
	if (strtolower($dest_addr["status"]) == "validated_changed")
		println("   destination address cleansed, addressLine is " . 
			$dest_addr["addressLines"][0]);
	
	# querying rates to prepare a shipment
	# underlying API: POST /rates
    println("Checking for shipment rates ...");
    $shipment = new PBShippingShipment(array(
    	"fromAddress" => $origin_addr,
    	"toAddress" => $dest_addr,
    	"parcel" => $my_parcel,
    	"rates" => array($my_rate_request)
    )); 
	$rates = $shipment->getRates($auth_obj, get_pb_tx_id(), true);
    println("   total carrier charge: " . $rates[0]["totalCarrierCharge"]);
	
    println("Preparing shipment with selected rates, options; and attach documents ...");
	$shipment["rates"] = $rates;
	$shipment["shipmentOptions"] = array(
		array("name" => "SHIPPER_ID", "value" => $postal_reporting_number),
		array("name" => "ADD_TO_MANIFEST", "value" => true)
	); 
	$shipment["documents"] = array($my_shipment_document);

	# submit a shipment creation request and purchase a shipment label
	# underlying API: POST /shipments
    println("Purchasing shipping label ...");
    $shipment_orig_tx_id = get_pb_tx_id();
    $shipment->createAndPurchase($auth_obj, $shipment_orig_tx_id, true);

    println("   parcel tracking number is " . $shipment["parcelTrackingNumber"]);
    foreach($shipment["documents"] as $doc) {
    	println("   document type is " . $doc["type"]);
        if (strtolower($doc["contentType"]) == "url" && isset($doc["contents"]))
            println("   document URL is " . $doc["contents"]);
	}

	# reprint a shipment label
	# underlying API: GET /shipments/{shipmentId}
    println("Reprinting label ...");
    $shipment->reprintLabel($auth_obj);
    foreach($shipment["documents"] as $doc) {
    	println("   document type is " . $doc["type"]);
        if (strtolower($doc["contentType"]) == "url" && isset($doc["contents"]))
            println("   document URL is " . $doc["contents"]);
	}       

	# retry a shipment purchase request 
	# underlying API: GET /shipments?originalTransactionId    
    println("Retrying shipment order ...");
    $shipment->retry($auth_obj, get_pb_tx_id(),  $shipment_orig_tx_id);
 
	# get tracking information
	# Underlying API: GET /tracking/{trackingNumber}
	println("Get tracking status ...");
    $tracking = new PBShippingTracking(
    	array("trackingNumber" => $shipment["parcelTrackingNumber"]));
    try {
        $tracking->updateStatus($auth_obj);
        println("   status = " . $tracking["status"]);
	}      
    catch(PBShippingApiError $e) {
    	if (PBShipping::$is_production == false) {
            println("   no tracking information in sandbox environment");	
		}	
		else {
			throw $e;
		}
	}

	# create a manifest
	# underlying API: POST /manifests
    println("Creating manifest ...");
    date_default_timezone_set('UTC'); # need this for strftime 
    $manifest = new PBShippingManifest(array(
    	"carrier" => $tracking["carrier"], 
    	"submissionDate" => strftime("%Y-%m-%d", time()),
    	"parcelTrackingNumbers" => array($shipment["parcelTrackingNumber"]),
    	"fromAddress" => $shipment["fromAddress"]));
    $manifest_orig_tx_id = get_pb_tx_id();
    $manifest->create($auth_obj, $manifest_orig_tx_id);
    println("   manifest tracking number is " . $manifest["manifestTrackingNumber"]);
    println("   manifest id is " . $manifest["manifestId"]);

	# reprint a manifest
	# underlying API: GET /manifests/{manifestId}
    println("Repringing manifest ...");
    $manifest->reprint($auth_obj);
    println("   reprinted manifestId is " . $manifest["manifestId"]);

	# retry a mainfest
	# Underly API: GET /manifests
    println("Retrying manifest request ...");
    $manifest->retry($auth_obj, get_pb_tx_id(), $manifest_orig_tx_id);
    println("   manifest id is " . $manifest["manifestId"]);

	# querying for a transaction report
	# Underlying API: GET /ledger/developers/{developerId}/transactions/reports
	println("Retrieving transaction report ...");
	$report_query_params = array();
	$report_query_params["merchantId"] = $postal_reporting_number;
    $report = $developer->getTransactionReport($auth_obj, $report_query_params);
    foreach($report["content"] as $next_row)
    	println(sprintf("   id: %s type: %s", 
    		$next_row["transactionId"], $next_row["transactionType"]));

	# submit a shipment cancellation request
	# underlying API: DELETE /shipments/{shipmentId}
    println("Canceling shipment order ...");
    $cancel_result = $shipment->cancel($auth_obj, $shipment_orig_tx_id, 
    	$shipment["rates"][0]["carrier"]);
    println("   status: " . $cancel_result["status"]);


}
catch (PBShippingApiError $e) {
	
	println("hit an exception: " . $e->getMessage());
	$http_status = $e->getHttpStatus();
	$http_body = $e->getHttpBody();
	$error_info = $e->getErrorInfo(); 
	
	if ($http_status != null) 
		println("   http status = " . $http_status);
	if (empty($error_info)) {
		if ($http_body != null) 
			println("   http body: " . $http_body);
	}
	else {
		foreach($error_info as $err)
			println("   code: " . $err["errorCode"] . " message: " . $err["message"]);
	} 
}

?>
