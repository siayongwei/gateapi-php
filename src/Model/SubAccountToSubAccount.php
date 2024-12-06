<?php
/**
 * SubAccountToSubAccount
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
 * SubAccountToSubAccount Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class SubAccountToSubAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubAccountToSubAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => 'string',
        'sub_account_type' => 'string',
        'sub_account_from' => 'string',
        'sub_account_from_type' => 'string',
        'sub_account_to' => 'string',
        'sub_account_to_type' => 'string',
        'amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'sub_account_type' => null,
        'sub_account_from' => null,
        'sub_account_from_type' => null,
        'sub_account_to' => null,
        'sub_account_to_type' => null,
        'amount' => null
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
        'currency' => 'currency',
        'sub_account_type' => 'sub_account_type',
        'sub_account_from' => 'sub_account_from',
        'sub_account_from_type' => 'sub_account_from_type',
        'sub_account_to' => 'sub_account_to',
        'sub_account_to_type' => 'sub_account_to_type',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'sub_account_type' => 'setSubAccountType',
        'sub_account_from' => 'setSubAccountFrom',
        'sub_account_from_type' => 'setSubAccountFromType',
        'sub_account_to' => 'setSubAccountTo',
        'sub_account_to_type' => 'setSubAccountToType',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'sub_account_type' => 'getSubAccountType',
        'sub_account_from' => 'getSubAccountFrom',
        'sub_account_from_type' => 'getSubAccountFromType',
        'sub_account_to' => 'getSubAccountTo',
        'sub_account_to_type' => 'getSubAccountToType',
        'amount' => 'getAmount'
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['sub_account_type'] = isset($data['sub_account_type']) ? $data['sub_account_type'] : null;
        $this->container['sub_account_from'] = isset($data['sub_account_from']) ? $data['sub_account_from'] : null;
        $this->container['sub_account_from_type'] = isset($data['sub_account_from_type']) ? $data['sub_account_from_type'] : null;
        $this->container['sub_account_to'] = isset($data['sub_account_to']) ? $data['sub_account_to'] : null;
        $this->container['sub_account_to_type'] = isset($data['sub_account_to_type']) ? $data['sub_account_to_type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['sub_account_from'] === null) {
            $invalidProperties[] = "'sub_account_from' can't be null";
        }
        if ($this->container['sub_account_from_type'] === null) {
            $invalidProperties[] = "'sub_account_from_type' can't be null";
        }
        if ($this->container['sub_account_to'] === null) {
            $invalidProperties[] = "'sub_account_to' can't be null";
        }
        if ($this->container['sub_account_to_type'] === null) {
            $invalidProperties[] = "'sub_account_to_type' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Transfer currency name
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets sub_account_type
     *
     * @return string|null
     */
    public function getSubAccountType()
    {
        return $this->container['sub_account_type'];
    }

    /**
     * Sets sub_account_type
     *
     * @param string|null $sub_account_type Transfer from the account. (deprecate, use `sub_account_from_type` and `sub_account_to_type` instead)
     *
     * @return $this
     */
    public function setSubAccountType($sub_account_type)
    {
        $this->container['sub_account_type'] = $sub_account_type;

        return $this;
    }

    /**
     * Gets sub_account_from
     *
     * @return string
     */
    public function getSubAccountFrom()
    {
        return $this->container['sub_account_from'];
    }

    /**
     * Sets sub_account_from
     *
     * @param string $sub_account_from Transfer from the user id of the sub-account
     *
     * @return $this
     */
    public function setSubAccountFrom($sub_account_from)
    {
        $this->container['sub_account_from'] = $sub_account_from;

        return $this;
    }

    /**
     * Gets sub_account_from_type
     *
     * @return string
     */
    public function getSubAccountFromType()
    {
        return $this->container['sub_account_from_type'];
    }

    /**
     * Sets sub_account_from_type
     *
     * @param string $sub_account_from_type The sub-account's outgoing trading account, spot - spot account, futures - perpetual contract account, delivery - delivery contract account.
     *
     * @return $this
     */
    public function setSubAccountFromType($sub_account_from_type)
    {
        $this->container['sub_account_from_type'] = $sub_account_from_type;

        return $this;
    }

    /**
     * Gets sub_account_to
     *
     * @return string
     */
    public function getSubAccountTo()
    {
        return $this->container['sub_account_to'];
    }

    /**
     * Sets sub_account_to
     *
     * @param string $sub_account_to Transfer to the user id of the sub-account
     *
     * @return $this
     */
    public function setSubAccountTo($sub_account_to)
    {
        $this->container['sub_account_to'] = $sub_account_to;

        return $this;
    }

    /**
     * Gets sub_account_to_type
     *
     * @return string
     */
    public function getSubAccountToType()
    {
        return $this->container['sub_account_to_type'];
    }

    /**
     * Sets sub_account_to_type
     *
     * @param string $sub_account_to_type The sub-account's incoming trading account, spot - spot account, futures - perpetual contract account, delivery - delivery contract account
     *
     * @return $this
     */
    public function setSubAccountToType($sub_account_to_type)
    {
        $this->container['sub_account_to_type'] = $sub_account_to_type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Transfer amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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


