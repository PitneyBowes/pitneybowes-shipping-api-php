# OpenAPI\Client\CrossBorderQuotesApi

All URIs are relative to *https://api-qa.pitneybowes.com/shippingservices*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCrossBorderQuotes**](CrossBorderQuotesApi.md#getCrossBorderQuotes) | **POST** /v1/crossborder/checkout/quotes | Cross-Border Quotes
[**predictedHSCode**](CrossBorderQuotesApi.md#predictedHSCode) | **POST** /v1/crossborder/hs-classification/items | Predicts the HS Code for a parcel



## getCrossBorderQuotes

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesResponse getCrossBorderQuotes($cross_border_quotes_request, $x_pb_unified_error_structure)

Cross-Border Quotes

This operation provides an estimate of the duties, taxes, and transportation costs for the items in a buyer's online shopping basket. The API calculates how many separate parcels are required to ship the items and estimates costs. The API checks each item's eligibility to clear customs and returns the quote for eligible items. To look for futher info please look into [Cross-Border Quotes](https://shipping.pitneybowes.com/api/post-quotes.html#)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CrossBorderQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cross_border_quotes_request = {"quoteCurrency":"USD","basketCurrency":"USD","fromAddress":{"name":"John Smith","residential":false,"company":"Supplies","addressLines":["545 Market St"],"cityTown":"San Francisco","stateProvince":"CA","postalCode":"94105","countryCode":"US","email":"john@example.com","phone":"415-555-0000"},"toAddress":{"name":"Jan Jones","residential":true,"addressLines":["2168 King St N"],"cityTown":"Waterloo","stateProvince":"ON","postalCode":"N2J 4G8","countryCode":"CA","email":"jan@example.com","phone":"519-555-0000"},"basketItems":[{"brand":"","categories":[{"categoryCode":"UNKNOWN","descriptions":[{"locale":"en","name":"Dress","parentsNames":["Clothing","Women"]}],"parentCategoryCode":"6543","url":"www.example.com"}],"description":"Red Embroidered","eccn":"EAR99","hazmats":["hazmat","ormd"],"hSTariffCode":"4203100001","hSTariffCodeCountry":"AU","identifiers":[{"number":"123456","source":"isbn"}],"imageUrls":["www.example.com"],"itemDimension":{"length":11,"height":8.5,"width":5,"unitOfMeasurement":"IN"},"itemId":"G_123456","manufacturer":"","originCountryCode":"CN","pricing":{"price":20,"codPrice":[{"price":20,"cod":"CA","includesDuty":false,"includesTaxes":false}],"dutiableValue":20},"quantity":2,"unitPrice":19.99,"unitWeight":{"weight":5,"unitOfMeasurement":"lb"},"url":"http://www.example.com/products/160921_030"}],"rates":[{"carrier":"PBI","serviceId":"PBXPS"}],"shipmentOptions":[{"name":"SHIPPER_ID","value":"9024324564"},{"name":"CLIENT_ID","value":"789123"},{"name":"CARRIER_FACILITY_ID","value":"US_ELOVATIONS_KY"}]}; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequest | 
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->getCrossBorderQuotes($cross_border_quotes_request, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrossBorderQuotesApi->getCrossBorderQuotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cross_border_quotes_request** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequest**](../Model/CrossBorderQuotesRequest.md)|  |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesResponse**](../Model/CrossBorderQuotesResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## predictedHSCode

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ParcelProtectionPolicyResponse predictedHSCode($x_pb_transaction_id, $manifest, $x_pb_unified_error_structure)

Predicts the HS Code for a parcel

This operation predicts the HS Code for a parcel being shipped internationally and gives the level of confidence in the prediction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CrossBorderQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = 'x_pb_transaction_id_example'; // string | Required. A unique identifier for the transaction, up to 25 characters.
$manifest = {"carrier":"Newgistics","containerType":"Carton","parcelTrackingNumbers":["9205500000000000000000","9206600000000000000000"],"documents":[{"resolution":"DPI_203","size":"DOC_4X4","fileFormat":"PDF"}],"parameters":[{"name":"CLIENT_CONTAINER_ID","value":"AB12345678"},{"name":"SHIPMENT_REFERENCE_NUMBER","value":"CD12345678"},{"name":"CLIENT_FACILITY_ID","value":"7777"},{"name":"CARRIER_GATEWAY_FACILITY_ID","value":"1234"},{"name":"CARRIER_FACILITY_ID","value":"4321"},{"name":"PRINT_CUSTOM_MESSAGE_1","value":"Container: AB12345678, Shipment: CD12345678"},{"name":"current_container","value":"1"},{"name":"total_container_count","value":"2"},{"name":"client_Id","value":"NGST"}]}; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Manifest | manifest
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->predictedHSCode($x_pb_transaction_id, $manifest, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrossBorderQuotesApi->predictedHSCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| Required. A unique identifier for the transaction, up to 25 characters. |
 **manifest** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Manifest**](../Model/Manifest.md)| manifest |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ParcelProtectionPolicyResponse**](../Model/ParcelProtectionPolicyResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

