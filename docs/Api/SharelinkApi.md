# Swagger\Client\SharelinkApi

All URIs are relative to *https://dam.vaf.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShareLink**](SharelinkApi.md#createShareLink) | **POST** /api/sharelink | Create a Share Link


# **createShareLink**
> \Swagger\Client\Model\CreateShareLinkResponse createShareLink($body)

Create a Share Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharelinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateShareLinkRequest(); // \Swagger\Client\Model\CreateShareLinkRequest | body

try {
    $result = $apiInstance->createShareLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharelinkApi->createShareLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateShareLinkRequest**](../Model/CreateShareLinkRequest.md)| body | [optional]

### Return type

[**\Swagger\Client\Model\CreateShareLinkResponse**](../Model/CreateShareLinkResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

