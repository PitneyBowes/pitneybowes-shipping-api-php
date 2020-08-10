<?php
/**
 * SchedulePickupResponse
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
 * SchedulePickupResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SchedulePickupResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SchedulePickupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pickup_address' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address',
        'carrier' => 'string',
        'pickup_summary' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SchedulePickupPickupSummary[]',
        'reference' => 'string',
        'package_location' => 'string',
        'special_instructions' => 'string',
        'pickup_date_time' => 'string',
        'pickup_confirmation_number' => 'string',
        'pickup_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pickup_address' => null,
        'carrier' => null,
        'pickup_summary' => null,
        'reference' => null,
        'package_location' => null,
        'special_instructions' => null,
        'pickup_date_time' => null,
        'pickup_confirmation_number' => null,
        'pickup_id' => null
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
        'pickup_address' => 'pickupAddress',
        'carrier' => 'carrier',
        'pickup_summary' => 'pickupSummary',
        'reference' => 'reference',
        'package_location' => 'packageLocation',
        'special_instructions' => 'specialInstructions',
        'pickup_date_time' => 'pickupDateTime',
        'pickup_confirmation_number' => 'pickupConfirmationNumber',
        'pickup_id' => 'pickupId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_address' => 'setPickupAddress',
        'carrier' => 'setCarrier',
        'pickup_summary' => 'setPickupSummary',
        'reference' => 'setReference',
        'package_location' => 'setPackageLocation',
        'special_instructions' => 'setSpecialInstructions',
        'pickup_date_time' => 'setPickupDateTime',
        'pickup_confirmation_number' => 'setPickupConfirmationNumber',
        'pickup_id' => 'setPickupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_address' => 'getPickupAddress',
        'carrier' => 'getCarrier',
        'pickup_summary' => 'getPickupSummary',
        'reference' => 'getReference',
        'package_location' => 'getPackageLocation',
        'special_instructions' => 'getSpecialInstructions',
        'pickup_date_time' => 'getPickupDateTime',
        'pickup_confirmation_number' => 'getPickupConfirmationNumber',
        'pickup_id' => 'getPickupId'
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
        $this->container['pickup_address'] = isset($data['pickup_address']) ? $data['pickup_address'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['pickup_summary'] = isset($data['pickup_summary']) ? $data['pickup_summary'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['package_location'] = isset($data['package_location']) ? $data['package_location'] : null;
        $this->container['special_instructions'] = isset($data['special_instructions']) ? $data['special_instructions'] : null;
        $this->container['pickup_date_time'] = isset($data['pickup_date_time']) ? $data['pickup_date_time'] : null;
        $this->container['pickup_confirmation_number'] = isset($data['pickup_confirmation_number']) ? $data['pickup_confirmation_number'] : null;
        $this->container['pickup_id'] = isset($data['pickup_id']) ? $data['pickup_id'] : null;
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
     * Gets pickup_address
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address|null
     */
    public function getPickupAddress()
    {
        return $this->container['pickup_address'];
    }

    /**
     * Sets pickup_address
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\Address|null $pickup_address pickup_address
     *
     * @return $this
     */
    public function setPickupAddress($pickup_address)
    {
        $this->container['pickup_address'] = $pickup_address;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets pickup_summary
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SchedulePickupPickupSummary[]|null
     */
    public function getPickupSummary()
    {
        return $this->container['pickup_summary'];
    }

    /**
     * Sets pickup_summary
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\SchedulePickupPickupSummary[]|null $pickup_summary pickup_summary
     *
     * @return $this
     */
    public function setPickupSummary($pickup_summary)
    {
        $this->container['pickup_summary'] = $pickup_summary;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets package_location
     *
     * @return string|null
     */
    public function getPackageLocation()
    {
        return $this->container['package_location'];
    }

    /**
     * Sets package_location
     *
     * @param string|null $package_location package_location
     *
     * @return $this
     */
    public function setPackageLocation($package_location)
    {
        $this->container['package_location'] = $package_location;

        return $this;
    }

    /**
     * Gets special_instructions
     *
     * @return string|null
     */
    public function getSpecialInstructions()
    {
        return $this->container['special_instructions'];
    }

    /**
     * Sets special_instructions
     *
     * @param string|null $special_instructions special_instructions
     *
     * @return $this
     */
    public function setSpecialInstructions($special_instructions)
    {
        $this->container['special_instructions'] = $special_instructions;

        return $this;
    }

    /**
     * Gets pickup_date_time
     *
     * @return string|null
     */
    public function getPickupDateTime()
    {
        return $this->container['pickup_date_time'];
    }

    /**
     * Sets pickup_date_time
     *
     * @param string|null $pickup_date_time pickup_date_time
     *
     * @return $this
     */
    public function setPickupDateTime($pickup_date_time)
    {
        $this->container['pickup_date_time'] = $pickup_date_time;

        return $this;
    }

    /**
     * Gets pickup_confirmation_number
     *
     * @return string|null
     */
    public function getPickupConfirmationNumber()
    {
        return $this->container['pickup_confirmation_number'];
    }

    /**
     * Sets pickup_confirmation_number
     *
     * @param string|null $pickup_confirmation_number pickup_confirmation_number
     *
     * @return $this
     */
    public function setPickupConfirmationNumber($pickup_confirmation_number)
    {
        $this->container['pickup_confirmation_number'] = $pickup_confirmation_number;

        return $this;
    }

    /**
     * Gets pickup_id
     *
     * @return string|null
     */
    public function getPickupId()
    {
        return $this->container['pickup_id'];
    }

    /**
     * Sets pickup_id
     *
     * @param string|null $pickup_id pickup_id
     *
     * @return $this
     */
    public function setPickupId($pickup_id)
    {
        $this->container['pickup_id'] = $pickup_id;

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

