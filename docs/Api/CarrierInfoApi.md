# OpenAPI\Client\CarrierInfoApi

All URIs are relative to *https://api-qa.pitneybowes.com/shippingservices*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCarrierFacilities**](CarrierInfoApi.md#getCarrierFacilities) | **POST** /v1/carrier-facility | Find Carrier Facilities
[**getCarrierLicenseAgreement**](CarrierInfoApi.md#getCarrierLicenseAgreement) | **GET** /v1/carrier/license-agreements | This operation retrieves a carrier&#39;s license agreement.
[**getCarrierServiceRules**](CarrierInfoApi.md#getCarrierServiceRules) | **GET** /v1/information/rules/rating-services | Retrieves the rules governing the carrier&#39;s services.
[**getCarrierSupportedDestination**](CarrierInfoApi.md#getCarrierSupportedDestination) | **GET** /v1/countries | This operation returns a list of supported destination countries to which the carrier offers international shipping services.



## getCarrierFacilities

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierFacilityResponse getCarrierFacilities($carrier_facility_request, $x_pb_unified_error_structure)

Find Carrier Facilities

This operation locates Post Offices and other facilities for a given carrier. You can use this operation, for example, to locate all USPS Post Offices near to a given postal code.If you use the Standard Return API and if you use the option to print a QR code, use this API to locate facilities where the buyer can print the label from the QR code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarrierInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_facility_request = {"address":{"addressLines":["6525 Greenway Dr"],"cityTown":"Roanoke","stateProvince":"VA","countryCode":"US"},"carrier":"USPS","carrierFacilityOptions":[{"name":"FACILITY_TYPE_SERVICE","value":"LABEL_BROKER_RETAIL"},{"name":"FACILITY_TYPE","value":"POST_OFFICE"},{"name":"FACILITY_WITHIN_RADIUS","value":"10"},{"name":"NUMBER_OF_FACILITIES","value":"5"}]}; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierFacilityRequest | 
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->getCarrierFacilities($carrier_facility_request, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierInfoApi->getCarrierFacilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_facility_request** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierFacilityRequest**](../Model/CarrierFacilityRequest.md)|  |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierFacilityResponse**](../Model/CarrierFacilityResponse.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCarrierLicenseAgreement

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\InlineResponse200 getCarrierLicenseAgreement($carrier, $origin_country_code, $x_pb_unified_error_structure)

This operation retrieves a carrier's license agreement.

This operation retrieves a carrier's license agreement. The operation is used in the [Carrier Registration Tutorial](https://shipping.pitneybowes.com/carrier-registration.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarrierInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = UPS; // string | The carrier name. Currently this must be set to: UPS
$origin_country_code = US; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ISOCountryCode | The two-character ISO country code for the country where the shipment originates.
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->getCarrierLicenseAgreement($carrier, $origin_country_code, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierInfoApi->getCarrierLicenseAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier** | **string**| The carrier name. Currently this must be set to: UPS | [default to &#39;UPS&#39;]
 **origin_country_code** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ISOCountryCode**](../Model/.md)| The two-character ISO country code for the country where the shipment originates. |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCarrierServiceRules

> \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierRule getCarrierServiceRules($carrier, $origin_country_code, $destination_country_code, $x_pb_unified_error_structure, $rate_type_id, $future_shipment_date, $return_shipment, $compact_response)

Retrieves the rules governing the carrier's services.

This operation retrieves the rules governing the carrier's services, including the available parcel types and the limits on weights and dimensions. **This API currently returns rules only for USPS** . Find more information at [Get Carrier Rules](https://shipping.pitneybowes.com/api/get-carrier-rules.html)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarrierInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = USPS; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier | The carrier name. **Currently this must be set to: USPS**
$origin_country_code = US; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ISOCountryCode | The [two-character ISO country code](https://www.iso.org/obp/ui/#search) for the country where the shipment originates.
$destination_country_code = IN; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ISOCountryCode | The [two-character ISO country code](https://www.iso.org/obp/ui/#search) for the country of the shipment's destination address.
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.
$rate_type_id = 'rate_type_id_example'; // string | The type of rate requested, such as COMMERCIAL_BASE. If a rate type is not specified, all eligible rate types are returned.
$future_shipment_date = 'future_shipment_date_example'; // string | If the shipment is for a future date, and if a rate change is expected before the shipment date, use this field to ensure you get the correct rates and correct rate rules. Note that a rate change can affect the structure of the rate rules as well as the actual rates.Specify this value in UTC/GMT, not in local time. Formats allowed are   * **YYYY-MM-DD**   * **YYYY-MM-DD HH:mm:ss** * **YYYY-MM-DD HH:mm:ss.SSS**
$return_shipment = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If set to true, provides only services applicable for return shipment.
$compact_response = True; // bool | If set to true, returns only summary, without special service details.

try {
    $result = $apiInstance->getCarrierServiceRules($carrier, $origin_country_code, $destination_country_code, $x_pb_unified_error_structure, $rate_type_id, $future_shipment_date, $return_shipment, $compact_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierInfoApi->getCarrierServiceRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier**](../Model/.md)| The carrier name. **Currently this must be set to: USPS** |
 **origin_country_code** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ISOCountryCode**](../Model/.md)| The [two-character ISO country code](https://www.iso.org/obp/ui/#search) for the country where the shipment originates. |
 **destination_country_code** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ISOCountryCode**](../Model/.md)| The [two-character ISO country code](https://www.iso.org/obp/ui/#search) for the country of the shipment&#39;s destination address. |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]
 **rate_type_id** | **string**| The type of rate requested, such as COMMERCIAL_BASE. If a rate type is not specified, all eligible rate types are returned. | [optional]
 **future_shipment_date** | **string**| If the shipment is for a future date, and if a rate change is expected before the shipment date, use this field to ensure you get the correct rates and correct rate rules. Note that a rate change can affect the structure of the rate rules as well as the actual rates.Specify this value in UTC/GMT, not in local time. Formats allowed are   * **YYYY-MM-DD**   * **YYYY-MM-DD HH:mm:ss** * **YYYY-MM-DD HH:mm:ss.SSS** | [optional]
 **return_shipment** | **\DateTime**| If set to true, provides only services applicable for return shipment. | [optional]
 **compact_response** | **bool**| If set to true, returns only summary, without special service details. | [optional]

### Return type

[**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierRule**](../Model/CarrierRule.md)

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCarrierSupportedDestination

> object[] getCarrierSupportedDestination($carrier, $origin_country_code, $x_pb_unified_error_structure)

This operation returns a list of supported destination countries to which the carrier offers international shipping services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CarrierInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = usps; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier | The carrier name. Currently this must be set to: USPS
$origin_country_code = US; // \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ISOCountryCode | The two-character ISO country code for the country where the shipment originates.
$x_pb_unified_error_structure = true; // bool | Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs.

try {
    $result = $apiInstance->getCarrierSupportedDestination($carrier, $origin_country_code, $x_pb_unified_error_structure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierInfoApi->getCarrierSupportedDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Carrier**](../Model/.md)| The carrier name. Currently this must be set to: USPS |
 **origin_country_code** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ISOCountryCode**](../Model/.md)| The two-character ISO country code for the country where the shipment originates. |
 **x_pb_unified_error_structure** | **bool**| Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. | [optional] [default to true]

### Return type

**object[]**

### Authorization

[oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

