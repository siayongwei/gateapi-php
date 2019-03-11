<?php
/**
 * FuturesCandlestick
 *
 * PHP version 5
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * OpenAPI spec version: 4.5.1
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * FuturesCandlestick Class Doc Comment
 *
 * @category Class
 * @description data point in every timestamp
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FuturesCandlestick implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesCandlestick';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        't' => 'float',
        'v' => 'int',
        'c' => 'string',
        'h' => 'string',
        'l' => 'string',
        'o' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        't' => null,
        'v' => 'int64',
        'c' => null,
        'h' => null,
        'l' => null,
        'o' => null
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
        't' => 't',
        'v' => 'v',
        'c' => 'c',
        'h' => 'h',
        'l' => 'l',
        'o' => 'o'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        't' => 'setT',
        'v' => 'setV',
        'c' => 'setC',
        'h' => 'setH',
        'l' => 'setL',
        'o' => 'setO'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        't' => 'getT',
        'v' => 'getV',
        'c' => 'getC',
        'h' => 'getH',
        'l' => 'getL',
        'o' => 'getO'
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
        $this->container['t'] = isset($data['t']) ? $data['t'] : null;
        $this->container['v'] = isset($data['v']) ? $data['v'] : null;
        $this->container['c'] = isset($data['c']) ? $data['c'] : null;
        $this->container['h'] = isset($data['h']) ? $data['h'] : null;
        $this->container['l'] = isset($data['l']) ? $data['l'] : null;
        $this->container['o'] = isset($data['o']) ? $data['o'] : null;
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
     * Gets t
     *
     * @return float|null
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param float|null $t Unix timestamp in seconds
     *
     * @return $this
     */
    public function setT($t)
    {
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets v
     *
     * @return int|null
     */
    public function getV()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param int|null $v size volume. Only returned if `contract` is not prefixed
     *
     * @return $this
     */
    public function setV($v)
    {
        $this->container['v'] = $v;

        return $this;
    }

    /**
     * Gets c
     *
     * @return string|null
     */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
     * Sets c
     *
     * @param string|null $c Close price
     *
     * @return $this
     */
    public function setC($c)
    {
        $this->container['c'] = $c;

        return $this;
    }

    /**
     * Gets h
     *
     * @return string|null
     */
    public function getH()
    {
        return $this->container['h'];
    }

    /**
     * Sets h
     *
     * @param string|null $h Highest price
     *
     * @return $this
     */
    public function setH($h)
    {
        $this->container['h'] = $h;

        return $this;
    }

    /**
     * Gets l
     *
     * @return string|null
     */
    public function getL()
    {
        return $this->container['l'];
    }

    /**
     * Sets l
     *
     * @param string|null $l Lowest price
     *
     * @return $this
     */
    public function setL($l)
    {
        $this->container['l'] = $l;

        return $this;
    }

    /**
     * Gets o
     *
     * @return string|null
     */
    public function getO()
    {
        return $this->container['o'];
    }

    /**
     * Sets o
     *
     * @param string|null $o Open price
     *
     * @return $this
     */
    public function setO($o)
    {
        $this->container['o'] = $o;

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
}


