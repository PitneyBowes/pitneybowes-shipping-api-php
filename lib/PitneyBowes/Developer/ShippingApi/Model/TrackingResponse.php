<?php
/**
 * TrackingResponse
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
 * TrackingResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrackingResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TrackingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_count' => 'int',
        'carrier' => 'string',
        'tracking_number' => 'string',
        'reference_number' => 'string',
        'status' => 'string',
        'updated_date' => '\DateTime',
        'updated_time' => 'string',
        'ship_date' => '\DateTime',
        'estimated_delivery_date' => '\DateTime',
        'estimated_delivery_time' => 'string',
        'delivery_date' => '\DateTime',
        'delivery_time' => 'string',
        'delivery_location' => 'string',
        'delivery_location_description' => 'string',
        'signed_by' => 'string',
        'weight' => 'int',
        'weight_oum' => 'string',
        'reattempt_date' => '\DateTime',
        'reattempt_time' => 'string',
        'destination_address' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingAddress',
        'sender_address' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingAddress',
        'scan_details_list' => '\OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingResponseScanDetailsList[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'package_count' => null,
        'carrier' => null,
        'tracking_number' => null,
        'reference_number' => null,
        'status' => null,
        'updated_date' => 'date',
        'updated_time' => 'time',
        'ship_date' => 'date',
        'estimated_delivery_date' => 'date',
        'estimated_delivery_time' => 'time',
        'delivery_date' => 'date',
        'delivery_time' => 'time',
        'delivery_location' => null,
        'delivery_location_description' => null,
        'signed_by' => null,
        'weight' => null,
        'weight_oum' => null,
        'reattempt_date' => 'date',
        'reattempt_time' => 'time',
        'destination_address' => null,
        'sender_address' => null,
        'scan_details_list' => null
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
        'package_count' => 'packageCount',
        'carrier' => 'carrier',
        'tracking_number' => 'trackingNumber',
        'reference_number' => 'referenceNumber',
        'status' => 'status',
        'updated_date' => 'updatedDate',
        'updated_time' => 'updatedTime',
        'ship_date' => 'shipDate',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
        'estimated_delivery_time' => 'estimatedDeliveryTime',
        'delivery_date' => 'deliveryDate',
        'delivery_time' => 'deliveryTime',
        'delivery_location' => 'deliveryLocation',
        'delivery_location_description' => 'deliveryLocationDescription',
        'signed_by' => 'signedBy',
        'weight' => 'weight',
        'weight_oum' => 'weightOUM',
        'reattempt_date' => 'reattemptDate',
        'reattempt_time' => 'reattemptTime',
        'destination_address' => 'destinationAddress',
        'sender_address' => 'senderAddress',
        'scan_details_list' => 'scanDetailsList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_count' => 'setPackageCount',
        'carrier' => 'setCarrier',
        'tracking_number' => 'setTrackingNumber',
        'reference_number' => 'setReferenceNumber',
        'status' => 'setStatus',
        'updated_date' => 'setUpdatedDate',
        'updated_time' => 'setUpdatedTime',
        'ship_date' => 'setShipDate',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'estimated_delivery_time' => 'setEstimatedDeliveryTime',
        'delivery_date' => 'setDeliveryDate',
        'delivery_time' => 'setDeliveryTime',
        'delivery_location' => 'setDeliveryLocation',
        'delivery_location_description' => 'setDeliveryLocationDescription',
        'signed_by' => 'setSignedBy',
        'weight' => 'setWeight',
        'weight_oum' => 'setWeightOum',
        'reattempt_date' => 'setReattemptDate',
        'reattempt_time' => 'setReattemptTime',
        'destination_address' => 'setDestinationAddress',
        'sender_address' => 'setSenderAddress',
        'scan_details_list' => 'setScanDetailsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_count' => 'getPackageCount',
        'carrier' => 'getCarrier',
        'tracking_number' => 'getTrackingNumber',
        'reference_number' => 'getReferenceNumber',
        'status' => 'getStatus',
        'updated_date' => 'getUpdatedDate',
        'updated_time' => 'getUpdatedTime',
        'ship_date' => 'getShipDate',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'estimated_delivery_time' => 'getEstimatedDeliveryTime',
        'delivery_date' => 'getDeliveryDate',
        'delivery_time' => 'getDeliveryTime',
        'delivery_location' => 'getDeliveryLocation',
        'delivery_location_description' => 'getDeliveryLocationDescription',
        'signed_by' => 'getSignedBy',
        'weight' => 'getWeight',
        'weight_oum' => 'getWeightOum',
        'reattempt_date' => 'getReattemptDate',
        'reattempt_time' => 'getReattemptTime',
        'destination_address' => 'getDestinationAddress',
        'sender_address' => 'getSenderAddress',
        'scan_details_list' => 'getScanDetailsList'
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

    const STATUS_IN_TRANSIT = 'In Transit';
    const STATUS_DELIVERED = 'Delivered';
    const STATUS_MANIFEST = 'Manifest';
    const WEIGHT_OUM_LBS = 'LBS';
    const WEIGHT_OUM_KGS = 'KGS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_TRANSIT,
            self::STATUS_DELIVERED,
            self::STATUS_MANIFEST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeightOumAllowableValues()
    {
        return [
            self::WEIGHT_OUM_LBS,
            self::WEIGHT_OUM_KGS,
        ];
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
        $this->container['package_count'] = isset($data['package_count']) ? $data['package_count'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['estimated_delivery_date'] = isset($data['estimated_delivery_date']) ? $data['estimated_delivery_date'] : null;
        $this->container['estimated_delivery_time'] = isset($data['estimated_delivery_time']) ? $data['estimated_delivery_time'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['delivery_time'] = isset($data['delivery_time']) ? $data['delivery_time'] : null;
        $this->container['delivery_location'] = isset($data['delivery_location']) ? $data['delivery_location'] : null;
        $this->container['delivery_location_description'] = isset($data['delivery_location_description']) ? $data['delivery_location_description'] : null;
        $this->container['signed_by'] = isset($data['signed_by']) ? $data['signed_by'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['weight_oum'] = isset($data['weight_oum']) ? $data['weight_oum'] : null;
        $this->container['reattempt_date'] = isset($data['reattempt_date']) ? $data['reattempt_date'] : null;
        $this->container['reattempt_time'] = isset($data['reattempt_time']) ? $data['reattempt_time'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['sender_address'] = isset($data['sender_address']) ? $data['sender_address'] : null;
        $this->container['scan_details_list'] = isset($data['scan_details_list']) ? $data['scan_details_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWeightOumAllowableValues();
        if (!is_null($this->container['weight_oum']) && !in_array($this->container['weight_oum'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'weight_oum', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets package_count
     *
     * @return int|null
     */
    public function getPackageCount()
    {
        return $this->container['package_count'];
    }

    /**
     * Sets package_count
     *
     * @param int|null $package_count package_count
     *
     * @return $this
     */
    public function setPackageCount($package_count)
    {
        $this->container['package_count'] = $package_count;

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
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number tracking_number
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number reference_number
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updated_date
     *
     * @return \DateTime|null
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     *
     * @param \DateTime|null $updated_date updated_date
     *
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return string|null
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param string|null $updated_time updated_time
     *
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime|null $ship_date ship_date
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets estimated_delivery_date
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param \DateTime|null $estimated_delivery_date estimated_delivery_date
     *
     * @return $this
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets estimated_delivery_time
     *
     * @return string|null
     */
    public function getEstimatedDeliveryTime()
    {
        return $this->container['estimated_delivery_time'];
    }

    /**
     * Sets estimated_delivery_time
     *
     * @param string|null $estimated_delivery_time estimated_delivery_time
     *
     * @return $this
     */
    public function setEstimatedDeliveryTime($estimated_delivery_time)
    {
        $this->container['estimated_delivery_time'] = $estimated_delivery_time;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime|null $delivery_date delivery_date
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return string|null
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param string|null $delivery_time delivery_time
     *
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets delivery_location
     *
     * @return string|null
     */
    public function getDeliveryLocation()
    {
        return $this->container['delivery_location'];
    }

    /**
     * Sets delivery_location
     *
     * @param string|null $delivery_location delivery_location
     *
     * @return $this
     */
    public function setDeliveryLocation($delivery_location)
    {
        $this->container['delivery_location'] = $delivery_location;

        return $this;
    }

    /**
     * Gets delivery_location_description
     *
     * @return string|null
     */
    public function getDeliveryLocationDescription()
    {
        return $this->container['delivery_location_description'];
    }

    /**
     * Sets delivery_location_description
     *
     * @param string|null $delivery_location_description delivery_location_description
     *
     * @return $this
     */
    public function setDeliveryLocationDescription($delivery_location_description)
    {
        $this->container['delivery_location_description'] = $delivery_location_description;

        return $this;
    }

    /**
     * Gets signed_by
     *
     * @return string|null
     */
    public function getSignedBy()
    {
        return $this->container['signed_by'];
    }

    /**
     * Sets signed_by
     *
     * @param string|null $signed_by signed_by
     *
     * @return $this
     */
    public function setSignedBy($signed_by)
    {
        $this->container['signed_by'] = $signed_by;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets weight_oum
     *
     * @return string|null
     */
    public function getWeightOum()
    {
        return $this->container['weight_oum'];
    }

    /**
     * Sets weight_oum
     *
     * @param string|null $weight_oum weight_oum
     *
     * @return $this
     */
    public function setWeightOum($weight_oum)
    {
        $allowedValues = $this->getWeightOumAllowableValues();
        if (!is_null($weight_oum) && !in_array($weight_oum, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'weight_oum', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weight_oum'] = $weight_oum;

        return $this;
    }

    /**
     * Gets reattempt_date
     *
     * @return \DateTime|null
     */
    public function getReattemptDate()
    {
        return $this->container['reattempt_date'];
    }

    /**
     * Sets reattempt_date
     *
     * @param \DateTime|null $reattempt_date reattempt_date
     *
     * @return $this
     */
    public function setReattemptDate($reattempt_date)
    {
        $this->container['reattempt_date'] = $reattempt_date;

        return $this;
    }

    /**
     * Gets reattempt_time
     *
     * @return string|null
     */
    public function getReattemptTime()
    {
        return $this->container['reattempt_time'];
    }

    /**
     * Sets reattempt_time
     *
     * @param string|null $reattempt_time reattempt_time
     *
     * @return $this
     */
    public function setReattemptTime($reattempt_time)
    {
        $this->container['reattempt_time'] = $reattempt_time;

        return $this;
    }

    /**
     * Gets destination_address
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingAddress|null
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingAddress|null $destination_address destination_address
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets sender_address
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingAddress|null
     */
    public function getSenderAddress()
    {
        return $this->container['sender_address'];
    }

    /**
     * Sets sender_address
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingAddress|null $sender_address sender_address
     *
     * @return $this
     */
    public function setSenderAddress($sender_address)
    {
        $this->container['sender_address'] = $sender_address;

        return $this;
    }

    /**
     * Gets scan_details_list
     *
     * @return \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingResponseScanDetailsList[]|null
     */
    public function getScanDetailsList()
    {
        return $this->container['scan_details_list'];
    }

    /**
     * Sets scan_details_list
     *
     * @param \OpenAPI\Client\PitneyBowes.Developer.ShippingApi.Model\TrackingResponseScanDetailsList[]|null $scan_details_list scan_details_list
     *
     * @return $this
     */
    public function setScanDetailsList($scan_details_list)
    {
        $this->container['scan_details_list'] = $scan_details_list;

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


