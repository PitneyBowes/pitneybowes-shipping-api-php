# pitneybowesShipping\TrackingApi

All URIs are relative to *https://api-sandbox.pitneybowes.com/shippingservices*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTrackingEvents**](TrackingApi.md#addTrackingEvents) | **POST** /v2/track/events | getTrackingDetails
[**getTrackingDetails**](TrackingApi.md#getTrackingDetails) | **GET** /v1/tracking/{trackingNumber} | getTrackingDetails



## addTrackingEvents

> \pitneybowesShipping\shippingApi.model\InlineResponse2002 addTrackingEvents($add_tracking_events, $x_pb_unified_error_structure)

getTrackingDetails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_tracking_events = {"carrier":"NEWGISTICS","references":[{"referenceType":"package","referenceValue":"1Z00","events":[{"eventCode":"DPB","carrierEventCode":"DOAC","eventDate":"2020-04-18","eventTime":"12:48:10","eventTimeOffset":"-06:00","eventCity":"Decatur","eventStateOrProvince":"IL","postalCode":"62521","country":"US"}]},{"referenceType":"package","referenceValue":"3Z30","events":[{"eventCode":"DPB","carrierEventCode":"DOAC","eventDate":"2020-04-18","eventTime":"12:50:00","eventTimeOffset":"-06:00","eventCity":"Decatur","eventStateOrProvince":"IL","postalCode":"62521","country":"US"}]}]}; // \pitneybowesShipping\shippingApi.model\AddTrackingEvents | add track event
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->addTrackingEvents($add_tracking_events, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->addTrackingEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_tracking_events** | [**\pitneybowesShipping\shippingApi.model\AddTrackingEvents**](../Model/AddTrackingEvents.md)| add track event |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\pitneybowesShipping\shippingApi.model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingDetails

> \pitneybowesShipping\shippingApi.model\TrackingResponse getTrackingDetails($tracking_number, $package_identifier_type, $carrier, $x_pb_unified_error_structure)

getTrackingDetails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracking_number = 'tracking_number_example'; // string | The tracking number for the shipment.
$package_identifier_type = 'TrackingNumber'; // string | packageIdentifierType
$carrier = 'carrier_example'; // string | carrier
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->getTrackingDetails($tracking_number, $package_identifier_type, $carrier, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->getTrackingDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_number** | **string**| The tracking number for the shipment. |
 **package_identifier_type** | **string**| packageIdentifierType | [default to &#39;TrackingNumber&#39;]
 **carrier** | **string**| carrier |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\pitneybowesShipping\shippingApi.model\TrackingResponse**](../Model/TrackingResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

