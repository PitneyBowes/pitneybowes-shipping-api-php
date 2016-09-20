<?php
require_once('TestUtil.php');

class TransactionReportTest extends PHPUnit_Framework_TestCase {
	
	public function setUp() {
    	$this->auth_obj = new PBShippingAuthentication(
    		getenv("PBSHIPPING_KEY"), getenv("PBSHIPPING_SECRET")); 
		$this->developer = TestUtil::setup_developer($this->auth_obj);		
		list($merchant, $account_num) = TestUtil::setup_merchant(
   			$this->auth_obj, $this->developer);
		$shipper_id = $merchant["postalReportingNumber"];  
	}
	
	public function tearDown() {
	}
		
	public function verifyAndPrintReport($report, $query) {
		
        print "  Total matching records = " . strval($report["totalElements"]) . "\n";
        print "  Total number of pages = " . strval($report["totalPages"]) . "\n";
        print "  Current page number is " . strval($report["number"]) . "\n";
        print "  Page size is ". strval($report["size"]) . "\n";
        print "  Sort by " . $report["sort"][0]["property"] . "\n";
        
        if ($report["sort"][0]["ascending"] == True)
            $sort_dir = "asc";
        else
            $sort_dir = "desc";
        $this->assertEquals($query["sort"], 
        	$report["sort"][0]["property"] . "," . $sort_dir);

        $rate_benchmark = TestUtil::check_shipment_rate(
        	$this->auth_obj, $this->developer);	
			
        foreach ($report["content"] as $txn) {
			if (strpos($txn["transactionType"], "POSTAL PRINT"))  {
            	$this->assertEquals($rate_benchmark, $txn["developerRateAmount"]);
			}
			$s = sprintf("      timestamp: %s txid: %s type: %s rate: %.2f balance: %.2f\n",
				$txn["transactionDateTime"], 
				$txn["transactionId"],
				$txn["transactionType"],
				$txn["developerRateAmount"],
				$txn["shipperPostagePaymentAccountBalance"]);
            print $s;
		}
	}
	
    public function testTransactionReport() {
    		
    	date_default_timezone_set('UTC'); # need this for strftime 
    		
    	print "Testing get transaction report  ..." . "\n";
		$query = array(); 
		
		$endtime = new DateTime(null, new DateTimeZone('UTC'));
		$starttime = (new DateTime(null, new DateTimeZone("UTC")))->modify("-28 days");
	
		$query["fromDate"] = substr($starttime->format(DateTime::ISO8601), 0, 19) . "Z";
		$query["toDate"] = substr($endtime->format(DateTime::ISO8601), 0, 19) . "Z";
		$query["transactionId"] = "%%" . TestUtil::TEST_SUITE_TXID_PREFIX . "%%";
		$query["merchantId"] = $this->shipper_id;
		$query["sort"] = "transactionId,desc";
		
    	$report = $this->developer->getTransactionReport($this->auth_obj, $query);	
		$this->verifyAndPrintReport($report, $query);
    }
}