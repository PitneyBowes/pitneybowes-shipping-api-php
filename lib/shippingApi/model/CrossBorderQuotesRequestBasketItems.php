<?php
/**
 * CrossBorderQuotesRequestBasketItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  pitneybowesShipping
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

namespace pitneybowesShipping\shippingApi.model;

use \ArrayAccess;
use \pitneybowesShipping\ObjectSerializer;

/**
 * CrossBorderQuotesRequestBasketItems Class Doc Comment
 *
 * @category Class
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CrossBorderQuotesRequestBasketItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CrossBorderQuotesRequest_basketItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_id' => 'string',
        'categories' => '\pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestCategories[]',
        'description' => 'string',
        'long_description' => 'string',
        'unit_weight' => '\pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestUnitWeight',
        'item_dimension' => '\pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestItemDimension',
        'url' => 'string',
        'quantity' => 'int',
        'unit_price' => 'float',
        'origin_country_code' => 'string',
        'parent_identifier' => 'string',
        'child_identifier' => 'string',
        'kit' => 'string',
        'kit_identifier' => 'string',
        'kit_quantity' => 'string',
        'manufacturer' => 'string',
        'brand' => 'string',
        'eccn' => 'string',
        'enabled' => 'bool',
        'pricing' => '\pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestPricing',
        'h_s_tariff_code' => 'string',
        'h_s_tariff_code_country' => 'string',
        'identifiers' => '\pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestIdentifiers[]',
        'image_urls' => 'string[]',
        'ships_alone' => 'bool',
        'attributes' => '\pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestAttributes[]',
        'hazmats' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'item_id' => null,
        'categories' => null,
        'description' => null,
        'long_description' => null,
        'unit_weight' => null,
        'item_dimension' => null,
        'url' => null,
        'quantity' => null,
        'unit_price' => null,
        'origin_country_code' => null,
        'parent_identifier' => null,
        'child_identifier' => null,
        'kit' => null,
        'kit_identifier' => null,
        'kit_quantity' => null,
        'manufacturer' => null,
        'brand' => null,
        'eccn' => null,
        'enabled' => null,
        'pricing' => null,
        'h_s_tariff_code' => null,
        'h_s_tariff_code_country' => null,
        'identifiers' => null,
        'image_urls' => null,
        'ships_alone' => null,
        'attributes' => null,
        'hazmats' => null
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
        'item_id' => 'itemId',
        'categories' => 'categories',
        'description' => 'description',
        'long_description' => 'longDescription',
        'unit_weight' => 'unitWeight',
        'item_dimension' => 'itemDimension',
        'url' => 'url',
        'quantity' => 'quantity',
        'unit_price' => 'unitPrice',
        'origin_country_code' => 'originCountryCode',
        'parent_identifier' => 'parentIdentifier',
        'child_identifier' => 'childIdentifier',
        'kit' => 'kit',
        'kit_identifier' => 'kitIdentifier',
        'kit_quantity' => 'kitQuantity',
        'manufacturer' => 'manufacturer',
        'brand' => 'brand',
        'eccn' => 'eccn',
        'enabled' => 'enabled',
        'pricing' => 'pricing',
        'h_s_tariff_code' => 'hSTariffCode',
        'h_s_tariff_code_country' => 'hSTariffCodeCountry',
        'identifiers' => 'identifiers',
        'image_urls' => 'imageUrls',
        'ships_alone' => 'shipsAlone',
        'attributes' => 'attributes',
        'hazmats' => 'hazmats'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
        'categories' => 'setCategories',
        'description' => 'setDescription',
        'long_description' => 'setLongDescription',
        'unit_weight' => 'setUnitWeight',
        'item_dimension' => 'setItemDimension',
        'url' => 'setUrl',
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'origin_country_code' => 'setOriginCountryCode',
        'parent_identifier' => 'setParentIdentifier',
        'child_identifier' => 'setChildIdentifier',
        'kit' => 'setKit',
        'kit_identifier' => 'setKitIdentifier',
        'kit_quantity' => 'setKitQuantity',
        'manufacturer' => 'setManufacturer',
        'brand' => 'setBrand',
        'eccn' => 'setEccn',
        'enabled' => 'setEnabled',
        'pricing' => 'setPricing',
        'h_s_tariff_code' => 'setHSTariffCode',
        'h_s_tariff_code_country' => 'setHSTariffCodeCountry',
        'identifiers' => 'setIdentifiers',
        'image_urls' => 'setImageUrls',
        'ships_alone' => 'setShipsAlone',
        'attributes' => 'setAttributes',
        'hazmats' => 'setHazmats'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
        'categories' => 'getCategories',
        'description' => 'getDescription',
        'long_description' => 'getLongDescription',
        'unit_weight' => 'getUnitWeight',
        'item_dimension' => 'getItemDimension',
        'url' => 'getUrl',
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'origin_country_code' => 'getOriginCountryCode',
        'parent_identifier' => 'getParentIdentifier',
        'child_identifier' => 'getChildIdentifier',
        'kit' => 'getKit',
        'kit_identifier' => 'getKitIdentifier',
        'kit_quantity' => 'getKitQuantity',
        'manufacturer' => 'getManufacturer',
        'brand' => 'getBrand',
        'eccn' => 'getEccn',
        'enabled' => 'getEnabled',
        'pricing' => 'getPricing',
        'h_s_tariff_code' => 'getHSTariffCode',
        'h_s_tariff_code_country' => 'getHSTariffCodeCountry',
        'identifiers' => 'getIdentifiers',
        'image_urls' => 'getImageUrls',
        'ships_alone' => 'getShipsAlone',
        'attributes' => 'getAttributes',
        'hazmats' => 'getHazmats'
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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['long_description'] = isset($data['long_description']) ? $data['long_description'] : null;
        $this->container['unit_weight'] = isset($data['unit_weight']) ? $data['unit_weight'] : null;
        $this->container['item_dimension'] = isset($data['item_dimension']) ? $data['item_dimension'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['origin_country_code'] = isset($data['origin_country_code']) ? $data['origin_country_code'] : null;
        $this->container['parent_identifier'] = isset($data['parent_identifier']) ? $data['parent_identifier'] : null;
        $this->container['child_identifier'] = isset($data['child_identifier']) ? $data['child_identifier'] : null;
        $this->container['kit'] = isset($data['kit']) ? $data['kit'] : null;
        $this->container['kit_identifier'] = isset($data['kit_identifier']) ? $data['kit_identifier'] : null;
        $this->container['kit_quantity'] = isset($data['kit_quantity']) ? $data['kit_quantity'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['eccn'] = isset($data['eccn']) ? $data['eccn'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['pricing'] = isset($data['pricing']) ? $data['pricing'] : null;
        $this->container['h_s_tariff_code'] = isset($data['h_s_tariff_code']) ? $data['h_s_tariff_code'] : null;
        $this->container['h_s_tariff_code_country'] = isset($data['h_s_tariff_code_country']) ? $data['h_s_tariff_code_country'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['image_urls'] = isset($data['image_urls']) ? $data['image_urls'] : null;
        $this->container['ships_alone'] = isset($data['ships_alone']) ? $data['ships_alone'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['hazmats'] = isset($data['hazmats']) ? $data['hazmats'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestCategories[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestCategories[]|null $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets long_description
     *
     * @return string|null
     */
    public function getLongDescription()
    {
        return $this->container['long_description'];
    }

    /**
     * Sets long_description
     *
     * @param string|null $long_description long_description
     *
     * @return $this
     */
    public function setLongDescription($long_description)
    {
        $this->container['long_description'] = $long_description;

        return $this;
    }

    /**
     * Gets unit_weight
     *
     * @return \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestUnitWeight|null
     */
    public function getUnitWeight()
    {
        return $this->container['unit_weight'];
    }

    /**
     * Sets unit_weight
     *
     * @param \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestUnitWeight|null $unit_weight unit_weight
     *
     * @return $this
     */
    public function setUnitWeight($unit_weight)
    {
        $this->container['unit_weight'] = $unit_weight;

        return $this;
    }

    /**
     * Gets item_dimension
     *
     * @return \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestItemDimension|null
     */
    public function getItemDimension()
    {
        return $this->container['item_dimension'];
    }

    /**
     * Sets item_dimension
     *
     * @param \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestItemDimension|null $item_dimension item_dimension
     *
     * @return $this
     */
    public function setItemDimension($item_dimension)
    {
        $this->container['item_dimension'] = $item_dimension;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets origin_country_code
     *
     * @return string|null
     */
    public function getOriginCountryCode()
    {
        return $this->container['origin_country_code'];
    }

    /**
     * Sets origin_country_code
     *
     * @param string|null $origin_country_code origin_country_code
     *
     * @return $this
     */
    public function setOriginCountryCode($origin_country_code)
    {
        $this->container['origin_country_code'] = $origin_country_code;

        return $this;
    }

    /**
     * Gets parent_identifier
     *
     * @return string|null
     */
    public function getParentIdentifier()
    {
        return $this->container['parent_identifier'];
    }

    /**
     * Sets parent_identifier
     *
     * @param string|null $parent_identifier parent_identifier
     *
     * @return $this
     */
    public function setParentIdentifier($parent_identifier)
    {
        $this->container['parent_identifier'] = $parent_identifier;

        return $this;
    }

    /**
     * Gets child_identifier
     *
     * @return string|null
     */
    public function getChildIdentifier()
    {
        return $this->container['child_identifier'];
    }

    /**
     * Sets child_identifier
     *
     * @param string|null $child_identifier child_identifier
     *
     * @return $this
     */
    public function setChildIdentifier($child_identifier)
    {
        $this->container['child_identifier'] = $child_identifier;

        return $this;
    }

    /**
     * Gets kit
     *
     * @return string|null
     */
    public function getKit()
    {
        return $this->container['kit'];
    }

    /**
     * Sets kit
     *
     * @param string|null $kit kit
     *
     * @return $this
     */
    public function setKit($kit)
    {
        $this->container['kit'] = $kit;

        return $this;
    }

    /**
     * Gets kit_identifier
     *
     * @return string|null
     */
    public function getKitIdentifier()
    {
        return $this->container['kit_identifier'];
    }

    /**
     * Sets kit_identifier
     *
     * @param string|null $kit_identifier kit_identifier
     *
     * @return $this
     */
    public function setKitIdentifier($kit_identifier)
    {
        $this->container['kit_identifier'] = $kit_identifier;

        return $this;
    }

    /**
     * Gets kit_quantity
     *
     * @return string|null
     */
    public function getKitQuantity()
    {
        return $this->container['kit_quantity'];
    }

    /**
     * Sets kit_quantity
     *
     * @param string|null $kit_quantity kit_quantity
     *
     * @return $this
     */
    public function setKitQuantity($kit_quantity)
    {
        $this->container['kit_quantity'] = $kit_quantity;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer manufacturer
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets eccn
     *
     * @return string|null
     */
    public function getEccn()
    {
        return $this->container['eccn'];
    }

    /**
     * Sets eccn
     *
     * @param string|null $eccn eccn
     *
     * @return $this
     */
    public function setEccn($eccn)
    {
        $this->container['eccn'] = $eccn;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestPricing|null
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestPricing|null $pricing pricing
     *
     * @return $this
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets h_s_tariff_code
     *
     * @return string|null
     */
    public function getHSTariffCode()
    {
        return $this->container['h_s_tariff_code'];
    }

    /**
     * Sets h_s_tariff_code
     *
     * @param string|null $h_s_tariff_code h_s_tariff_code
     *
     * @return $this
     */
    public function setHSTariffCode($h_s_tariff_code)
    {
        $this->container['h_s_tariff_code'] = $h_s_tariff_code;

        return $this;
    }

    /**
     * Gets h_s_tariff_code_country
     *
     * @return string|null
     */
    public function getHSTariffCodeCountry()
    {
        return $this->container['h_s_tariff_code_country'];
    }

    /**
     * Sets h_s_tariff_code_country
     *
     * @param string|null $h_s_tariff_code_country h_s_tariff_code_country
     *
     * @return $this
     */
    public function setHSTariffCodeCountry($h_s_tariff_code_country)
    {
        $this->container['h_s_tariff_code_country'] = $h_s_tariff_code_country;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestIdentifiers[]|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestIdentifiers[]|null $identifiers identifiers
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets image_urls
     *
     * @return string[]|null
     */
    public function getImageUrls()
    {
        return $this->container['image_urls'];
    }

    /**
     * Sets image_urls
     *
     * @param string[]|null $image_urls image_urls
     *
     * @return $this
     */
    public function setImageUrls($image_urls)
    {
        $this->container['image_urls'] = $image_urls;

        return $this;
    }

    /**
     * Gets ships_alone
     *
     * @return bool|null
     */
    public function getShipsAlone()
    {
        return $this->container['ships_alone'];
    }

    /**
     * Sets ships_alone
     *
     * @param bool|null $ships_alone ships_alone
     *
     * @return $this
     */
    public function setShipsAlone($ships_alone)
    {
        $this->container['ships_alone'] = $ships_alone;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestAttributes[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \pitneybowesShipping\shippingApi.model\CrossBorderQuotesRequestAttributes[]|null $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets hazmats
     *
     * @return string[]|null
     */
    public function getHazmats()
    {
        return $this->container['hazmats'];
    }

    /**
     * Sets hazmats
     *
     * @param string[]|null $hazmats hazmats
     *
     * @return $this
     */
    public function setHazmats($hazmats)
    {
        $this->container['hazmats'] = $hazmats;

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


