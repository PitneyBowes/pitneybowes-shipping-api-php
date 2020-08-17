<?php
/**
 * ParcelProtectionPolicyResponseShipmentDetails
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
 * ParcelProtectionPolicyResponseShipmentDetails Class Doc Comment
 *
 * @category Class
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParcelProtectionPolicyResponseShipmentDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParcelProtectionPolicyResponse_shipmentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_date' => 'string',
        'shipment_transaction_id' => 'string',
        'shipment_id' => 'string',
        'parcel_tracking_number' => 'string',
        'carrier' => 'string',
        'amount' => 'string',
        'package_length' => 'string',
        'package_width' => 'string',
        'package_height' => 'string',
        'weight' => 'string',
        'zone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'shipment_date' => null,
        'shipment_transaction_id' => null,
        'shipment_id' => null,
        'parcel_tracking_number' => null,
        'carrier' => null,
        'amount' => null,
        'package_length' => null,
        'package_width' => null,
        'package_height' => null,
        'weight' => null,
        'zone' => null
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
        'shipment_date' => 'shipmentDate',
        'shipment_transaction_id' => 'shipmentTransactionId',
        'shipment_id' => 'shipmentId',
        'parcel_tracking_number' => 'parcelTrackingNumber',
        'carrier' => 'carrier',
        'amount' => 'amount',
        'package_length' => 'packageLength',
        'package_width' => 'packageWidth',
        'package_height' => 'packageHeight',
        'weight' => 'weight',
        'zone' => 'zone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_date' => 'setShipmentDate',
        'shipment_transaction_id' => 'setShipmentTransactionId',
        'shipment_id' => 'setShipmentId',
        'parcel_tracking_number' => 'setParcelTrackingNumber',
        'carrier' => 'setCarrier',
        'amount' => 'setAmount',
        'package_length' => 'setPackageLength',
        'package_width' => 'setPackageWidth',
        'package_height' => 'setPackageHeight',
        'weight' => 'setWeight',
        'zone' => 'setZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_date' => 'getShipmentDate',
        'shipment_transaction_id' => 'getShipmentTransactionId',
        'shipment_id' => 'getShipmentId',
        'parcel_tracking_number' => 'getParcelTrackingNumber',
        'carrier' => 'getCarrier',
        'amount' => 'getAmount',
        'package_length' => 'getPackageLength',
        'package_width' => 'getPackageWidth',
        'package_height' => 'getPackageHeight',
        'weight' => 'getWeight',
        'zone' => 'getZone'
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
        $this->container['shipment_date'] = isset($data['shipment_date']) ? $data['shipment_date'] : null;
        $this->container['shipment_transaction_id'] = isset($data['shipment_transaction_id']) ? $data['shipment_transaction_id'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['parcel_tracking_number'] = isset($data['parcel_tracking_number']) ? $data['parcel_tracking_number'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['package_length'] = isset($data['package_length']) ? $data['package_length'] : null;
        $this->container['package_width'] = isset($data['package_width']) ? $data['package_width'] : null;
        $this->container['package_height'] = isset($data['package_height']) ? $data['package_height'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
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
     * Gets shipment_date
     *
     * @return string|null
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param string|null $shipment_date shipment_date
     *
     * @return $this
     */
    public function setShipmentDate($shipment_date)
    {
        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }

    /**
     * Gets shipment_transaction_id
     *
     * @return string|null
     */
    public function getShipmentTransactionId()
    {
        return $this->container['shipment_transaction_id'];
    }

    /**
     * Sets shipment_transaction_id
     *
     * @param string|null $shipment_transaction_id shipment_transaction_id
     *
     * @return $this
     */
    public function setShipmentTransactionId($shipment_transaction_id)
    {
        $this->container['shipment_transaction_id'] = $shipment_transaction_id;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string|null $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets parcel_tracking_number
     *
     * @return string|null
     */
    public function getParcelTrackingNumber()
    {
        return $this->container['parcel_tracking_number'];
    }

    /**
     * Sets parcel_tracking_number
     *
     * @param string|null $parcel_tracking_number parcel_tracking_number
     *
     * @return $this
     */
    public function setParcelTrackingNumber($parcel_tracking_number)
    {
        $this->container['parcel_tracking_number'] = $parcel_tracking_number;

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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets package_length
     *
     * @return string|null
     */
    public function getPackageLength()
    {
        return $this->container['package_length'];
    }

    /**
     * Sets package_length
     *
     * @param string|null $package_length package_length
     *
     * @return $this
     */
    public function setPackageLength($package_length)
    {
        $this->container['package_length'] = $package_length;

        return $this;
    }

    /**
     * Gets package_width
     *
     * @return string|null
     */
    public function getPackageWidth()
    {
        return $this->container['package_width'];
    }

    /**
     * Sets package_width
     *
     * @param string|null $package_width package_width
     *
     * @return $this
     */
    public function setPackageWidth($package_width)
    {
        $this->container['package_width'] = $package_width;

        return $this;
    }

    /**
     * Gets package_height
     *
     * @return string|null
     */
    public function getPackageHeight()
    {
        return $this->container['package_height'];
    }

    /**
     * Sets package_height
     *
     * @param string|null $package_height package_height
     *
     * @return $this
     */
    public function setPackageHeight($package_height)
    {
        $this->container['package_height'] = $package_height;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string|null $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets zone
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     *
     * @param string|null $zone zone
     *
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

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


