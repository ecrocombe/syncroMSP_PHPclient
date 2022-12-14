<?php
/**
 * InlineResponse2001Properties
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse2001Properties Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2001Properties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_1_properties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'asset_id' => 'int',
'account_id' => 'int',
'properties' => '',
'created_at' => 'string',
'updated_at' => 'string',
'override_alert_agent_offline_mins' => '',
'override_alert_agent_rearm_after_mins' => '',
'override_low_hd_threshold' => '',
'override_autoresolve_offline_alert' => '',
'override_low_hd_thresholds' => ''    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'asset_id' => null,
'account_id' => null,
'properties' => null,
'created_at' => null,
'updated_at' => null,
'override_alert_agent_offline_mins' => null,
'override_alert_agent_rearm_after_mins' => null,
'override_low_hd_threshold' => null,
'override_autoresolve_offline_alert' => null,
'override_low_hd_thresholds' => null    ];

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
        'id' => 'id',
'asset_id' => 'asset_id',
'account_id' => 'account_id',
'properties' => 'properties',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'override_alert_agent_offline_mins' => 'override_alert_agent_offline_mins',
'override_alert_agent_rearm_after_mins' => 'override_alert_agent_rearm_after_mins',
'override_low_hd_threshold' => 'override_low_hd_threshold',
'override_autoresolve_offline_alert' => 'override_autoresolve_offline_alert',
'override_low_hd_thresholds' => 'override_low_hd_thresholds'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'asset_id' => 'setAssetId',
'account_id' => 'setAccountId',
'properties' => 'setProperties',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'override_alert_agent_offline_mins' => 'setOverrideAlertAgentOfflineMins',
'override_alert_agent_rearm_after_mins' => 'setOverrideAlertAgentRearmAfterMins',
'override_low_hd_threshold' => 'setOverrideLowHdThreshold',
'override_autoresolve_offline_alert' => 'setOverrideAutoresolveOfflineAlert',
'override_low_hd_thresholds' => 'setOverrideLowHdThresholds'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'asset_id' => 'getAssetId',
'account_id' => 'getAccountId',
'properties' => 'getProperties',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'override_alert_agent_offline_mins' => 'getOverrideAlertAgentOfflineMins',
'override_alert_agent_rearm_after_mins' => 'getOverrideAlertAgentRearmAfterMins',
'override_low_hd_threshold' => 'getOverrideLowHdThreshold',
'override_autoresolve_offline_alert' => 'getOverrideAutoresolveOfflineAlert',
'override_low_hd_thresholds' => 'getOverrideLowHdThresholds'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['asset_id'] = isset($data['asset_id']) ? $data['asset_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['override_alert_agent_offline_mins'] = isset($data['override_alert_agent_offline_mins']) ? $data['override_alert_agent_offline_mins'] : null;
        $this->container['override_alert_agent_rearm_after_mins'] = isset($data['override_alert_agent_rearm_after_mins']) ? $data['override_alert_agent_rearm_after_mins'] : null;
        $this->container['override_low_hd_threshold'] = isset($data['override_low_hd_threshold']) ? $data['override_low_hd_threshold'] : null;
        $this->container['override_autoresolve_offline_alert'] = isset($data['override_autoresolve_offline_alert']) ? $data['override_autoresolve_offline_alert'] : null;
        $this->container['override_low_hd_thresholds'] = isset($data['override_low_hd_thresholds']) ? $data['override_low_hd_thresholds'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets asset_id
     *
     * @return int
     */
    public function getAssetId()
    {
        return $this->container['asset_id'];
    }

    /**
     * Sets asset_id
     *
     * @param int $asset_id asset_id
     *
     * @return $this
     */
    public function setAssetId($asset_id)
    {
        $this->container['asset_id'] = $asset_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return 
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param  $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
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
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets override_alert_agent_offline_mins
     *
     * @return 
     */
    public function getOverrideAlertAgentOfflineMins()
    {
        return $this->container['override_alert_agent_offline_mins'];
    }

    /**
     * Sets override_alert_agent_offline_mins
     *
     * @param  $override_alert_agent_offline_mins override_alert_agent_offline_mins
     *
     * @return $this
     */
    public function setOverrideAlertAgentOfflineMins($override_alert_agent_offline_mins)
    {
        $this->container['override_alert_agent_offline_mins'] = $override_alert_agent_offline_mins;

        return $this;
    }

    /**
     * Gets override_alert_agent_rearm_after_mins
     *
     * @return 
     */
    public function getOverrideAlertAgentRearmAfterMins()
    {
        return $this->container['override_alert_agent_rearm_after_mins'];
    }

    /**
     * Sets override_alert_agent_rearm_after_mins
     *
     * @param  $override_alert_agent_rearm_after_mins override_alert_agent_rearm_after_mins
     *
     * @return $this
     */
    public function setOverrideAlertAgentRearmAfterMins($override_alert_agent_rearm_after_mins)
    {
        $this->container['override_alert_agent_rearm_after_mins'] = $override_alert_agent_rearm_after_mins;

        return $this;
    }

    /**
     * Gets override_low_hd_threshold
     *
     * @return 
     */
    public function getOverrideLowHdThreshold()
    {
        return $this->container['override_low_hd_threshold'];
    }

    /**
     * Sets override_low_hd_threshold
     *
     * @param  $override_low_hd_threshold override_low_hd_threshold
     *
     * @return $this
     */
    public function setOverrideLowHdThreshold($override_low_hd_threshold)
    {
        $this->container['override_low_hd_threshold'] = $override_low_hd_threshold;

        return $this;
    }

    /**
     * Gets override_autoresolve_offline_alert
     *
     * @return 
     */
    public function getOverrideAutoresolveOfflineAlert()
    {
        return $this->container['override_autoresolve_offline_alert'];
    }

    /**
     * Sets override_autoresolve_offline_alert
     *
     * @param  $override_autoresolve_offline_alert override_autoresolve_offline_alert
     *
     * @return $this
     */
    public function setOverrideAutoresolveOfflineAlert($override_autoresolve_offline_alert)
    {
        $this->container['override_autoresolve_offline_alert'] = $override_autoresolve_offline_alert;

        return $this;
    }

    /**
     * Gets override_low_hd_thresholds
     *
     * @return 
     */
    public function getOverrideLowHdThresholds()
    {
        return $this->container['override_low_hd_thresholds'];
    }

    /**
     * Sets override_low_hd_thresholds
     *
     * @param  $override_low_hd_thresholds override_low_hd_thresholds
     *
     * @return $this
     */
    public function setOverrideLowHdThresholds($override_low_hd_thresholds)
    {
        $this->container['override_low_hd_thresholds'] = $override_low_hd_thresholds;

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