<?php
/**
 * InlineResponse200
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
 * InlineResponse200 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'summary' => 'string',
'description' => 'string',
'customer_id' => 'int',
'created_at' => 'string',
'updated_at' => 'string',
'start_at' => 'string',
'end_at' => 'string',
'duration' => 'float',
'location' => 'string',
'ticket_id' => 'int',
'appointment_location_type' => 'string',
'start_at_label' => 'string',
'all_day' => 'bool',
'ticket' => 'object',
'customer' => '\Swagger\Client\Model\InlineResponse200Customer'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'summary' => null,
'description' => null,
'customer_id' => null,
'created_at' => null,
'updated_at' => null,
'start_at' => null,
'end_at' => null,
'duration' => null,
'location' => null,
'ticket_id' => null,
'appointment_location_type' => null,
'start_at_label' => null,
'all_day' => null,
'ticket' => null,
'customer' => null    ];

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
'summary' => 'summary',
'description' => 'description',
'customer_id' => 'customer_id',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'start_at' => 'start_at',
'end_at' => 'end_at',
'duration' => 'duration',
'location' => 'location',
'ticket_id' => 'ticket_id',
'appointment_location_type' => 'appointment_location_type',
'start_at_label' => 'start_at_label',
'all_day' => 'all_day',
'ticket' => 'ticket',
'customer' => 'customer'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'summary' => 'setSummary',
'description' => 'setDescription',
'customer_id' => 'setCustomerId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'start_at' => 'setStartAt',
'end_at' => 'setEndAt',
'duration' => 'setDuration',
'location' => 'setLocation',
'ticket_id' => 'setTicketId',
'appointment_location_type' => 'setAppointmentLocationType',
'start_at_label' => 'setStartAtLabel',
'all_day' => 'setAllDay',
'ticket' => 'setTicket',
'customer' => 'setCustomer'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'summary' => 'getSummary',
'description' => 'getDescription',
'customer_id' => 'getCustomerId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'start_at' => 'getStartAt',
'end_at' => 'getEndAt',
'duration' => 'getDuration',
'location' => 'getLocation',
'ticket_id' => 'getTicketId',
'appointment_location_type' => 'getAppointmentLocationType',
'start_at_label' => 'getStartAtLabel',
'all_day' => 'getAllDay',
'ticket' => 'getTicket',
'customer' => 'getCustomer'    ];

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
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['end_at'] = isset($data['end_at']) ? $data['end_at'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['ticket_id'] = isset($data['ticket_id']) ? $data['ticket_id'] : null;
        $this->container['appointment_location_type'] = isset($data['appointment_location_type']) ? $data['appointment_location_type'] : null;
        $this->container['start_at_label'] = isset($data['start_at_label']) ? $data['start_at_label'] : null;
        $this->container['all_day'] = isset($data['all_day']) ? $data['all_day'] : null;
        $this->container['ticket'] = isset($data['ticket']) ? $data['ticket'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
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
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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
     * Gets start_at
     *
     * @return string
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param string $start_at start_at
     *
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return string
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param string $end_at end_at
     *
     * @return $this
     */
    public function setEndAt($end_at)
    {
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets ticket_id
     *
     * @return int
     */
    public function getTicketId()
    {
        return $this->container['ticket_id'];
    }

    /**
     * Sets ticket_id
     *
     * @param int $ticket_id ticket_id
     *
     * @return $this
     */
    public function setTicketId($ticket_id)
    {
        $this->container['ticket_id'] = $ticket_id;

        return $this;
    }

    /**
     * Gets appointment_location_type
     *
     * @return string
     */
    public function getAppointmentLocationType()
    {
        return $this->container['appointment_location_type'];
    }

    /**
     * Sets appointment_location_type
     *
     * @param string $appointment_location_type appointment_location_type
     *
     * @return $this
     */
    public function setAppointmentLocationType($appointment_location_type)
    {
        $this->container['appointment_location_type'] = $appointment_location_type;

        return $this;
    }

    /**
     * Gets start_at_label
     *
     * @return string
     */
    public function getStartAtLabel()
    {
        return $this->container['start_at_label'];
    }

    /**
     * Sets start_at_label
     *
     * @param string $start_at_label start_at_label
     *
     * @return $this
     */
    public function setStartAtLabel($start_at_label)
    {
        $this->container['start_at_label'] = $start_at_label;

        return $this;
    }

    /**
     * Gets all_day
     *
     * @return bool
     */
    public function getAllDay()
    {
        return $this->container['all_day'];
    }

    /**
     * Sets all_day
     *
     * @param bool $all_day all_day
     *
     * @return $this
     */
    public function setAllDay($all_day)
    {
        $this->container['all_day'] = $all_day;

        return $this;
    }

    /**
     * Gets ticket
     *
     * @return object
     */
    public function getTicket()
    {
        return $this->container['ticket'];
    }

    /**
     * Sets ticket
     *
     * @param object $ticket ticket
     *
     * @return $this
     */
    public function setTicket($ticket)
    {
        $this->container['ticket'] = $ticket;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Swagger\Client\Model\InlineResponse200Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Swagger\Client\Model\InlineResponse200Customer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
