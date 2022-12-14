<?php
/**
 * AppointmentsBody
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

namespace VereTech\SyncroMSP_PHPclient\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AppointmentsBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppointmentsBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'appointments_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
'user_ids' => 'int[]',
'ticket_id' => 'int',
'do_not_email' => 'bool',
'user_id' => 'int',
'start_at' => '\DateTime',
'end_at' => '\DateTime',
'location' => 'string',
'summary' => 'string',
'email_customer' => 'bool',
'appointment_duration' => 'string',
'appointment_type_id' => 'int',
'customer_id' => 'int',
'all_day' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
'user_ids' => null,
'ticket_id' => null,
'do_not_email' => null,
'user_id' => null,
'start_at' => 'date-time',
'end_at' => 'date-time',
'location' => null,
'summary' => null,
'email_customer' => null,
'appointment_duration' => null,
'appointment_type_id' => null,
'customer_id' => null,
'all_day' => null    ];

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
        'description' => 'description',
'user_ids' => 'user_ids',
'ticket_id' => 'ticket_id',
'do_not_email' => 'do_not_email',
'user_id' => 'user_id',
'start_at' => 'start_at',
'end_at' => 'end_at',
'location' => 'location',
'summary' => 'summary',
'email_customer' => 'email_customer',
'appointment_duration' => 'appointment_duration',
'appointment_type_id' => 'appointment_type_id',
'customer_id' => 'customer_id',
'all_day' => 'all_day'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
'user_ids' => 'setUserIds',
'ticket_id' => 'setTicketId',
'do_not_email' => 'setDoNotEmail',
'user_id' => 'setUserId',
'start_at' => 'setStartAt',
'end_at' => 'setEndAt',
'location' => 'setLocation',
'summary' => 'setSummary',
'email_customer' => 'setEmailCustomer',
'appointment_duration' => 'setAppointmentDuration',
'appointment_type_id' => 'setAppointmentTypeId',
'customer_id' => 'setCustomerId',
'all_day' => 'setAllDay'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
'user_ids' => 'getUserIds',
'ticket_id' => 'getTicketId',
'do_not_email' => 'getDoNotEmail',
'user_id' => 'getUserId',
'start_at' => 'getStartAt',
'end_at' => 'getEndAt',
'location' => 'getLocation',
'summary' => 'getSummary',
'email_customer' => 'getEmailCustomer',
'appointment_duration' => 'getAppointmentDuration',
'appointment_type_id' => 'getAppointmentTypeId',
'customer_id' => 'getCustomerId',
'all_day' => 'getAllDay'    ];

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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['user_ids'] = isset($data['user_ids']) ? $data['user_ids'] : null;
        $this->container['ticket_id'] = isset($data['ticket_id']) ? $data['ticket_id'] : null;
        $this->container['do_not_email'] = isset($data['do_not_email']) ? $data['do_not_email'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['end_at'] = isset($data['end_at']) ? $data['end_at'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['email_customer'] = isset($data['email_customer']) ? $data['email_customer'] : null;
        $this->container['appointment_duration'] = isset($data['appointment_duration']) ? $data['appointment_duration'] : null;
        $this->container['appointment_type_id'] = isset($data['appointment_type_id']) ? $data['appointment_type_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['all_day'] = isset($data['all_day']) ? $data['all_day'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_at'] === null) {
            $invalidProperties[] = "'start_at' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
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
     * Gets user_ids
     *
     * @return int[]
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     *
     * @param int[] $user_ids user_ids
     *
     * @return $this
     */
    public function setUserIds($user_ids)
    {
        $this->container['user_ids'] = $user_ids;

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
     * Gets do_not_email
     *
     * @return bool
     */
    public function getDoNotEmail()
    {
        return $this->container['do_not_email'];
    }

    /**
     * Sets do_not_email
     *
     * @param bool $do_not_email do_not_email
     *
     * @return $this
     */
    public function setDoNotEmail($do_not_email)
    {
        $this->container['do_not_email'] = $do_not_email;

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
     * Gets start_at
     *
     * @return \DateTime
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param \DateTime $start_at start_at
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
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param \DateTime $end_at end_at
     *
     * @return $this
     */
    public function setEndAt($end_at)
    {
        $this->container['end_at'] = $end_at;

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
     * Gets email_customer
     *
     * @return bool
     */
    public function getEmailCustomer()
    {
        return $this->container['email_customer'];
    }

    /**
     * Sets email_customer
     *
     * @param bool $email_customer email_customer
     *
     * @return $this
     */
    public function setEmailCustomer($email_customer)
    {
        $this->container['email_customer'] = $email_customer;

        return $this;
    }

    /**
     * Gets appointment_duration
     *
     * @return string
     */
    public function getAppointmentDuration()
    {
        return $this->container['appointment_duration'];
    }

    /**
     * Sets appointment_duration
     *
     * @param string $appointment_duration appointment_duration
     *
     * @return $this
     */
    public function setAppointmentDuration($appointment_duration)
    {
        $this->container['appointment_duration'] = $appointment_duration;

        return $this;
    }

    /**
     * Gets appointment_type_id
     *
     * @return int
     */
    public function getAppointmentTypeId()
    {
        return $this->container['appointment_type_id'];
    }

    /**
     * Sets appointment_type_id
     *
     * @param int $appointment_type_id appointment_type_id
     *
     * @return $this
     */
    public function setAppointmentTypeId($appointment_type_id)
    {
        $this->container['appointment_type_id'] = $appointment_type_id;

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
