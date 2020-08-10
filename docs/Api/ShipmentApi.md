# OpenAPI\Client\ShipmentApi

All URIs are relative to *https://api-qa.pitneybowes.com/shippingservices*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment**](ShipmentApi.md#cancelShipment) | **DELETE** /v1/shipments/{shipmentId} | cancelShipment
[**createShipmentLabel**](ShipmentApi.md#createShipmentLabel) | **POST** /v1/shipments | This operation creates a shipment and purchases a shipment label.
[**reprintShipment**](ShipmentApi.md#reprintShipment) | **GET** /v1/shipments/{shipmentId} | reprintShipment
[**retryShipment**](ShipmentApi.md#retryShipment) | **GET** /v1/shipments | retryShipment



## cancelShipment

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CancelShipment cancelShipment($x_pb_transaction_id, $shipment_id, $x_pb_unified_error_structure, $x_pb_shipper_carrier_account_id, $cancel_initiator, $carrier)

cancelShipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = 'x_pb_transaction_id_example'; // string | Required. A unique identifier for the transaction, up to 25 characters.
$shipment_id = 'shipment_id_example'; // string | shipmentId
$x_pb_unified_error_structure = 'true'; // string | Recommended. Set this to true to use the standard error object if an error occurs.
$x_pb_shipper_carrier_account_id = 'x_pb_shipper_carrier_account_id_example'; // string | UPS Only. The unique identifier returned in the shipperCarrierAccountId field by the [Register an Existing Carrier Account API.(https://shipping.pitneybowes.com/api/post-carrier-accounts-register.html)
$cancel_initiator = SHIPPER; // string | Indicates that this refund request is initiated by the shipper. Set this to: SHIPPER
$carrier = USPS; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier | Conditional. The carrier. This is required if the carrier is not USPS

try {
    $result = $apiInstance->cancelShipment($x_pb_transaction_id, $shipment_id, $x_pb_unified_error_structure, $x_pb_shipper_carrier_account_id, $cancel_initiator, $carrier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| Required. A unique identifier for the transaction, up to 25 characters. |
 **shipment_id** | **string**| shipmentId |
 **x_pb_unified_error_structure** | **string**| Recommended. Set this to true to use the standard error object if an error occurs. | [optional] [default to &#39;true&#39;]
 **x_pb_shipper_carrier_account_id** | **string**| UPS Only. The unique identifier returned in the shipperCarrierAccountId field by the [Register an Existing Carrier Account API.(https://shipping.pitneybowes.com/api/post-carrier-accounts-register.html) | [optional]
 **cancel_initiator** | **string**| Indicates that this refund request is initiated by the shipper. Set this to: SHIPPER | [optional]
 **carrier** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier**](../Model/.md)| Conditional. The carrier. This is required if the carrier is not USPS | [optional]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CancelShipment**](../Model/CancelShipment.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createShipmentLabel

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment createShipmentLabel($x_pb_transaction_id, $shipment, $x_pb_unified_error_structure, $x_pb_integrator_carrier_id, $x_pb_shipper_rate_plan, $x_pb_shipment_group_id, $x_pb_shipper_carrier_account_id, $include_delivery_commitment)

This operation creates a shipment and purchases a shipment label.

The API returns the label as either a Base64 string or a link to a PDF. For more information visit [Create Shipment Documents](https://shipping.pitneybowes.com/api/post-shipments.html). Following are samples of different carriers -  * [Create a USPS (U.S. Postal Service) Label](https://shipping.pitneybowes.com/api/post-shipments-usps.html)  * [Create a USPS PMOD Label](https://shipping.pitneybowes.com/api/post-shipments-pmod.html) * [Create a USPS Scan-Based Return Label](https://shipping.pitneybowes.com/api/post-shipments-returns.html) * [Create a Pure Post Return Label](https://shipping.pitneybowes.com/api/post-shipments-pure-post-return.html) * [Create a Newgistics Label](https://shipping.pitneybowes.com/api/post-shipments-newgistics.html) * [Create a PB Presort Label](https://shipping.pitneybowes.com/api/post-shipments-presort.html) * [Create a PB Cross-Border Shipment](https://shipping.pitneybowes.com/api/post-shipments-cbds.html) * [Create a UPS (United Parcel Service) Label](https://shipping.pitneybowes.com/api/post-shipments-ups.html)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_pb_transaction_id = uniquevalue; // string | Required. A unique identifier for the transaction, up to 25 characters.
$shipment = {"fromAddress":{"company":"Pitney Bowes Inc.","name":"Paul Wright","phone":"203-555-1430","email":"john.publica@pb.com","residential":false,"addressLines":["27 Waterview Drive"],"cityTown":"Shelton","stateProvince":"CT","postalCode":"06484","countryCode":"US"},"toAddress":{"company":"ABC Company","name":"Rufous Sirius Canid","phone":"323 555-1212","email":"rs.canid@gmail.com","residential":true,"addressLines":["631 S Main St"],"cityTown":"Greenville","stateProvince":"SC","postalCode":"29601","countryCode":"US"},"parcel":{"weight":{"unitOfMeasurement":"OZ","weight":38},"dimension":{"unitOfMeasurement":"IN","length":6,"width":6,"height":6}},"rates":[{"carrier":"USPS","serviceId":"PM","parcelType":"PKG","specialServices":[{"specialServiceId":"DelCon","inputParameters":[{"name":"INPUT_VALUE","value":"0"}]}],"inductionPostalCode":"06484"}],"documents":[{"type":"SHIPPING_LABEL","contentType":"URL","size":"DOC_4X6","fileFormat":"PDF","printDialogOption":"NO_PRINT_DIALOG"}],"shipmentOptions":[{"name":"SHIPPER_ID","value":"3000090171"},{"name":"ADD_TO_MANIFEST","value":"true"},{"name":"HIDE_TOTAL_CARRIER_CHARGE","value":"true"},{"name":"PRINT_CUSTOM_MESSAGE_1","value":"custom message for label"},{"name":"SHIPPING_LABEL_RECEIPT","value":"NO_OPTIONS"}]}; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment | request
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.
$x_pb_integrator_carrier_id = 'x_pb_integrator_carrier_id_example'; // string | USPS Only. Negotiated services rate, if applicable.
$x_pb_shipper_rate_plan = 'x_pb_shipper_rate_plan_example'; // string | USPS Only. Shipper rate plan, if applicable. For more information, see [this FAQ](https://shipping.pitneybowes.com/faqs/rates.html#rate-plans-faq).
$x_pb_shipment_group_id = 'x_pb_shipment_group_id_example'; // string | **[Required parameter for PBPresort service](https://shipping.pitneybowes.com/api/post-shipments-presort.html)**.The job number that represents the agreement between the merchant and PB Presort. This was provided by Pitney Bowes during [merchant onboarding for PB Presort](https://shipping.pitneybowes.com/carriers/pb-presort.html).
$x_pb_shipper_carrier_account_id = 'x_pb_shipper_carrier_account_id_example'; // string | **[Required parameter for PBPresort service](https://shipping.pitneybowes.com/api/post-shipments-presort.html)**. The merchant's Mailer ID (MID), as provided by Pitney Bowes during merchant onboarding for PB Presort.
$include_delivery_commitment = 'include_delivery_commitment_example'; // string | If set to true, returns estimated transit times in days. Only for USPS Create Shipment. See also [Pitney Bowes Delivery Guarantee](https://shipping.pitneybowes.com/faqs/delivery-guarantee.html) [Do all USPS services return transit times?](https://shipping.pitneybowes.com/faqs/shipments.html#transit-times-faq)

try {
    $result = $apiInstance->createShipmentLabel($x_pb_transaction_id, $shipment, $x_pb_unified_error_structure, $x_pb_integrator_carrier_id, $x_pb_shipper_rate_plan, $x_pb_shipment_group_id, $x_pb_shipper_carrier_account_id, $include_delivery_commitment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->createShipmentLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_pb_transaction_id** | **string**| Required. A unique identifier for the transaction, up to 25 characters. |
 **shipment** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment**](../Model/Shipment.md)| request |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]
 **x_pb_integrator_carrier_id** | **string**| USPS Only. Negotiated services rate, if applicable. | [optional]
 **x_pb_shipper_rate_plan** | **string**| USPS Only. Shipper rate plan, if applicable. For more information, see [this FAQ](https://shipping.pitneybowes.com/faqs/rates.html#rate-plans-faq). | [optional]
 **x_pb_shipment_group_id** | **string**| **[Required parameter for PBPresort service](https://shipping.pitneybowes.com/api/post-shipments-presort.html)**.The job number that represents the agreement between the merchant and PB Presort. This was provided by Pitney Bowes during [merchant onboarding for PB Presort](https://shipping.pitneybowes.com/carriers/pb-presort.html). | [optional]
 **x_pb_shipper_carrier_account_id** | **string**| **[Required parameter for PBPresort service](https://shipping.pitneybowes.com/api/post-shipments-presort.html)**. The merchant&#39;s Mailer ID (MID), as provided by Pitney Bowes during merchant onboarding for PB Presort. | [optional]
 **include_delivery_commitment** | **string**| If set to true, returns estimated transit times in days. Only for USPS Create Shipment. See also [Pitney Bowes Delivery Guarantee](https://shipping.pitneybowes.com/faqs/delivery-guarantee.html) [Do all USPS services return transit times?](https://shipping.pitneybowes.com/faqs/shipments.html#transit-times-faq) | [optional]

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


## reprintShipment

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment reprintShipment($shipment_id, $x_pb_unified_error_structure, $carrier)

reprintShipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Required. The shipment ID that was issued when shipment label was generated.
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.
$carrier = USPS; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier | 

try {
    $result = $apiInstance->reprintShipment($shipment_id, $x_pb_unified_error_structure, $carrier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->reprintShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Required. The shipment ID that was issued when shipment label was generated. |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]
 **carrier** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier**](../Model/.md)|  | [optional]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment**](../Model/Shipment.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retryShipment

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment retryShipment($original_transaction_id, $x_pb_unified_error_structure, $carrier)

retryShipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$original_transaction_id = 12344; // string | 
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.
$carrier = USPS; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier | 

try {
    $result = $apiInstance->retryShipment($original_transaction_id, $x_pb_unified_error_structure, $carrier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->retryShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **original_transaction_id** | **string**|  |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]
 **carrier** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier**](../Model/.md)|  | [optional]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Shipment**](../Model/Shipment.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

