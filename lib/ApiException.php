<?php
/**
 * ApiException
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

namespace Swagger\Client;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiException extends Exception
{

    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var mixed
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var $responseObject;
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string        $message         Error message
     * @param int           $code            HTTP status code
     * @param string[]|null $responseHeaders HTTP response header
     * @param mixed         $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return mixed HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deseralized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deseralized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
