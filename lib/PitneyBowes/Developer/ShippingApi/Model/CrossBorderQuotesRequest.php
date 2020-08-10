<?php
/**
 * CrossBorderQuotesRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shipping API
 *
 * Shipping API Sample.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@pb.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CrossBorderQuotesRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CrossBorderQuotesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CrossBorderQuotesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quote_currency' => 'string',
        'basket_currency' => 'string',
        'from_address' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address',
        'to_address' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address',
        'basket_items' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequestBasketItems[]',
        'rates' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequestRates[]',
        'shipment_options' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierFacilityResponseCarrierFacilityOptions[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'quote_currency' => null,
        'basket_currency' => null,
        'from_address' => null,
        'to_address' => null,
        'basket_items' => null,
        'rates' => null,
        'shipment_options' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'quote_currency' => 'quoteCurrency',
        'basket_currency' => 'basketCurrency',
        'from_address' => 'fromAddress',
        'to_address' => 'toAddress',
        'basket_items' => 'basketItems',
        'rates' => 'rates',
        'shipment_options' => 'shipmentOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quote_currency' => 'setQuoteCurrency',
        'basket_currency' => 'setBasketCurrency',
        'from_address' => 'setFromAddress',
        'to_address' => 'setToAddress',
        'basket_items' => 'setBasketItems',
        'rates' => 'setRates',
        'shipment_options' => 'setShipmentOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quote_currency' => 'getQuoteCurrency',
        'basket_currency' => 'getBasketCurrency',
        'from_address' => 'getFromAddress',
        'to_address' => 'getToAddress',
        'basket_items' => 'getBasketItems',
        'rates' => 'getRates',
        'shipment_options' => 'getShipmentOptions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['quote_currency'] = isset($data['quote_currency']) ? $data['quote_currency'] : null;
        $this->container['basket_currency'] = isset($data['basket_currency']) ? $data['basket_currency'] : null;
        $this->container['from_address'] = isset($data['from_address']) ? $data['from_address'] : null;
        $this->container['to_address'] = isset($data['to_address']) ? $data['to_address'] : null;
        $this->container['basket_items'] = isset($data['basket_items']) ? $data['basket_items'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
        $this->container['shipment_options'] = isset($data['shipment_options']) ? $data['shipment_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['quote_currency'] === null) {
            $invalidProperties[] = "'quote_currency' can't be null";
        }
        if ($this->container['basket_currency'] === null) {
            $invalidProperties[] = "'basket_currency' can't be null";
        }
        if ($this->container['to_address'] === null) {
            $invalidProperties[] = "'to_address' can't be null";
        }
        if ($this->container['basket_items'] === null) {
            $invalidProperties[] = "'basket_items' can't be null";
        }
        if ($this->container['rates'] === null) {
            $invalidProperties[] = "'rates' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets quote_currency
     *
     * @return string
     */
    public function getQuoteCurrency()
    {
        return $this->container['quote_currency'];
    }

    /**
     * Sets quote_currency
     *
     * @param string $quote_currency The currency to return the quote in. Use three uppercase letters, per the ISO currency code (ISO 4217). For example- USD, CAD, or EUR
     *
     * @return $this
     */
    public function setQuoteCurrency($quote_currency)
    {
        $this->container['quote_currency'] = $quote_currency;

        return $this;
    }

    /**
     * Gets basket_currency
     *
     * @return string
     */
    public function getBasketCurrency()
    {
        return $this->container['basket_currency'];
    }

    /**
     * Sets basket_currency
     *
     * @param string $basket_currency The default currency of the basket. Use three uppercase letters, per the ISO currency code (ISO 4217). For example- USD, CAD, or EUR
     *
     * @return $this
     */
    public function setBasketCurrency($basket_currency)
    {
        $this->container['basket_currency'] = $basket_currency;

        return $this;
    }

    /**
     * Gets from_address
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address|null
     */
    public function getFromAddress()
    {
        return $this->container['from_address'];
    }

    /**
     * Sets from_address
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address|null $from_address from_address
     *
     * @return $this
     */
    public function setFromAddress($from_address)
    {
        $this->container['from_address'] = $from_address;

        return $this;
    }

    /**
     * Gets to_address
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address
     */
    public function getToAddress()
    {
        return $this->container['to_address'];
    }

    /**
     * Sets to_address
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address $to_address to_address
     *
     * @return $this
     */
    public function setToAddress($to_address)
    {
        $this->container['to_address'] = $to_address;

        return $this;
    }

    /**
     * Gets basket_items
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequestBasketItems[]
     */
    public function getBasketItems()
    {
        return $this->container['basket_items'];
    }

    /**
     * Sets basket_items
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequestBasketItems[] $basket_items The items in the buyer's shopping basket.
     *
     * @return $this
     */
    public function setBasketItems($basket_items)
    {
        $this->container['basket_items'] = $basket_items;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequestRates[]
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CrossBorderQuotesRequestRates[] $rates Specifies the carrier, service, parcel, and other information. In a response, this field also contains the service charges. Importatn- In a request, the rates array can contain only one rates object.
     *
     * @return $this
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets shipment_options
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierFacilityResponseCarrierFacilityOptions[]|null
     */
    public function getShipmentOptions()
    {
        return $this->container['shipment_options'];
    }

    /**
     * Sets shipment_options
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\CarrierFacilityResponseCarrierFacilityOptions[]|null $shipment_options shipment_options
     *
     * @return $this
     */
    public function setShipmentOptions($shipment_options)
    {
        $this->container['shipment_options'] = $shipment_options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


