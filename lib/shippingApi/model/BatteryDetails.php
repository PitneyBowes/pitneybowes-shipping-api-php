<?php
/**
 * BatteryDetails
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
 * BatteryDetails Class Doc Comment
 *
 * @category Class
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BatteryDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatteryDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'battery_material' => 'string',
        'battery_packaging' => 'string',
        'regulatory' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'battery_material' => null,
        'battery_packaging' => null,
        'regulatory' => null
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
        'battery_material' => 'batteryMaterial',
        'battery_packaging' => 'batteryPackaging',
        'regulatory' => 'regulatory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'battery_material' => 'setBatteryMaterial',
        'battery_packaging' => 'setBatteryPackaging',
        'regulatory' => 'setRegulatory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'battery_material' => 'getBatteryMaterial',
        'battery_packaging' => 'getBatteryPackaging',
        'regulatory' => 'getRegulatory'
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
        $this->container['battery_material'] = isset($data['battery_material']) ? $data['battery_material'] : null;
        $this->container['battery_packaging'] = isset($data['battery_packaging']) ? $data['battery_packaging'] : null;
        $this->container['regulatory'] = isset($data['regulatory']) ? $data['regulatory'] : null;
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
     * Gets battery_material
     *
     * @return string|null
     */
    public function getBatteryMaterial()
    {
        return $this->container['battery_material'];
    }

    /**
     * Sets battery_material
     *
     * @param string|null $battery_material battery_material
     *
     * @return $this
     */
    public function setBatteryMaterial($battery_material)
    {
        $this->container['battery_material'] = $battery_material;

        return $this;
    }

    /**
     * Gets battery_packaging
     *
     * @return string|null
     */
    public function getBatteryPackaging()
    {
        return $this->container['battery_packaging'];
    }

    /**
     * Sets battery_packaging
     *
     * @param string|null $battery_packaging battery_packaging
     *
     * @return $this
     */
    public function setBatteryPackaging($battery_packaging)
    {
        $this->container['battery_packaging'] = $battery_packaging;

        return $this;
    }

    /**
     * Gets regulatory
     *
     * @return string|null
     */
    public function getRegulatory()
    {
        return $this->container['regulatory'];
    }

    /**
     * Sets regulatory
     *
     * @param string|null $regulatory regulatory
     *
     * @return $this
     */
    public function setRegulatory($regulatory)
    {
        $this->container['regulatory'] = $regulatory;

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

