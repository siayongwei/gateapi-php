<?php
/**
 * SubAccountKey
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * SubAccountKey Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class SubAccountKey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubAccountKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'string',
        'mode' => 'int',
        'name' => 'string',
        'perms' => '\GateApi\Model\SubAccountKeyPerms[]',
        'ip_whitelist' => 'string[]',
        'key' => 'string',
        'state' => 'int',
        'created_at' => 'int',
        'updated_at' => 'int',
        'last_access' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_id' => null,
        'mode' => 'int32',
        'name' => null,
        'perms' => null,
        'ip_whitelist' => null,
        'key' => null,
        'state' => 'int32',
        'created_at' => 'int64',
        'updated_at' => 'int64',
        'last_access' => 'int64'
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
        'user_id' => 'user_id',
        'mode' => 'mode',
        'name' => 'name',
        'perms' => 'perms',
        'ip_whitelist' => 'ip_whitelist',
        'key' => 'key',
        'state' => 'state',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'last_access' => 'last_access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'mode' => 'setMode',
        'name' => 'setName',
        'perms' => 'setPerms',
        'ip_whitelist' => 'setIpWhitelist',
        'key' => 'setKey',
        'state' => 'setState',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'last_access' => 'setLastAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'mode' => 'getMode',
        'name' => 'getName',
        'perms' => 'getPerms',
        'ip_whitelist' => 'getIpWhitelist',
        'key' => 'getKey',
        'state' => 'getState',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'last_access' => 'getLastAccess'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['perms'] = isset($data['perms']) ? $data['perms'] : null;
        $this->container['ip_whitelist'] = isset($data['ip_whitelist']) ? $data['ip_whitelist'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['last_access'] = isset($data['last_access']) ? $data['last_access'] : null;
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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id User ID
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return int|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param int|null $mode Mode: 1 - classic 2 - portfolio account
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name API key name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets perms
     *
     * @return \GateApi\Model\SubAccountKeyPerms[]|null
     */
    public function getPerms()
    {
        return $this->container['perms'];
    }

    /**
     * Sets perms
     *
     * @param \GateApi\Model\SubAccountKeyPerms[]|null $perms perms
     *
     * @return $this
     */
    public function setPerms($perms)
    {
        $this->container['perms'] = $perms;

        return $this;
    }

    /**
     * Gets ip_whitelist
     *
     * @return string[]|null
     */
    public function getIpWhitelist()
    {
        return $this->container['ip_whitelist'];
    }

    /**
     * Sets ip_whitelist
     *
     * @param string[]|null $ip_whitelist ip white list (list will be removed if no value is passed)
     *
     * @return $this
     */
    public function setIpWhitelist($ip_whitelist)
    {
        $this->container['ip_whitelist'] = $ip_whitelist;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key API Key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int|null $state State 1 - normal 2 - locked 3 - frozen
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int|null $created_at Creation time
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
     * @return int|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param int|null $updated_at Last update time
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets last_access
     *
     * @return int|null
     */
    public function getLastAccess()
    {
        return $this->container['last_access'];
    }

    /**
     * Sets last_access
     *
     * @param int|null $last_access Last access time
     *
     * @return $this
     */
    public function setLastAccess($last_access)
    {
        $this->container['last_access'] = $last_access;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


