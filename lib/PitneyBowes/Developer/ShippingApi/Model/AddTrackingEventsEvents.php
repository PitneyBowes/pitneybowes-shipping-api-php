<?php
/**
 * AddTrackingEventsEvents
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
 * AddTrackingEventsEvents Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddTrackingEventsEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddTrackingEvents_events';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_code' => 'string',
        'carrier_event_code' => 'string',
        'event_date' => 'string',
        'event_time' => 'string',
        'event_time_offset' => 'string',
        'event_city' => 'string',
        'event_state_or_province' => 'string',
        'postal_code' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'event_code' => null,
        'carrier_event_code' => null,
        'event_date' => null,
        'event_time' => null,
        'event_time_offset' => null,
        'event_city' => null,
        'event_state_or_province' => null,
        'postal_code' => null,
        'country' => null
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
        'event_code' => 'eventCode',
        'carrier_event_code' => 'carrierEventCode',
        'event_date' => 'eventDate',
        'event_time' => 'eventTime',
        'event_time_offset' => 'eventTimeOffset',
        'event_city' => 'eventCity',
        'event_state_or_province' => 'eventStateOrProvince',
        'postal_code' => 'postalCode',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_code' => 'setEventCode',
        'carrier_event_code' => 'setCarrierEventCode',
        'event_date' => 'setEventDate',
        'event_time' => 'setEventTime',
        'event_time_offset' => 'setEventTimeOffset',
        'event_city' => 'setEventCity',
        'event_state_or_province' => 'setEventStateOrProvince',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_code' => 'getEventCode',
        'carrier_event_code' => 'getCarrierEventCode',
        'event_date' => 'getEventDate',
        'event_time' => 'getEventTime',
        'event_time_offset' => 'getEventTimeOffset',
        'event_city' => 'getEventCity',
        'event_state_or_province' => 'getEventStateOrProvince',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry'
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
        $this->container['event_code'] = isset($data['event_code']) ? $data['event_code'] : null;
        $this->container['carrier_event_code'] = isset($data['carrier_event_code']) ? $data['carrier_event_code'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
        $this->container['event_time_offset'] = isset($data['event_time_offset']) ? $data['event_time_offset'] : null;
        $this->container['event_city'] = isset($data['event_city']) ? $data['event_city'] : null;
        $this->container['event_state_or_province'] = isset($data['event_state_or_province']) ? $data['event_state_or_province'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
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
     * Gets event_code
     *
     * @return string|null
     */
    public function getEventCode()
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code
     *
     * @param string|null $event_code event_code
     *
     * @return $this
     */
    public function setEventCode($event_code)
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets carrier_event_code
     *
     * @return string|null
     */
    public function getCarrierEventCode()
    {
        return $this->container['carrier_event_code'];
    }

    /**
     * Sets carrier_event_code
     *
     * @param string|null $carrier_event_code carrier_event_code
     *
     * @return $this
     */
    public function setCarrierEventCode($carrier_event_code)
    {
        $this->container['carrier_event_code'] = $carrier_event_code;

        return $this;
    }

    /**
     * Gets event_date
     *
     * @return string|null
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param string|null $event_date event_date
     *
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets event_time
     *
     * @return string|null
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param string|null $event_time event_time
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets event_time_offset
     *
     * @return string|null
     */
    public function getEventTimeOffset()
    {
        return $this->container['event_time_offset'];
    }

    /**
     * Sets event_time_offset
     *
     * @param string|null $event_time_offset event_time_offset
     *
     * @return $this
     */
    public function setEventTimeOffset($event_time_offset)
    {
        $this->container['event_time_offset'] = $event_time_offset;

        return $this;
    }

    /**
     * Gets event_city
     *
     * @return string|null
     */
    public function getEventCity()
    {
        return $this->container['event_city'];
    }

    /**
     * Sets event_city
     *
     * @param string|null $event_city event_city
     *
     * @return $this
     */
    public function setEventCity($event_city)
    {
        $this->container['event_city'] = $event_city;

        return $this;
    }

    /**
     * Gets event_state_or_province
     *
     * @return string|null
     */
    public function getEventStateOrProvince()
    {
        return $this->container['event_state_or_province'];
    }

    /**
     * Sets event_state_or_province
     *
     * @param string|null $event_state_or_province event_state_or_province
     *
     * @return $this
     */
    public function setEventStateOrProvince($event_state_or_province)
    {
        $this->container['event_state_or_province'] = $event_state_or_province;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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


