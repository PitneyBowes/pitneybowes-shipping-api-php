# # CrossBorderQuotesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quote_currency** | **string** | The currency to return the quote in. Use three uppercase letters, per the ISO currency code (ISO 4217). For example- USD, CAD, or EUR | 
**basket_currency** | **string** | The default currency of the basket. Use three uppercase letters, per the ISO currency code (ISO 4217). For example- USD, CAD, or EUR | 
**from_address** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address**](Address.md) |  | [optional] 
**to_address** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address**](Address.md) |  | 
**basket_items** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequestBasketItems[]**](CrossBorderQuotesRequestBasketItems.md) | The items in the buyer&#39;s shopping basket. | 
**rates** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequestRates[]**](CrossBorderQuotesRequestRates.md) | Specifies the carrier, service, parcel, and other information. In a response, this field also contains the service charges. Importatn- In a request, the rates array can contain only one rates object. | 
**shipment_options** | [**\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierFacilityResponseCarrierFacilityOptions[]**](CarrierFacilityResponseCarrierFacilityOptions.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


