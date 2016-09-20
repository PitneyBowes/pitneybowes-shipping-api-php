<?php

class TestUtil {

	public static $my_bulk_merchant_addr = array(
		"addressLines" => array("27 Waterview Drive"),
    	"cityTown" => "Shelton",
    	"stateProvince" => "Connecticut",
    	"postalCode" => "06484",
    	"countryCode" => "US",
    	"company" => "Pitney Bowes",
    	"name" => "John Doe",
    	"email" => "dummy@pbshipping.com", 
    	"phone" => "203-792-1600",
    	"residential" => False
	);
	public static $origin_addr = array(
    	"addressLines" => array("37 Executive Drive"), 
    	"cityTown" => "Danbury",
    	"stateProvince" => "Connecticut",
    	"postalCode" => "06810",
    	"countryCode" => "US"
	);
	public static $dest_addr = array(
    	"addressLines" => array("27 Waterview Drive"), 
    	"cityTown" => "Shelton",
    	"stateProvince" => "Connecticut",
    	"postalCode" => "06484",
    	"countryCode" => "US"
	);
	public static $my_parcel = array(
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
	public static $my_shipment_document = array(
		"type" => "SHIPPING_LABEL",     
		"contentType" => "URL",
		"size" => "DOC_8X11",
		"fileFormat" => "PDF",
		"printDialogOption" => "NO_PRINT_DIALOG"
	);
	public static $my_rate_request = array(
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
	
	# this helps to identify transactions originating from the test suite
	const TEST_SUITE_TXID_PREFIX = "KYCB";
	
	# generate a unique transaction id  
	public static function get_pb_tx_id() {
		$ms = substr((string) microtime(), 2, 7);
		return TestUtil::TEST_SUITE_TXID_PREFIX . gmdate("YmdHis") . $ms;
	}
	
	# set up developer record
	public static function setup_developer($auth_obj) {
		$developer = new PBShippingDeveloper(
			array("developerId" => getenv("PBSHIPPING_DEVID")));
		$developer->refresh($auth_obj);
		return $developer;
	}
	
	# set up merchant according to environment setting
	public static function setup_merchant($auth_obj, $developer) {
		$merchant_email = getenv(PBSHIPPING_MERCHANT);
		if ($developer[$bulkMode] == false) {
			$merchant = $developer->registerMerchantIndividualAccount(
				$auth_obj, $merchant_email);
			$acct_num = $merchant["paymentAccountNumber"];
		}
		else {
			try {
				$raw_addr = TestUtil::$my_bulk_merchant_addr;
				$raw_addr["email"] = $merchant_email;
				$merchant = $developer->registerMerchantBulkAccount(
					$auth_obj, $raw_addr);
			}
			catch (PBShippingAPIError $api_err) {
				$error_info = $api_err->getErrorInfo();
				if (empty($error_info))
					throw $api_err;			
				if (strpos($error_info[0]["message"], "Duplicate entry") 
					== False) 
					throw $api_err;
				$merchant = $developer->getMerchantBulkAccount(
					$auth_obj, $merchant_email);
			}
			$acct_num = $developer["paymentAccount"];
		}
		return array($merchant, $acct_num);
	}
	
	# return the shipment rate used in the test suite for reference
	public static function check_shipment_rate($auth_obj, $developer) {
    	$xtra_hdrs = null;
    	if ($developer["bulkMode"] == True && $developer["useShipperRate"] == True)
    		$xtra_hdrs = array('X-PB-Shipper-Rate-Plan: PP_SRP_NEWBLUE');

    	$shipment = new PBShippingShipment(array(
    		"fromAddress" => TestUtil::$origin_addr,
    		"toAddress" => TestUtil::$dest_addr,
    		"parcel" => TestUtil::$my_parcel,
    		"rates" => array(TestUtil::$my_rate_request)
    	)); 
    	
    	$rates = $shipment->getRates($auth_obj, TestUtil::get_pb_tx_id(), true);
		return $rates[0]["totalCarrierCharge"];
	}
	
	# create a single shipment and purchase a label    
	public static function create_single_shipment($auth_obj, $developer, 
		$shipper_id) {
 
    	$xtra_hdrs = null;
    	if ($developer["bulkMode"] == True && $developer["useShipperRate"] == True)
    		$xtra_hdrs = array('X-PB-Shipper-Rate-Plan: PP_SRP_NEWBLUE');

    	$shipment = new PBShippingShipment(array(
    		"fromAddress" => TestUtil::$origin_addr,
    		"toAddress" => TestUtil::$dest_addr,
    		"parcel" => TestUtil::$my_parcel,
    		"rates" => array(TestUtil::$my_rate_request),
    		"documents" => array(TestUtil::$my_shipment_document)
    	)); 
    	$shipment["shipmentOptions"] = array(
    		array("name" => "SHIPPER_ID", "value" => $shipper_id),
    		array("name" => "ADD_TO_MANIFEST", "value" => true)
		);
		
		$txid = TestUtil::get_pb_tx_id();
		$shipment->createAndPurchase($auth_obj, $txid, True, $xtra_hdrs);
		
		return array($shipment, $txid);
	}

	# verify the ledger balance is correct after shipment label purchase
	public static function verify_ledger_balance_after_txn($shipment, 
		$start_balance, $end_balance) {
			
		$balance_delta = $start_balance.balance - $end_balance.balance;
		# if account has been replenished using auto-refill, skip this case
		if ($balance_delta < 0) {
			print "    ending balance increases, probably due to auto reload, skip check\n";
        	return True;
		}
		
		$txn_charge = $shipment["rates"][0]["totalCarrierCharge"];
		$is_same = (txn_charge == balance_delta);
		if ($is_same == False) {
			$msg = sprintf("    verify balance failed: difference is %f", 
				$txn_charge - $balance_delta);
        	print $msg;
		}
		return is_same;
	}
}
