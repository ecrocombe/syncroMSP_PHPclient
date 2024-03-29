<?php
/**
 * WorksheetResultsIdBody
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
 * WorksheetResultsIdBody Class Doc Comment
 *
 * @category Class
 * @package  VereTech\SyncroMSP_PHPclient\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorksheetResultsIdBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'worksheet_results_id_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'worksheet_template_id' => 'int',
'user_id' => 'int',
'title' => 'string',
'complete' => 'bool',
'public' => 'bool',
'required' => 'bool',
'answers' => '\VereTech\SyncroMSP_PHPclient\Client\Model\TicketsticketIdworksheetResultsidAnswers'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'worksheet_template_id' => null,
'user_id' => null,
'title' => null,
'complete' => null,
'public' => null,
'required' => null,
'answers' => null    ];

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
        'worksheet_template_id' => 'worksheet_template_id',
'user_id' => 'user_id',
'title' => 'title',
'complete' => 'complete',
'public' => 'public',
'required' => 'required',
'answers' => 'answers'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'worksheet_template_id' => 'setWorksheetTemplateId',
'user_id' => 'setUserId',
'title' => 'setTitle',
'complete' => 'setComplete',
'public' => 'setPublic',
'required' => 'setRequired',
'answers' => 'setAnswers'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'worksheet_template_id' => 'getWorksheetTemplateId',
'user_id' => 'getUserId',
'title' => 'getTitle',
'complete' => 'getComplete',
'public' => 'getPublic',
'required' => 'getRequired',
'answers' => 'getAnswers'    ];

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
        $this->container['worksheet_template_id'] = isset($data['worksheet_template_id']) ? $data['worksheet_template_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['complete'] = isset($data['complete']) ? $data['complete'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
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
     * Gets worksheet_template_id
     *
     * @return int
     */
    public function getWorksheetTemplateId()
    {
        return $this->container['worksheet_template_id'];
    }

    /**
     * Sets worksheet_template_id
     *
     * @param int $worksheet_template_id worksheet_template_id
     *
     * @return $this
     */
    public function setWorksheetTemplateId($worksheet_template_id)
    {
        $this->container['worksheet_template_id'] = $worksheet_template_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets complete
     *
     * @return bool
     */
    public function getComplete()
    {
        return $this->container['complete'];
    }

    /**
     * Sets complete
     *
     * @param bool $complete complete
     *
     * @return $this
     */
    public function setComplete($complete)
    {
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public public
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets answers
     *
     * @return \VereTech\SyncroMSP_PHPclient\Client\Model\TicketsticketIdworksheetResultsidAnswers
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     *
     * @param \VereTech\SyncroMSP_PHPclient\Client\Model\TicketsticketIdworksheetResultsidAnswers $answers answers
     *
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

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
