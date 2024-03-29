<?php
/**
 * CustomerAssetsIdBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  VereTech\SyncroMSP_PHPclient\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Syncro
 *
 * Welcome to the official Syncro API Docs.  To use these docs, you will need an active Syncro account. You can sign up for one here: [Syncro](https://syncromsp.com)  If you already have an active account, fill in your subdomain below and then click \"Authorize\" and fill in your api-key. The key is specific to your user account so it is found on the your user profile page.  Please review the [API License Agreement](https://syncromsp.com/syncromsp-api-license-agreement/) before using our API. By accessing our API, you are agreeing to the API License Agreement.  Please note there is a rate limit of 180 requests per minute per IP address on API Usage.
 *
 * OpenAPI spec version: v1
 * Contact: help@syncromsp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VereTech\SyncroMSP_PHPclient\Client\Model;

use \ArrayAccess;
use \VereTech\SyncroMSP_PHPclient\Client\ObjectSerializer;

/**
 * CustomerAssetsIdBody Class Doc Comment
 *
 * @category Class
 * @package  VereTech\SyncroMSP_PHPclient\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerAssetsIdBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customer_assets_id_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asset_type_name' => 'string',
'asset_type_id' => 'int',
'properties' => 'object',
'name' => 'string',
'customer_id' => 'int',
'asset_serial' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asset_type_name' => null,
'asset_type_id' => null,
'properties' => null,
'name' => null,
'customer_id' => null,
'asset_serial' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asset_type_name' => 'asset_type_name',
'asset_type_id' => 'asset_type_id',
'properties' => 'properties',
'name' => 'name',
'customer_id' => 'customer_id',
'asset_serial' => 'asset_serial'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_type_name' => 'setAssetTypeName',
'asset_type_id' => 'setAssetTypeId',
'properties' => 'setProperties',
'name' => 'setName',
'customer_id' => 'setCustomerId',
'asset_serial' => 'setAssetSerial'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_type_name' => 'getAssetTypeName',
'asset_type_id' => 'getAssetTypeId',
'properties' => 'getProperties',
'name' => 'getName',
'customer_id' => 'getCustomerId',
'asset_serial' => 'getAssetSerial'    ];

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
        return self::$swaggerModelName;
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
        $this->container['asset_type_name'] = isset($data['asset_type_name']) ? $data['asset_type_name'] : null;
        $this->container['asset_type_id'] = isset($data['asset_type_id']) ? $data['asset_type_id'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['asset_serial'] = isset($data['asset_serial']) ? $data['asset_serial'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets asset_type_name
     *
     * @return string
     */
    public function getAssetTypeName()
    {
        return $this->container['asset_type_name'];
    }

    /**
     * Sets asset_type_name
     *
     * @param string $asset_type_name asset_type_name
     *
     * @return $this
     */
    public function setAssetTypeName($asset_type_name)
    {
        $this->container['asset_type_name'] = $asset_type_name;

        return $this;
    }

    /**
     * Gets asset_type_id
     *
     * @return int
     */
    public function getAssetTypeId()
    {
        return $this->container['asset_type_id'];
    }

    /**
     * Sets asset_type_id
     *
     * @param int $asset_type_id asset_type_id
     *
     * @return $this
     */
    public function setAssetTypeId($asset_type_id)
    {
        $this->container['asset_type_id'] = $asset_type_id;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return object
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param object $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets asset_serial
     *
     * @return string
     */
    public function getAssetSerial()
    {
        return $this->container['asset_serial'];
    }

    /**
     * Sets asset_serial
     *
     * @param string $asset_serial asset_serial
     *
     * @return $this
     */
    public function setAssetSerial($asset_serial)
    {
        $this->container['asset_serial'] = $asset_serial;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
