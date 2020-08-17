# pitneybowesShipping\PickupApi

All URIs are relative to *https://api-sandbox.pitneybowes.com/shippingservices*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPickup**](PickupApi.md#cancelPickup) | **POST** /v1/pickups/{pickupId}/cancel | Cancel Pickup
[**getPickupschedule**](PickupApi.md#getPickupschedule) | **POST** /v1/pickups/schedule | Address validation



## cancelPickup

> \pitneybowesShipping\shippingApi.model\InlineResponse2001 cancelPickup($x_pb_transaction_id, $pickup_id, $x_pb_unified_error_structure)

Cancel Pickup

This operation schedules a USPS package pickup from a residential or commercial location and provides a pickup confirmation number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\PickupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = 'x_pb_transaction_id_example'; // string | A unique identifier for the transaction, up to 25 characters
$pickup_id = 'pickup_id_example'; // string | A unique identifier for the transaction, up to 25 characters
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->cancelPickup($x_pb_transaction_id, $pickup_id, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickupApi->cancelPickup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| A unique identifier for the transaction, up to 25 characters |
 **pickup_id** | **string**| A unique identifier for the transaction, up to 25 characters |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\pitneybowesShipping\shippingApi.model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPickupschedule

> \pitneybowesShipping\shippingApi.model\SchedulePickupResponse getPickupschedule($x_pb_transaction_id, $schedule_pickup, $x_pb_unified_error_structure)

Address validation

This operation schedules a USPS package pickup from a residential or commercial location and provides a pickup confirmation number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = pitneybowesShipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new pitneybowesShipping\Api\PickupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = 'x_pb_transaction_id_example'; // string | A unique identifier for the transaction, up to 25 characters
$schedule_pickup = new \pitneybowesShipping\shippingApi.model\SchedulePickup(); // \pitneybowesShipping\shippingApi.model\SchedulePickup | Schedule Pickup request.
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->getPickupschedule($x_pb_transaction_id, $schedule_pickup, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickupApi->getPickupschedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| A unique identifier for the transaction, up to 25 characters |
 **schedule_pickup** | [**\pitneybowesShipping\shippingApi.model\SchedulePickup**](../Model/SchedulePickup.md)| Schedule Pickup request. |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\pitneybowesShipping\shippingApi.model\SchedulePickupResponse**](../Model/SchedulePickupResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

