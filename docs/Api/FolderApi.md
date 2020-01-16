# Swagger\Client\FolderApi

All URIs are relative to *https://dam.vaf.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFolder**](FolderApi.md#createFolder) | **POST** /api/folder | Create a folder
[**deleteFolder**](FolderApi.md#deleteFolder) | **DELETE** /api/folder/{id} | Delete a folder
[**getFolder**](FolderApi.md#getFolder) | **GET** /api/folder/{id} | Get a folder
[**getFolderByPath**](FolderApi.md#getFolderByPath) | **GET** /api/folder/get | Get a folder
[**listFolders**](FolderApi.md#listFolders) | **GET** /api/folder/list | List folders
[**searchFolders**](FolderApi.md#searchFolders) | **GET** /api/folder/search | Search folders
[**updateFolderMetadata**](FolderApi.md#updateFolderMetadata) | **PUT** /api/folder/{id} | Update folder metadata


# **createFolder**
> \Swagger\Client\Model\ApiFolder createFolder($request)

Create a folder

Create a new folder, optionally with metadata. The folder path may contain multiple levels of non-existing folders, these will be created as well. Provided metadata will only be applied to the deepest folder level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CreateFolderRequest(); // \Swagger\Client\Model\CreateFolderRequest | request

try {
    $result = $apiInstance->createFolder($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreateFolderRequest**](../Model/CreateFolderRequest.md)| request |

### Return type

[**\Swagger\Client\Model\ApiFolder**](../Model/ApiFolder.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolder**
> deleteFolder($id)

Delete a folder

Delete a folder by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Folder identifier

try {
    $apiInstance->deleteFolder($id);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Folder identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolder**
> \Swagger\Client\Model\ApiFolder getFolder($id)

Get a folder

Get a folder by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Folder identifier

try {
    $result = $apiInstance->getFolder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Folder identifier |

### Return type

[**\Swagger\Client\Model\ApiFolder**](../Model/ApiFolder.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolderByPath**
> \Swagger\Client\Model\ApiFolder getFolderByPath($path)

Get a folder

Get a folder by path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = "path_example"; // string | Folder path.

try {
    $result = $apiInstance->getFolderByPath($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->getFolderByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path. | [optional]

### Return type

[**\Swagger\Client\Model\ApiFolder**](../Model/ApiFolder.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFolders**
> \Swagger\Client\Model\FolderSearchResponse listFolders($id, $from, $size, $metadata_to_return)

List folders

List sub-folders for a given folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Folder identifier.
$from = 0; // int | The offset from the first result you want to fetch.
$size = 10; // int | The maximum amount of hits to be returned.
$metadata_to_return = "all"; // string | Metadata fields to return for folders. Specify 'all' to return all available metadata. Specify 'none' to return no metadata.

try {
    $result = $apiInstance->listFolders($id, $from, $size, $metadata_to_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->listFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Folder identifier. | [optional]
 **from** | **int**| The offset from the first result you want to fetch. | [optional] [default to 0]
 **size** | **int**| The maximum amount of hits to be returned. | [optional] [default to 10]
 **metadata_to_return** | **string**| Metadata fields to return for folders. Specify &#39;all&#39; to return all available metadata. Specify &#39;none&#39; to return no metadata. | [optional] [default to all]

### Return type

[**\Swagger\Client\Model\FolderSearchResponse**](../Model/FolderSearchResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchFolders**
> \Swagger\Client\Model\FolderSearchResponse searchFolders($q, $from, $size, $metadata_to_return)

Search folders

Search folders by metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Folder query.
$from = 0; // int | The offset from the first result you want to fetch.
$size = 10; // int | The maximum amount of hits to be returned.
$metadata_to_return = "all"; // string | Metadata fields to return for folders. Specify 'all' to return all available metadata. Specify 'none' to return no metadata.

try {
    $result = $apiInstance->searchFolders($q, $from, $size, $metadata_to_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->searchFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Folder query. | [optional]
 **from** | **int**| The offset from the first result you want to fetch. | [optional] [default to 0]
 **size** | **int**| The maximum amount of hits to be returned. | [optional] [default to 10]
 **metadata_to_return** | **string**| Metadata fields to return for folders. Specify &#39;all&#39; to return all available metadata. Specify &#39;none&#39; to return no metadata. | [optional] [default to all]

### Return type

[**\Swagger\Client\Model\FolderSearchResponse**](../Model/FolderSearchResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFolderMetadata**
> \Swagger\Client\Model\ApiFolder updateFolderMetadata($id, $request)

Update folder metadata

Update the metadata of a given folder. Use the move operation to change the folder path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Folder identifier
$request = new \Swagger\Client\Model\UpdateFolderMetadataRequest(); // \Swagger\Client\Model\UpdateFolderMetadataRequest | request

try {
    $result = $apiInstance->updateFolderMetadata($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->updateFolderMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Folder identifier |
 **request** | [**\Swagger\Client\Model\UpdateFolderMetadataRequest**](../Model/UpdateFolderMetadataRequest.md)| request |

### Return type

[**\Swagger\Client\Model\ApiFolder**](../Model/ApiFolder.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

