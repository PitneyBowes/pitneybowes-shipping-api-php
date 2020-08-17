<?php
/**
 * ParcelProtectionCreateRequest
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
 * ParcelProtectionCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParcelProtectionCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParcelProtectionCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'parcel_protection_account_id' => 'string',
        'parcel_protection_program_id' => 'string',
        'shipment_info' => '\pitneybowesShipping\shippingApi.model\ParcelProtectionCreateRequestShipmentInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'parcel_protection_account_id' => null,
        'parcel_protection_program_id' => null,
        'shipment_info' => null
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
        'parcel_protection_account_id' => 'parcelProtectionAccountID',
        'parcel_protection_program_id' => 'parcelProtectionProgramID',
        'shipment_info' => 'shipmentInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parcel_protection_account_id' => 'setParcelProtectionAccountId',
        'parcel_protection_program_id' => 'setParcelProtectionProgramId',
        'shipment_info' => 'setShipmentInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parcel_protection_account_id' => 'getParcelProtectionAccountId',
        'parcel_protection_program_id' => 'getParcelProtectionProgramId',
        'shipment_info' => 'getShipmentInfo'
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
        $this->container['parcel_protection_account_id'] = isset($data['parcel_protection_account_id']) ? $data['parcel_protection_account_id'] : null;
        $this->container['parcel_protection_program_id'] = isset($data['parcel_protection_program_id']) ? $data['parcel_protection_program_id'] : null;
        $this->container['shipment_info'] = isset($data['shipment_info']) ? $data['shipment_info'] : null;
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
     * Gets parcel_protection_account_id
     *
     * @return string|null
     */
    public function getParcelProtectionAccountId()
    {
        return $this->container['parcel_protection_account_id'];
    }

    /**
     * Sets parcel_protection_account_id
     *
     * @param string|null $parcel_protection_account_id parcel_protection_account_id
     *
     * @return $this
     */
    public function setParcelProtectionAccountId($parcel_protection_account_id)
    {
        $this->container['parcel_protection_account_id'] = $parcel_protection_account_id;

        return $this;
    }

    /**
     * Gets parcel_protection_program_id
     *
     * @return string|null
     */
    public function getParcelProtectionProgramId()
    {
        return $this->container['parcel_protection_program_id'];
    }

    /**
     * Sets parcel_protection_program_id
     *
     * @param string|null $parcel_protection_program_id parcel_protection_program_id
     *
     * @return $this
     */
    public function setParcelProtectionProgramId($parcel_protection_program_id)
    {
        $this->container['parcel_protection_program_id'] = $parcel_protection_program_id;

        return $this;
    }

    /**
     * Gets shipment_info
     *
     * @return \pitneybowesShipping\shippingApi.model\ParcelProtectionCreateRequestShipmentInfo|null
     */
    public function getShipmentInfo()
    {
        return $this->container['shipment_info'];
    }

    /**
     * Sets shipment_info
     *
     * @param \pitneybowesShipping\shippingApi.model\ParcelProtectionCreateRequestShipmentInfo|null $shipment_info shipment_info
     *
     * @return $this
     */
    public function setShipmentInfo($shipment_info)
    {
        $this->container['shipment_info'] = $shipment_info;

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


