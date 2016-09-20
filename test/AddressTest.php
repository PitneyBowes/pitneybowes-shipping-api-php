<?php
require_once('TestUtil.php');

class AddressTest extends PHPUnit_Framework_TestCase {
	
	public function setUp() {
    	$this->auth_obj = new PBShippingAuthentication(
    		getenv("PBSHIPPING_KEY"), getenv("PBSHIPPING_SECRET"));   
	}
	
	public function tearDown() {
	}
		
    public function testAddress() {
    		
    	print "Testing get countries call ..." . "\n";
    	$res = PBShippingCarrier::getCountriesForCarrier(
    		$this->auth_obj, "usps", "US");    	
        
        print "Testing address verification ..." . "\n";        
		$origin_addr = array(
			"addressLines" => array("37 Executive Drive"), 
			"cityTown" => "Danbury",
			"stateProvince" => "Connecticut",
			"postalCode" => "06810",
			"countryCode" => "US");
        PBShippingAddress::verify($this->auth_obj, $origin_addr);  
        // expect the address is cleansed and changed
        $this->assertEquals("validated_changed", 
        	strtolower($origin_addr["status"]));
    }
}