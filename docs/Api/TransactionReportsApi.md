# pitneybowesShipping\TransactionReportsApi

All URIs are relative to *https://api-sandbox.pitneybowes.com/shippingservices*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionReport**](TransactionReportsApi.md#getTransactionReport) | **GET** /v4/ledger/developers/{developerId}/transactions/reports | This operation retrieves all transactions for a specified period of time.



## getTransactionReport

> \pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport getTransactionReport($developer_id, $x_pb_unified_error_structure, $from_date, $ship_details, $page, $size, $print_status, $to_date, $transaction_type, $merchant_id, $sort, $parcel_tracking_number, $transaction_id)

This operation retrieves all transactions for a specified period of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\TransactionReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$developer_id = 'developer_id_example'; // string | developerId
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | fromDate
$ship_details = 0; // int | 
$page = 56; // int | 
$size = 20; // int | 
$print_status = 'print_status_example'; // string | printStatus
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | toDate
$transaction_type = 'transaction_type_example'; // string | transactionType
$merchant_id = 'merchant_id_example'; // string | The value of the postalReportingNumber element in the [merchant object](https://shipping.pitneybowes.com/reference/resource-objects.html). This value is also the merchant's Shipper ID.
$sort = 'sort_example'; // string | Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc). Use the following form-  * **sort=<property_name>,<sort_direction>** For example- **sort=transactionId,desc**
$parcel_tracking_number = 'parcel_tracking_number_example'; // string | Parcel tracking number of the shipment.
$transaction_id = 'transaction_id_example'; // string | The unique string that identifies all the transactions associated with a given shipment. The string comprises the developer ID and the shipment's X-PB-TransactionId, separated by an underscore (_). For example-  * **transactionId=44397664_ad5aa07-ad7414-a78a-c22b3**

try {
    $result = $apiInstance->getTransactionReport($developer_id, $x_pb_unified_error_structure, $from_date, $ship_details, $page, $size, $print_status, $to_date, $transaction_type, $merchant_id, $sort, $parcel_tracking_number, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionReportsApi->getTransactionReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **developer_id** | **string**| developerId |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]
 **from_date** | **\DateTime**| fromDate | [optional]
 **ship_details** | **int**|  | [optional] [default to 0]
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional] [default to 20]
 **print_status** | **string**| printStatus | [optional]
 **to_date** | **\DateTime**| toDate | [optional]
 **transaction_type** | **string**| transactionType | [optional]
 **merchant_id** | **string**| The value of the postalReportingNumber element in the [merchant object](https://shipping.pitneybowes.com/reference/resource-objects.html). This value is also the merchant&#39;s Shipper ID. | [optional]
 **sort** | **string**| Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc). Use the following form-  * **sort&#x3D;&lt;property_name&gt;,&lt;sort_direction&gt;** For example- **sort&#x3D;transactionId,desc** | [optional]
 **parcel_tracking_number** | **string**| Parcel tracking number of the shipment. | [optional]
 **transaction_id** | **string**| The unique string that identifies all the transactions associated with a given shipment. The string comprises the developer ID and the shipment&#39;s X-PB-TransactionId, separated by an underscore (_). For example-  * **transactionId&#x3D;44397664_ad5aa07-ad7414-a78a-c22b3** | [optional]

### Return type

[**\pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport**](../Model/PageRealTransactionDetailReport.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

