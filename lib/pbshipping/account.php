<?php
class PBShippingAccount extends PBShippingApiResource {

    #
    # MANAGING MERCHANTS
    # API: GET /ledger/accounts/{accountNumber}/balance
    # API signature: get/ledger/accounts/.../balance
    #
    # Retrieve the account balance of a merchant account.   
    #	
	public function getBalance($auth_obj) {
		
		if (!isset($this["accountNumber"]))
			throw new PBShippingMissingAttributeError("accountNumber");
		$api_version = PBShipping::getApiVersion("get/ledger/accounts/.../balance");	
        $api_path = sprintf("/ledger/accounts/%s/balance", $this["accountNumber"]);    
		return PBShippingRequestor::request($auth_obj, "get", $api_version, $api_path, null, null, null);	
	}
	
	public static function getBalanceByAccountNumber($auth_obj, $account_number) {
		return (new PBShippingAccount(array("accountNumber" => $account_number)))->getBalance($auth_obj);
	}	
}
