# OpenAPI\Client\RateParcelsApi

All URIs are relative to *https://api-qa.pitneybowes.com/shippingservices*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rateParcel**](RateParcelsApi.md#rateParcel) | **POST** /v1/rates | Use this operation to rate a parcel before you print and purchase a shipment label. You can rate a parcel for multiple services and multiple parcel types with a single API request.



## rateParcel

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment rateParcel($shipment, $x_pb_unified_error_structure, $x_pb_shipper_rate_plan, $x_pb_integrator_carrier_id, $x_pb_shipper_carrier_account_id, $include_delivery_commitment, $carrier)

Use this operation to rate a parcel before you print and purchase a shipment label. You can rate a parcel for multiple services and multiple parcel types with a single API request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RateParcelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment = {"fromAddress":{"company":"Supplier","name":"J. Smith","phone":"303-555-1213","email":"js@example.com","residential":false,"addressLines":["4750 Walnut Street"],"cityTown":"Boulder","stateProvince":"CO","postalCode":"80301","countryCode":"US"},"toAddress":{"company":"Shop","name":"J. Jones","phone":"203-000-1234","email":"jjones@example.com","residential":false,"addressLines":["771 Orange St"],"cityTown":"New Haven","stateProvince":"CT","postalCode":"06511","countryCode":"US"},"parcel":{"weight":{"weight":1,"unitOfMeasurement":"OZ"},"dimension":{"length":5,"width":0.25,"height":4,"unitOfMeasurement":"IN","irregularParcelGirth":1}},"rates":[{"carrier":"USPS","parcelType":"PKG","inductionPostalCode":"06484"}]}; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment | Shipment request for Rates
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.
$x_pb_shipper_rate_plan = 'x_pb_shipper_rate_plan_example'; // string | USPS Only. Shipper rate plan, if applicable. For more information, see [this FAQ](https://shipping.pitneybowes.com/faqs/rates.html#rate-plans-faq)
$x_pb_integrator_carrier_id = 'x_pb_integrator_carrier_id_example'; // string | USPS Only. Negotiated services rate, if applicable.
$x_pb_shipper_carrier_account_id = 'x_pb_shipper_carrier_account_id_example'; // string | UPS (United Parcel Service) Only. The unique identifier returned in the shipperCarrierAccountId field by the [Register an Existing Carrier Account](https://shipping.pitneybowes.com/api/post-carrier-accounts-register.html) API.
$include_delivery_commitment = True; // bool | When set to true, returns estimated transit time in days.
$carrier = 'carrier_example'; // string | Cross-Border only. Required for PB Cross-Border. Set this to PBI.

try {
    $result = $apiInstance->rateParcel($shipment, $x_pb_unified_error_structure, $x_pb_shipper_rate_plan, $x_pb_integrator_carrier_id, $x_pb_shipper_carrier_account_id, $include_delivery_commitment, $carrier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateParcelsApi->rateParcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment**](../Model/Shipment.md)| Shipment request for Rates |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]
 **x_pb_shipper_rate_plan** | **string**| USPS Only. Shipper rate plan, if applicable. For more information, see [this FAQ](https://shipping.pitneybowes.com/faqs/rates.html#rate-plans-faq) | [optional]
 **x_pb_integrator_carrier_id** | **string**| USPS Only. Negotiated services rate, if applicable. | [optional]
 **x_pb_shipper_carrier_account_id** | **string**| UPS (United Parcel Service) Only. The unique identifier returned in the shipperCarrierAccountId field by the [Register an Existing Carrier Account](https://shipping.pitneybowes.com/api/post-carrier-accounts-register.html) API. | [optional]
 **include_delivery_commitment** | **bool**| When set to true, returns estimated transit time in days. | [optional]
 **carrier** | **string**| Cross-Border only. Required for PB Cross-Border. Set this to PBI. | [optional]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment**](../Model/Shipment.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

