<?php
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

