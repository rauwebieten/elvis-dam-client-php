<?php
/**
 * SignedAssetUrl
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Elvis REST API
 *
 * <h3>BETA NOTICE</h3> <div class=\"beta-notice\">This API is still in development. All API methods are functional, they are however subject to change in future Elvis versions.</div> <h3>Intro</h3> <div class=\"intro\">The Elvis REST API allows you to customize and integrate external applications with Elvis. Some examples of what you can do with the API:</div> <ul><li>Search assets.</li> <li>Download assets, previews, or other renditions.</li>  <li>Upload new assets.</li>  <li>Change asset metadata.</li>  <li>Search, create, rename and delete folders.</li>  <li>Create Shared Links.</li>  </ul><h3>Try out API methods</h3> On this page, you can try out new API methods. Before you can try them out, authorization is required. There is no authorization method in this API (yet), this means we will use the old API auth method:<br/><br/> 1. Authenticate using <span class=\"inline-code\">/services/apilogin</span> For example:<br/><br/> <pre>curl -X POST http://localhost:8080/services/apilogin -F username=admin -F password=changemenow</pre><br/> 2. Copy the authToken.<br/> 3. Click the Authorize button and use 'Bearer &lt;authToken&gt;' as value.<br/> 4. Click Authorize, the page is now authorized and you can try out the API methods.
 *
 * OpenAPI spec version: 3.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
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
 * SignedAssetUrl Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignedAssetUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignedAssetUrl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asset_id' => 'string',
        'signed_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asset_id' => null,
        'signed_url' => null
    ];

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
        'asset_id' => 'assetId',
        'signed_url' => 'signedUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_id' => 'setAssetId',
        'signed_url' => 'setSignedUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_id' => 'getAssetId',
        'signed_url' => 'getSignedUrl'
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
        $this->container['asset_id'] = isset($data['asset_id']) ? $data['asset_id'] : null;
        $this->container['signed_url'] = isset($data['signed_url']) ? $data['signed_url'] : null;
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
     * Gets asset_id
     *
     * @return string
     */
    public function getAssetId()
    {
        return $this->container['asset_id'];
    }

    /**
     * Sets asset_id
     *
     * @param string $asset_id asset_id
     *
     * @return $this
     */
    public function setAssetId($asset_id)
    {
        $this->container['asset_id'] = $asset_id;

        return $this;
    }

    /**
     * Gets signed_url
     *
     * @return string
     */
    public function getSignedUrl()
    {
        return $this->container['signed_url'];
    }

    /**
     * Sets signed_url
     *
     * @param string $signed_url signed_url
     *
     * @return $this
     */
    public function setSignedUrl($signed_url)
    {
        $this->container['signed_url'] = $signed_url;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


