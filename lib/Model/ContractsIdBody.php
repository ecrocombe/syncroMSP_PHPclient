<?php
/**
 * ContractsIdBody
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
 * ContractsIdBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContractsIdBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'contracts_id_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract_amount' => 'string',
'customer_id' => 'int',
'description' => 'string',
'start_date' => '\DateTime',
'end_date' => '\DateTime',
'name' => 'string',
'primary_contact' => 'string',
'status' => 'string',
'likelihood' => 'int',
'apply_to_all' => 'bool',
'sla_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract_amount' => null,
'customer_id' => null,
'description' => null,
'start_date' => 'date-time',
'end_date' => 'date-time',
'name' => null,
'primary_contact' => null,
'status' => null,
'likelihood' => null,
'apply_to_all' => null,
'sla_id' => null    ];

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
        'contract_amount' => 'contract_amount',
'customer_id' => 'customer_id',
'description' => 'description',
'start_date' => 'start_date',
'end_date' => 'end_date',
'name' => 'name',
'primary_contact' => 'primary_contact',
'status' => 'status',
'likelihood' => 'likelihood',
'apply_to_all' => 'apply_to_all',
'sla_id' => 'sla_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_amount' => 'setContractAmount',
'customer_id' => 'setCustomerId',
'description' => 'setDescription',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'name' => 'setName',
'primary_contact' => 'setPrimaryContact',
'status' => 'setStatus',
'likelihood' => 'setLikelihood',
'apply_to_all' => 'setApplyToAll',
'sla_id' => 'setSlaId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_amount' => 'getContractAmount',
'customer_id' => 'getCustomerId',
'description' => 'getDescription',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'name' => 'getName',
'primary_contact' => 'getPrimaryContact',
'status' => 'getStatus',
'likelihood' => 'getLikelihood',
'apply_to_all' => 'getApplyToAll',
'sla_id' => 'getSlaId'    ];

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
        $this->container['contract_amount'] = isset($data['contract_amount']) ? $data['contract_amount'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['primary_contact'] = isset($data['primary_contact']) ? $data['primary_contact'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['likelihood'] = isset($data['likelihood']) ? $data['likelihood'] : null;
        $this->container['apply_to_all'] = isset($data['apply_to_all']) ? $data['apply_to_all'] : null;
        $this->container['sla_id'] = isset($data['sla_id']) ? $data['sla_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
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
     * Gets contract_amount
     *
     * @return string
     */
    public function getContractAmount()
    {
        return $this->container['contract_amount'];
    }

    /**
     * Sets contract_amount
     *
     * @param string $contract_amount contract_amount
     *
     * @return $this
     */
    public function setContractAmount($contract_amount)
    {
        $this->container['contract_amount'] = $contract_amount;

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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * Gets primary_contact
     *
     * @return string
     */
    public function getPrimaryContact()
    {
        return $this->container['primary_contact'];
    }

    /**
     * Sets primary_contact
     *
     * @param string $primary_contact primary_contact
     *
     * @return $this
     */
    public function setPrimaryContact($primary_contact)
    {
        $this->container['primary_contact'] = $primary_contact;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets likelihood
     *
     * @return int
     */
    public function getLikelihood()
    {
        return $this->container['likelihood'];
    }

    /**
     * Sets likelihood
     *
     * @param int $likelihood likelihood
     *
     * @return $this
     */
    public function setLikelihood($likelihood)
    {
        $this->container['likelihood'] = $likelihood;

        return $this;
    }

    /**
     * Gets apply_to_all
     *
     * @return bool
     */
    public function getApplyToAll()
    {
        return $this->container['apply_to_all'];
    }

    /**
     * Sets apply_to_all
     *
     * @param bool $apply_to_all apply_to_all
     *
     * @return $this
     */
    public function setApplyToAll($apply_to_all)
    {
        $this->container['apply_to_all'] = $apply_to_all;

        return $this;
    }

    /**
     * Gets sla_id
     *
     * @return int
     */
    public function getSlaId()
    {
        return $this->container['sla_id'];
    }

    /**
     * Sets sla_id
     *
     * @param int $sla_id sla_id
     *
     * @return $this
     */
    public function setSlaId($sla_id)
    {
        $this->container['sla_id'] = $sla_id;

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