<?php
/**
 * Variations
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MELI Markeplace SDK
 *
 * This is a the codebase to generate a SDK for Open Platform Marketplace
 *
 * The version of the OpenAPI document: 0.0.18
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Variations Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Variations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Variations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'price' => 'int',
        'attribute_combinations' => '\OpenAPI\Client\Model\VariationsAttributeCombinations[]',
        'available_quantity' => 'int',
        'sold_quantity' => 'int',
        'picture_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'price' => null,
        'attribute_combinations' => null,
        'available_quantity' => null,
        'sold_quantity' => null,
        'picture_ids' => null
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
        'price' => 'price',
        'attribute_combinations' => 'attribute_combinations',
        'available_quantity' => 'available_quantity',
        'sold_quantity' => 'sold_quantity',
        'picture_ids' => 'picture_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price' => 'setPrice',
        'attribute_combinations' => 'setAttributeCombinations',
        'available_quantity' => 'setAvailableQuantity',
        'sold_quantity' => 'setSoldQuantity',
        'picture_ids' => 'setPictureIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price' => 'getPrice',
        'attribute_combinations' => 'getAttributeCombinations',
        'available_quantity' => 'getAvailableQuantity',
        'sold_quantity' => 'getSoldQuantity',
        'picture_ids' => 'getPictureIds'
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
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['attribute_combinations'] = isset($data['attribute_combinations']) ? $data['attribute_combinations'] : null;
        $this->container['available_quantity'] = isset($data['available_quantity']) ? $data['available_quantity'] : null;
        $this->container['sold_quantity'] = isset($data['sold_quantity']) ? $data['sold_quantity'] : null;
        $this->container['picture_ids'] = isset($data['picture_ids']) ? $data['picture_ids'] : null;
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
     * Gets price
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int|null $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets attribute_combinations
     *
     * @return \OpenAPI\Client\Model\VariationsAttributeCombinations[]|null
     */
    public function getAttributeCombinations()
    {
        return $this->container['attribute_combinations'];
    }

    /**
     * Sets attribute_combinations
     *
     * @param \OpenAPI\Client\Model\VariationsAttributeCombinations[]|null $attribute_combinations attribute_combinations
     *
     * @return $this
     */
    public function setAttributeCombinations($attribute_combinations)
    {
        $this->container['attribute_combinations'] = $attribute_combinations;

        return $this;
    }

    /**
     * Gets available_quantity
     *
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int|null $available_quantity available_quantity
     *
     * @return $this
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets sold_quantity
     *
     * @return int|null
     */
    public function getSoldQuantity()
    {
        return $this->container['sold_quantity'];
    }

    /**
     * Sets sold_quantity
     *
     * @param int|null $sold_quantity sold_quantity
     *
     * @return $this
     */
    public function setSoldQuantity($sold_quantity)
    {
        $this->container['sold_quantity'] = $sold_quantity;

        return $this;
    }

    /**
     * Gets picture_ids
     *
     * @return string[]|null
     */
    public function getPictureIds()
    {
        return $this->container['picture_ids'];
    }

    /**
     * Sets picture_ids
     *
     * @param string[]|null $picture_ids picture_ids
     *
     * @return $this
     */
    public function setPictureIds($picture_ids)
    {
        $this->container['picture_ids'] = $picture_ids;

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


