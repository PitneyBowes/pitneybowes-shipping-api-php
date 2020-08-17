<?php
/**
 * ParcelProtectionPolicyResponseContent
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
 * ParcelProtectionPolicyResponseContent Class Doc Comment
 *
 * @category Class
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParcelProtectionPolicyResponseContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParcelProtectionPolicyResponse_content';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_id' => 'string',
        'developer_id' => 'string',
        'subscription_acc_no' => 'string',
        'client_transaction_id' => 'string',
        'policy_details' => '\pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponsePolicyDetails',
        'shipment_details' => '\pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipmentDetails',
        'shipper_info' => '\pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipperInfo',
        'consignee_info' => '\pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipperInfo',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'transaction_id' => null,
        'developer_id' => null,
        'subscription_acc_no' => null,
        'client_transaction_id' => null,
        'policy_details' => null,
        'shipment_details' => null,
        'shipper_info' => null,
        'consignee_info' => null,
        'created_at' => null,
        'updated_at' => null
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
        'transaction_id' => 'transactionId',
        'developer_id' => 'developerId',
        'subscription_acc_no' => 'subscriptionAccNo',
        'client_transaction_id' => 'clientTransactionId',
        'policy_details' => 'policyDetails',
        'shipment_details' => 'shipmentDetails',
        'shipper_info' => 'shipperInfo',
        'consignee_info' => 'consigneeInfo',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_id' => 'setTransactionId',
        'developer_id' => 'setDeveloperId',
        'subscription_acc_no' => 'setSubscriptionAccNo',
        'client_transaction_id' => 'setClientTransactionId',
        'policy_details' => 'setPolicyDetails',
        'shipment_details' => 'setShipmentDetails',
        'shipper_info' => 'setShipperInfo',
        'consignee_info' => 'setConsigneeInfo',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_id' => 'getTransactionId',
        'developer_id' => 'getDeveloperId',
        'subscription_acc_no' => 'getSubscriptionAccNo',
        'client_transaction_id' => 'getClientTransactionId',
        'policy_details' => 'getPolicyDetails',
        'shipment_details' => 'getShipmentDetails',
        'shipper_info' => 'getShipperInfo',
        'consignee_info' => 'getConsigneeInfo',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['developer_id'] = isset($data['developer_id']) ? $data['developer_id'] : null;
        $this->container['subscription_acc_no'] = isset($data['subscription_acc_no']) ? $data['subscription_acc_no'] : null;
        $this->container['client_transaction_id'] = isset($data['client_transaction_id']) ? $data['client_transaction_id'] : null;
        $this->container['policy_details'] = isset($data['policy_details']) ? $data['policy_details'] : null;
        $this->container['shipment_details'] = isset($data['shipment_details']) ? $data['shipment_details'] : null;
        $this->container['shipper_info'] = isset($data['shipper_info']) ? $data['shipper_info'] : null;
        $this->container['consignee_info'] = isset($data['consignee_info']) ? $data['consignee_info'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id transaction_id
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets developer_id
     *
     * @return string|null
     */
    public function getDeveloperId()
    {
        return $this->container['developer_id'];
    }

    /**
     * Sets developer_id
     *
     * @param string|null $developer_id developer_id
     *
     * @return $this
     */
    public function setDeveloperId($developer_id)
    {
        $this->container['developer_id'] = $developer_id;

        return $this;
    }

    /**
     * Gets subscription_acc_no
     *
     * @return string|null
     */
    public function getSubscriptionAccNo()
    {
        return $this->container['subscription_acc_no'];
    }

    /**
     * Sets subscription_acc_no
     *
     * @param string|null $subscription_acc_no subscription_acc_no
     *
     * @return $this
     */
    public function setSubscriptionAccNo($subscription_acc_no)
    {
        $this->container['subscription_acc_no'] = $subscription_acc_no;

        return $this;
    }

    /**
     * Gets client_transaction_id
     *
     * @return string|null
     */
    public function getClientTransactionId()
    {
        return $this->container['client_transaction_id'];
    }

    /**
     * Sets client_transaction_id
     *
     * @param string|null $client_transaction_id client_transaction_id
     *
     * @return $this
     */
    public function setClientTransactionId($client_transaction_id)
    {
        $this->container['client_transaction_id'] = $client_transaction_id;

        return $this;
    }

    /**
     * Gets policy_details
     *
     * @return \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponsePolicyDetails|null
     */
    public function getPolicyDetails()
    {
        return $this->container['policy_details'];
    }

    /**
     * Sets policy_details
     *
     * @param \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponsePolicyDetails|null $policy_details policy_details
     *
     * @return $this
     */
    public function setPolicyDetails($policy_details)
    {
        $this->container['policy_details'] = $policy_details;

        return $this;
    }

    /**
     * Gets shipment_details
     *
     * @return \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipmentDetails|null
     */
    public function getShipmentDetails()
    {
        return $this->container['shipment_details'];
    }

    /**
     * Sets shipment_details
     *
     * @param \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipmentDetails|null $shipment_details shipment_details
     *
     * @return $this
     */
    public function setShipmentDetails($shipment_details)
    {
        $this->container['shipment_details'] = $shipment_details;

        return $this;
    }

    /**
     * Gets shipper_info
     *
     * @return \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipperInfo|null
     */
    public function getShipperInfo()
    {
        return $this->container['shipper_info'];
    }

    /**
     * Sets shipper_info
     *
     * @param \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipperInfo|null $shipper_info shipper_info
     *
     * @return $this
     */
    public function setShipperInfo($shipper_info)
    {
        $this->container['shipper_info'] = $shipper_info;

        return $this;
    }

    /**
     * Gets consignee_info
     *
     * @return \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipperInfo|null
     */
    public function getConsigneeInfo()
    {
        return $this->container['consignee_info'];
    }

    /**
     * Sets consignee_info
     *
     * @param \pitneybowesShipping\shippingApi.model\ParcelProtectionPolicyResponseShipperInfo|null $consignee_info consignee_info
     *
     * @return $this
     */
    public function setConsigneeInfo($consignee_info)
    {
        $this->container['consignee_info'] = $consignee_info;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


