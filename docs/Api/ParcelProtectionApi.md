# pitneybowesShipping\ParcelProtectionApi

All URIs are relative to *https://api-sandbox.pitneybowes.com/shippingservices*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelParcelProtection**](ParcelProtectionApi.md#cancelParcelProtection) | **POST** /v1/parcel-protection/void | Parcel Protection Coverage
[**getParcelProtectionCoverage**](ParcelProtectionApi.md#getParcelProtectionCoverage) | **POST** /v1/parcel-protection/create | Parcel Protection Coverage
[**getParcelProtectionQuote**](ParcelProtectionApi.md#getParcelProtectionQuote) | **POST** /v1/parcel-protection/quote | Parcel Protection Quote
[**getParcelProtectionReports**](ParcelProtectionApi.md#getParcelProtectionReports) | **GET** /v1/parcel-protection/{developerId}/policies | Parcel Protection Reports



## cancelParcelProtection

> \pitneybowesShipping\shippingApi.model\VoidParcelProtectionResponse cancelParcelProtection($x_pb_transaction_id, $parcel_protection_reference_id, $void_parcel_protection_request, $x_pb_unified_error_structure)

Parcel Protection Coverage

This API lets merchants request Pitney Bowes [Parcel Protection](https://shipping.pitneybowes.com/faqs/parcel-protection.html) coverage for shipments. Merchants can request coverage for shipments created with the Shipping APIs as well as for shipments created with other platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\ParcelProtectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = 'x_pb_transaction_id_example'; // string | Required. A unique identifier for the transaction, up to 25 characters.
$parcel_protection_reference_id = 'parcel_protection_reference_id_example'; // string | Required. The identifier for the PB Parcel Protection policy that is being voided.
$void_parcel_protection_request = {"shipperID":"9024324564","parcelProtectionAccountID":"IPACT2345678"}; // \pitneybowesShipping\shippingApi.model\VoidParcelProtectionRequest | manifest
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->cancelParcelProtection($x_pb_transaction_id, $parcel_protection_reference_id, $void_parcel_protection_request, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelProtectionApi->cancelParcelProtection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| Required. A unique identifier for the transaction, up to 25 characters. |
 **parcel_protection_reference_id** | **string**| Required. The identifier for the PB Parcel Protection policy that is being voided. |
 **void_parcel_protection_request** | [**\pitneybowesShipping\shippingApi.model\VoidParcelProtectionRequest**](../Model/VoidParcelProtectionRequest.md)| manifest |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\pitneybowesShipping\shippingApi.model\VoidParcelProtectionResponse**](../Model/VoidParcelProtectionResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getParcelProtectionCoverage

> \pitneybowesShipping\shippingApi.model\ParcelProtectionCreateResponse getParcelProtectionCoverage($x_pb_transaction_id, $parcel_protection_create_request, $x_pb_unified_error_structure)

Parcel Protection Coverage

This API lets merchants request Pitney Bowes [Parcel Protection](https://shipping.pitneybowes.com/faqs/parcel-protection.html) coverage for shipments. Merchants can request coverage for shipments created with the Shipping APIs as well as for shipments created with other platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\ParcelProtectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = 'x_pb_transaction_id_example'; // string | Required. A unique identifier for the transaction, up to 25 characters.
$parcel_protection_create_request = {"shipmentInfo":{"trackingNumber":"940509898641491871138","carrier":"USPS","serviceId":"PM","insuranceCoverageValue":1000,"insuranceCoverageValueCurrency":"USD","parcelInfo":{"commodityList":[{"categoryPath":"electronics","itemCode":"SKU1084","name":"Laptop","url":"https://example.com/computers/laptop/1084"}]},"shipperInfo":{"shipperID":"9024324564","address":{"addressLines":["545 Market St"],"cityTown":"San Francisco","stateProvince":"CA","postalCode":"94105-2847","countryCode":"US"},"companyName":"Supplies","givenName":"John","middleName":"James","familyName":"Smith","email":"john@example.com","phoneNumbers":[{"number":"1234567890","type":"business phone"}]},"consigneeInfo":{"address":{"addressLines":["284 W Fulton"],"cityTown":"Garden City","stateProvince":"KS","postalCode":"67846","countryCode":"US"},"companyName":"Shop","givenName":"Mary","middleName":"Anne","familyName":"Jones","email":"mary@example.com","phoneNumbers":[{"number":"6205551234","type":"business phone"},{"number":"6205554321","type":"fax"}]}}}; // \pitneybowesShipping\shippingApi.model\ParcelProtectionCreateRequest | manifest
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->getParcelProtectionCoverage($x_pb_transaction_id, $parcel_protection_create_request, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelProtectionApi->getParcelProtectionCoverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| Required. A unique identifier for the transaction, up to 25 characters. |
 **parcel_protection_create_request** | [**\pitneybowesShipping\shippingApi.model\ParcelProtectionCreateRequest**](../Model/ParcelProtectionCreateRequest.md)| manifest |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\pitneybowesShipping\shippingApi.model\ParcelProtectionCreateResponse**](../Model/ParcelProtectionCreateResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getParcelProtectionQuote

> \pitneybowesShipping\shippingApi.model\ParcelProtectionQuoteResponse getParcelProtectionQuote($x_pb_transaction_id, $parcel_protection_quote_request, $x_pb_unified_error_structure)

Parcel Protection Quote

This API provides a quote for covering a shipment through Pitney Bowes [Parcel Protection](https://www.pitneybowes.com/us/ecommerce-delivery-services/parcel-protection.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\ParcelProtectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = 'x_pb_transaction_id_example'; // string | Required. A unique identifier for the transaction, up to 25 characters.
$parcel_protection_quote_request = {"shipmentInfo":{"carrier":"USPS","serviceId":"PM","insuranceCoverageValue":1000,"insuranceCoverageValueCurrency":"USD","parcelInfo":{"commodityList":[{"categoryPath":"electronics","itemCode":"SKU1084","name":"Laptop","url":"https://example.com/computers/laptop/1084"}]},"shipperInfo":{"shipperID":"9024324564","address":{"addressLines":["545 Market St"],"cityTown":"San Francisco","stateProvince":"CA","postalCode":"94105-2847","countryCode":"US"}},"consigneeInfo":{"address":{"addressLines":["284 W Fulton"],"cityTown":"Garden City","stateProvince":"KS","postalCode":"67846","countryCode":"US"}}}}; // \pitneybowesShipping\shippingApi.model\ParcelProtectionQuoteRequest | manifest
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->getParcelProtectionQuote($x_pb_transaction_id, $parcel_protection_quote_request, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelProtectionApi->getParcelProtectionQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| Required. A unique identifier for the transaction, up to 25 characters. |
 **parcel_protection_quote_request** | [**\pitneybowesShipping\shippingApi.model\ParcelProtectionQuoteRequest**](../Model/ParcelProtectionQuoteRequest.md)| manifest |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\pitneybowesShipping\shippingApi.model\ParcelProtectionQuoteResponse**](../Model/ParcelProtectionQuoteResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getParcelProtectionReports

> \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponse getParcelProtectionReports($x_pb_transaction_id, $developer_id, $policy_created_from_date, $x_pb_unified_error_structure, $policy_created_to_date, $policy_reference_id, $parcel_tracking_number, $merchant_id, $policy_status, $size, $page, $sort)

Parcel Protection Reports

This operation retrieves the policy status and other information on the Parcel Protection policies you have purchased for your shipments. Further Details https://shipping.pitneybowes.com/api/get-parcel-protection-reports.html

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\ParcelProtectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = 'x_pb_transaction_id_example'; // string | Required. A unique identifier for the transaction, up to 25 characters.
$developer_id = 'developer_id_example'; // string | Required. Your Pitney Bowes developer ID.
$policy_created_from_date = 'policy_created_from_date_example'; // string | The beginning of the date range. Specify this value in UTC using the ISO 8601 standard. You must include both date and time, and you must end the time with Z to indicate a zero offset.
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.
$policy_created_to_date = 'policy_created_to_date_example'; // string | The end of the date range. Specify this value in UTC using the ISO 8601 standard. You must include both date and time, and you must end the time with Z to indicate a zero offset.
$policy_reference_id = 'policy_reference_id_example'; // string | The unique identifier for the PB Parcel Protection policy.].
$parcel_tracking_number = 'parcel_tracking_number_example'; // string | The parcel tracking number of the shipment that the policy applies to.
$merchant_id = 'merchant_id_example'; // string | The merchant's Shipper ID. This is the value of the postalReportingNumber element in the Merchant Object.
$policy_status = 'policy_status_example'; // string | Whether the policy is active or voided.
$size = 'size_example'; // string | The number of transactions to return per page in the result set.
$page = 'page_example'; // string | The index number of the page to return. Page index numbering starts at 0. Specifying page=0 returns the first page of the result set.
$sort = 'sort_example'; // string | Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc).

try {
    $result = $apiInstance->getParcelProtectionReports($x_pb_transaction_id, $developer_id, $policy_created_from_date, $x_pb_unified_error_structure, $policy_created_to_date, $policy_reference_id, $parcel_tracking_number, $merchant_id, $policy_status, $size, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelProtectionApi->getParcelProtectionReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| Required. A unique identifier for the transaction, up to 25 characters. |
 **developer_id** | **string**| Required. Your Pitney Bowes developer ID. |
 **policy_created_from_date** | **string**| The beginning of the date range. Specify this value in UTC using the ISO 8601 standard. You must include both date and time, and you must end the time with Z to indicate a zero offset. |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]
 **policy_created_to_date** | **string**| The end of the date range. Specify this value in UTC using the ISO 8601 standard. You must include both date and time, and you must end the time with Z to indicate a zero offset. | [optional]
 **policy_reference_id** | **string**| The unique identifier for the PB Parcel Protection policy.]. | [optional]
 **parcel_tracking_number** | **string**| The parcel tracking number of the shipment that the policy applies to. | [optional]
 **merchant_id** | **string**| The merchant&#39;s Shipper ID. This is the value of the postalReportingNumber element in the Merchant Object. | [optional]
 **policy_status** | **string**| Whether the policy is active or voided. | [optional]
 **size** | **string**| The number of transactions to return per page in the result set. | [optional]
 **page** | **string**| The index number of the page to return. Page index numbering starts at 0. Specifying page&#x3D;0 returns the first page of the result set. | [optional]
 **sort** | **string**| Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc). | [optional]

### Return type

[**\pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponse**](../Model/ParcelProtectionPolicyResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

