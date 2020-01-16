<?php
/**
 * FolderApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * FolderApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FolderApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for createFolder
     *
     * Create a folder.
     *
     */
    public function testCreateFolder()
    {
    }

    /**
     * Test case for deleteFolder
     *
     * Delete a folder.
     *
     */
    public function testDeleteFolder()
    {
    }

    /**
     * Test case for getFolder
     *
     * Get a folder.
     *
     */
    public function testGetFolder()
    {
    }

    /**
     * Test case for getFolderByPath
     *
     * Get a folder.
     *
     */
    public function testGetFolderByPath()
    {
    }

    /**
     * Test case for listFolders
     *
     * List folders.
     *
     */
    public function testListFolders()
    {
    }

    /**
     * Test case for searchFolders
     *
     * Search folders.
     *
     */
    public function testSearchFolders()
    {
    }

    /**
     * Test case for updateFolderMetadata
     *
     * Update folder metadata.
     *
     */
    public function testUpdateFolderMetadata()
    {
    }
}
