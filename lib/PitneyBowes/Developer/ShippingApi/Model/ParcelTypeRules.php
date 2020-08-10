<?php
/**
 * ParcelTypeRules
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
 * ParcelTypeRules Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParcelTypeRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParcelTypeRules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'parcel_type' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ParcelType',
        'branded_name' => 'string',
        'rate_type_id' => 'string',
        'rate_type_branded_name' => 'string',
        'trackable' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Trackable',
        'special_services_rule' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SpecialServicesRule[]',
        'weight_rules' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\WeightRules[]',
        'dimension_rules' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\DimensionRules[]',
        'suggested_trackable_special_service_id' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SpecialServiceCodes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'parcel_type' => null,
        'branded_name' => null,
        'rate_type_id' => null,
        'rate_type_branded_name' => null,
        'trackable' => null,
        'special_services_rule' => null,
        'weight_rules' => null,
        'dimension_rules' => null,
        'suggested_trackable_special_service_id' => null
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
        'parcel_type' => 'parcelType',
        'branded_name' => 'brandedName',
        'rate_type_id' => 'rateTypeId',
        'rate_type_branded_name' => 'rateTypeBrandedName',
        'trackable' => 'trackable',
        'special_services_rule' => 'specialServicesRule',
        'weight_rules' => 'weightRules',
        'dimension_rules' => 'dimensionRules',
        'suggested_trackable_special_service_id' => 'suggestedTrackableSpecialServiceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parcel_type' => 'setParcelType',
        'branded_name' => 'setBrandedName',
        'rate_type_id' => 'setRateTypeId',
        'rate_type_branded_name' => 'setRateTypeBrandedName',
        'trackable' => 'setTrackable',
        'special_services_rule' => 'setSpecialServicesRule',
        'weight_rules' => 'setWeightRules',
        'dimension_rules' => 'setDimensionRules',
        'suggested_trackable_special_service_id' => 'setSuggestedTrackableSpecialServiceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parcel_type' => 'getParcelType',
        'branded_name' => 'getBrandedName',
        'rate_type_id' => 'getRateTypeId',
        'rate_type_branded_name' => 'getRateTypeBrandedName',
        'trackable' => 'getTrackable',
        'special_services_rule' => 'getSpecialServicesRule',
        'weight_rules' => 'getWeightRules',
        'dimension_rules' => 'getDimensionRules',
        'suggested_trackable_special_service_id' => 'getSuggestedTrackableSpecialServiceId'
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
        $this->container['parcel_type'] = isset($data['parcel_type']) ? $data['parcel_type'] : null;
        $this->container['branded_name'] = isset($data['branded_name']) ? $data['branded_name'] : null;
        $this->container['rate_type_id'] = isset($data['rate_type_id']) ? $data['rate_type_id'] : null;
        $this->container['rate_type_branded_name'] = isset($data['rate_type_branded_name']) ? $data['rate_type_branded_name'] : null;
        $this->container['trackable'] = isset($data['trackable']) ? $data['trackable'] : null;
        $this->container['special_services_rule'] = isset($data['special_services_rule']) ? $data['special_services_rule'] : null;
        $this->container['weight_rules'] = isset($data['weight_rules']) ? $data['weight_rules'] : null;
        $this->container['dimension_rules'] = isset($data['dimension_rules']) ? $data['dimension_rules'] : null;
        $this->container['suggested_trackable_special_service_id'] = isset($data['suggested_trackable_special_service_id']) ? $data['suggested_trackable_special_service_id'] : null;
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
     * Gets parcel_type
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ParcelType|null
     */
    public function getParcelType()
    {
        return $this->container['parcel_type'];
    }

    /**
     * Sets parcel_type
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\ParcelType|null $parcel_type parcel_type
     *
     * @return $this
     */
    public function setParcelType($parcel_type)
    {
        $this->container['parcel_type'] = $parcel_type;

        return $this;
    }

    /**
     * Gets branded_name
     *
     * @return string|null
     */
    public function getBrandedName()
    {
        return $this->container['branded_name'];
    }

    /**
     * Sets branded_name
     *
     * @param string|null $branded_name branded_name
     *
     * @return $this
     */
    public function setBrandedName($branded_name)
    {
        $this->container['branded_name'] = $branded_name;

        return $this;
    }

    /**
     * Gets rate_type_id
     *
     * @return string|null
     */
    public function getRateTypeId()
    {
        return $this->container['rate_type_id'];
    }

    /**
     * Sets rate_type_id
     *
     * @param string|null $rate_type_id rate_type_id
     *
     * @return $this
     */
    public function setRateTypeId($rate_type_id)
    {
        $this->container['rate_type_id'] = $rate_type_id;

        return $this;
    }

    /**
     * Gets rate_type_branded_name
     *
     * @return string|null
     */
    public function getRateTypeBrandedName()
    {
        return $this->container['rate_type_branded_name'];
    }

    /**
     * Sets rate_type_branded_name
     *
     * @param string|null $rate_type_branded_name rate_type_branded_name
     *
     * @return $this
     */
    public function setRateTypeBrandedName($rate_type_branded_name)
    {
        $this->container['rate_type_branded_name'] = $rate_type_branded_name;

        return $this;
    }

    /**
     * Gets trackable
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Trackable|null
     */
    public function getTrackable()
    {
        return $this->container['trackable'];
    }

    /**
     * Sets trackable
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Trackable|null $trackable trackable
     *
     * @return $this
     */
    public function setTrackable($trackable)
    {
        $this->container['trackable'] = $trackable;

        return $this;
    }

    /**
     * Gets special_services_rule
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SpecialServicesRule[]|null
     */
    public function getSpecialServicesRule()
    {
        return $this->container['special_services_rule'];
    }

    /**
     * Sets special_services_rule
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SpecialServicesRule[]|null $special_services_rule special_services_rule
     *
     * @return $this
     */
    public function setSpecialServicesRule($special_services_rule)
    {
        $this->container['special_services_rule'] = $special_services_rule;

        return $this;
    }

    /**
     * Gets weight_rules
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\WeightRules[]|null
     */
    public function getWeightRules()
    {
        return $this->container['weight_rules'];
    }

    /**
     * Sets weight_rules
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\WeightRules[]|null $weight_rules weight_rules
     *
     * @return $this
     */
    public function setWeightRules($weight_rules)
    {
        $this->container['weight_rules'] = $weight_rules;

        return $this;
    }

    /**
     * Gets dimension_rules
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\DimensionRules[]|null
     */
    public function getDimensionRules()
    {
        return $this->container['dimension_rules'];
    }

    /**
     * Sets dimension_rules
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\DimensionRules[]|null $dimension_rules dimension_rules
     *
     * @return $this
     */
    public function setDimensionRules($dimension_rules)
    {
        $this->container['dimension_rules'] = $dimension_rules;

        return $this;
    }

    /**
     * Gets suggested_trackable_special_service_id
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SpecialServiceCodes|null
     */
    public function getSuggestedTrackableSpecialServiceId()
    {
        return $this->container['suggested_trackable_special_service_id'];
    }

    /**
     * Sets suggested_trackable_special_service_id
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SpecialServiceCodes|null $suggested_trackable_special_service_id suggested_trackable_special_service_id
     *
     * @return $this
     */
    public function setSuggestedTrackableSpecialServiceId($suggested_trackable_special_service_id)
    {
        $this->container['suggested_trackable_special_service_id'] = $suggested_trackable_special_service_id;

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

