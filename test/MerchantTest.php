<?php
require_once('TestUtil.php');

class MerchantTest extends PHPUnit_Framework_TestCase {
	
	public function setUp() {
    	$this->auth_obj = new PBShippingAuthentication(
    		getenv("PBSHIPPING_KEY"), getenv("PBSHIPPING_SECRET"));   
	}
	
	public function tearDown() {
	}
		
    public function testMechant() {

		$developer = TestUtil::setup_developer($this->auth_obj);
	    		
    	print "Testing merchant registration and query ..." . "\n";
		list($merchant, $account_num) = TestUtil::setup_merchant(
			$this->auth_obj, $developer);
			
        print "Testing account balance query ..." . "\n"; 
        $balance = PBShippingAccount::getBalanceByAccountNumber(
        	$this->auth_obj, $account_num);
    }
}