# Swagger\Client\AssetApi

All URIs are relative to *https://dam.vaf.be*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asset**](AssetApi.md#asset) | **GET** /api/asset/{id} | Get Asset
[**createAsset**](AssetApi.md#createAsset) | **POST** /api/asset | Create an asset
[**getSignedImageRenditionUrls**](AssetApi.md#getSignedImageRenditionUrls) | **GET** /api/asset/{ids}/signed-image-rendition-url | Get a signed URL for image renditions.
[**getSignedOriginalUrls**](AssetApi.md#getSignedOriginalUrls) | **GET** /api/asset/{ids}/signed-original-url | Get a signed URL for original assets.
[**getSignedPreviewUrls**](AssetApi.md#getSignedPreviewUrls) | **GET** /api/asset/{ids}/signed-preview-url | Get a signed URL for asset previews.
[**getSignedThumbnailUrls**](AssetApi.md#getSignedThumbnailUrls) | **GET** /api/asset/{ids}/signed-thumbnail-url | Get a signed URL for asset thumbnails.
[**original**](AssetApi.md#original) | **GET** /api/asset/{id}/original | Download Asset Original
[**preview**](AssetApi.md#preview) | **GET** /api/asset/{id}/preview | Download Asset Preview
[**putOriginal**](AssetApi.md#putOriginal) | **PUT** /api/asset/{id}/original | Upload a file for an asset using PUT.
[**search**](AssetApi.md#search) | **GET** /api/asset/search | Search Assets
[**thumbnail**](AssetApi.md#thumbnail) | **GET** /api/asset/{id}/thumbnail | Download Asset Thumbnail
[**uploadOriginal**](AssetApi.md#uploadOriginal) | **POST** /api/asset/{id}/original | Upload a file for an asset using multi-part POST.


# **asset**
> \Swagger\Client\Model\HitElement asset($id)

Get Asset

Get the specific asset with the matching identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Asset identifier

try {
    $result = $apiInstance->asset($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->asset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Asset identifier |

### Return type

[**\Swagger\Client\Model\HitElement**](../Model/HitElement.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAsset**
> \Swagger\Client\Model\CreateAssetResponse createAsset($body)

Create an asset

This creates an asset \"placeholder\", files can subsequently be uploaded to the url returned in the uploadUrl property using a PUT.<br />Using curl, for example, a file can be uploaded to the uploadUrl as follows: <br /><br /><pre>curl --upload-file filename.jpg $uploadUrl</pre><br /><br /><p>When autoRename is set to false and the asset already exists, the server returns a 409 Conflict response with information about the existing asset and uploadUrl=null.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateAssetRequest(); // \Swagger\Client\Model\CreateAssetRequest | body

try {
    $result = $apiInstance->createAsset($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->createAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateAssetRequest**](../Model/CreateAssetRequest.md)| body |

### Return type

[**\Swagger\Client\Model\CreateAssetResponse**](../Model/CreateAssetResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignedImageRenditionUrls**
> \Swagger\Client\Model\SignedAssetUrl[] getSignedImageRenditionUrls($ids, $valid_for, $format, $scale, $max_width, $max_height, $ppi, $embed_metadata, $embed_color_profile, $compression, $quality, $watermarked, $background, $crop_width, $crop_height, $crop_offset_x, $crop_offset_y)

Get a signed URL for image renditions.

Get a signed URL for image renditions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | Comma separated list of asset id's
$valid_for = 600; // int | Amount of minutes the url is valid, specify -1 to obtain a url which is valid forever
$format = "format_example"; // string | Requested image rendition format. Valid values are jpg, png or tiff
$scale = 1.2; // double | Scales the width and height of the rendition relative to the original size. The scale is in percentages from 1 to 100. If used in combination with maxWidth or maxHeight the image will be scaled with a maximum size.
$max_width = 56; // int | Sets the maximum width of the preview. The aspect ratio will always remain the same. If the original asset fits within the supplied dimensions, the original width and height will be used for generating the rendition.
$max_height = 56; // int | Sets the maximum height of the preview. The aspect ratio will always remain the same. If the original asset fits within the supplied dimensions, the original width and height will be used for generating the rendition.
$ppi = 56; // int | The pixels per inch / dots per inch can be set to any desired value. When not set, the original PPI / DPI value of the asset will be used.
$embed_metadata = true; // bool | When set to true, the metadata embedded in the original asset will be embedded in the generated rendition. Note that for certain file types the embedding of metadata is not supported, for example for PNG files. By default the original metadata is not embedded.
$embed_color_profile = true; // bool | When set to true, the color profile that is used to generate the rendition is included.
$compression = "compression_example"; // string | TIFF Compression type, applicable when format='tif'. Allowed values: uncompressed, packBits, LZW, ZIP and JPEG.
$quality = 56; // int | JPEG compression, applicable when format='jpg'. The quality is defined a value from 1 to 100.
$watermarked = true; // bool | When set to true, a watermark is applied to the rendition. Note: a watermark needs to be configured in the server configuration.
$background = "background_example"; // string | Sets the background color (hex color code) for transparent images. If not specified, the output of PNG and TIFF images will be transparent.
$crop_width = 56; // int | Sets the width (in pixels) to which the image should be cropped.
$crop_height = 56; // int | Sets the height (in pixels) to which the image should be cropped.
$crop_offset_x = 56; // int | Sets the crop x offset in pixels (from the top left corner).
$crop_offset_y = 56; // int | Sets the crop y offset in pixels (from the top left corner).

try {
    $result = $apiInstance->getSignedImageRenditionUrls($ids, $valid_for, $format, $scale, $max_width, $max_height, $ppi, $embed_metadata, $embed_color_profile, $compression, $quality, $watermarked, $background, $crop_width, $crop_height, $crop_offset_x, $crop_offset_y);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getSignedImageRenditionUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| Comma separated list of asset id&#39;s |
 **valid_for** | **int**| Amount of minutes the url is valid, specify -1 to obtain a url which is valid forever | [optional] [default to 600]
 **format** | **string**| Requested image rendition format. Valid values are jpg, png or tiff | [optional]
 **scale** | **double**| Scales the width and height of the rendition relative to the original size. The scale is in percentages from 1 to 100. If used in combination with maxWidth or maxHeight the image will be scaled with a maximum size. | [optional]
 **max_width** | **int**| Sets the maximum width of the preview. The aspect ratio will always remain the same. If the original asset fits within the supplied dimensions, the original width and height will be used for generating the rendition. | [optional]
 **max_height** | **int**| Sets the maximum height of the preview. The aspect ratio will always remain the same. If the original asset fits within the supplied dimensions, the original width and height will be used for generating the rendition. | [optional]
 **ppi** | **int**| The pixels per inch / dots per inch can be set to any desired value. When not set, the original PPI / DPI value of the asset will be used. | [optional]
 **embed_metadata** | **bool**| When set to true, the metadata embedded in the original asset will be embedded in the generated rendition. Note that for certain file types the embedding of metadata is not supported, for example for PNG files. By default the original metadata is not embedded. | [optional]
 **embed_color_profile** | **bool**| When set to true, the color profile that is used to generate the rendition is included. | [optional]
 **compression** | **string**| TIFF Compression type, applicable when format&#x3D;&#39;tif&#39;. Allowed values: uncompressed, packBits, LZW, ZIP and JPEG. | [optional]
 **quality** | **int**| JPEG compression, applicable when format&#x3D;&#39;jpg&#39;. The quality is defined a value from 1 to 100. | [optional]
 **watermarked** | **bool**| When set to true, a watermark is applied to the rendition. Note: a watermark needs to be configured in the server configuration. | [optional]
 **background** | **string**| Sets the background color (hex color code) for transparent images. If not specified, the output of PNG and TIFF images will be transparent. | [optional]
 **crop_width** | **int**| Sets the width (in pixels) to which the image should be cropped. | [optional]
 **crop_height** | **int**| Sets the height (in pixels) to which the image should be cropped. | [optional]
 **crop_offset_x** | **int**| Sets the crop x offset in pixels (from the top left corner). | [optional]
 **crop_offset_y** | **int**| Sets the crop y offset in pixels (from the top left corner). | [optional]

### Return type

[**\Swagger\Client\Model\SignedAssetUrl[]**](../Model/SignedAssetUrl.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignedOriginalUrls**
> \Swagger\Client\Model\SignedAssetUrl[] getSignedOriginalUrls($ids, $valid_for)

Get a signed URL for original assets.

Get a signed URL for original assets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | Comma separated list of asset id's
$valid_for = 600; // int | Amount of seconds the url is valid, specify -1 to obtain a url which is valid forever

try {
    $result = $apiInstance->getSignedOriginalUrls($ids, $valid_for);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getSignedOriginalUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| Comma separated list of asset id&#39;s |
 **valid_for** | **int**| Amount of seconds the url is valid, specify -1 to obtain a url which is valid forever | [optional] [default to 600]

### Return type

[**\Swagger\Client\Model\SignedAssetUrl[]**](../Model/SignedAssetUrl.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignedPreviewUrls**
> \Swagger\Client\Model\SignedAssetUrl[] getSignedPreviewUrls($ids, $valid_for)

Get a signed URL for asset previews.

Get a signed URL for asset previews.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | Comma separated list of asset id's
$valid_for = 600; // int | Amount of seconds the url is valid, specify -1 to obtain a url which is valid forever

try {
    $result = $apiInstance->getSignedPreviewUrls($ids, $valid_for);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getSignedPreviewUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| Comma separated list of asset id&#39;s |
 **valid_for** | **int**| Amount of seconds the url is valid, specify -1 to obtain a url which is valid forever | [optional] [default to 600]

### Return type

[**\Swagger\Client\Model\SignedAssetUrl[]**](../Model/SignedAssetUrl.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignedThumbnailUrls**
> \Swagger\Client\Model\SignedAssetUrl[] getSignedThumbnailUrls($ids, $valid_for)

Get a signed URL for asset thumbnails.

Get a signed URL for asset thumbnails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | Comma separated list of asset id's
$valid_for = 600; // int | Amount of seconds the url is valid, specify -1 to obtain a url which is valid forever

try {
    $result = $apiInstance->getSignedThumbnailUrls($ids, $valid_for);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getSignedThumbnailUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| Comma separated list of asset id&#39;s |
 **valid_for** | **int**| Amount of seconds the url is valid, specify -1 to obtain a url which is valid forever | [optional] [default to 600]

### Return type

[**\Swagger\Client\Model\SignedAssetUrl[]**](../Model/SignedAssetUrl.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **original**
> \SplFileObject original($id)

Download Asset Original

Download the asset's original file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Asset identifier

try {
    $result = $apiInstance->original($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->original: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Asset identifier |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preview**
> \SplFileObject preview($id)

Download Asset Preview

Download the asset's preview file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Asset identifier

try {
    $result = $apiInstance->preview($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->preview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Asset identifier |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOriginal**
> \Swagger\Client\Model\HitElement putOriginal($id, $create_version, $file)

Upload a file for an asset using PUT.

Upload a file for an asset placeholder or replace an existing asset's original, possibly creating a new version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id
$create_version = true; // bool | createVersion
$file = new \stdClass; // object | 

try {
    $result = $apiInstance->putOriginal($id, $create_version, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->putOriginal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **create_version** | **bool**| createVersion | [optional] [default to true]
 **file** | **object**|  | [optional]

### Return type

[**\Swagger\Client\Model\HitElement**](../Model/HitElement.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Swagger\Client\Model\SearchResponse search($q, $from, $size)

Search Assets

Search for specific asset(s) that match the given q parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | The search query.
$from = 0; // int | The offset from the first result you want to fetch.
$size = 10; // int | The maximum amount of hits to be returned.

try {
    $result = $apiInstance->search($q, $from, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| The search query. | [optional]
 **from** | **int**| The offset from the first result you want to fetch. | [optional] [default to 0]
 **size** | **int**| The maximum amount of hits to be returned. | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **thumbnail**
> \SplFileObject thumbnail($id)

Download Asset Thumbnail

Download the asset's thumbnail file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Asset identifier

try {
    $result = $apiInstance->thumbnail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->thumbnail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Asset identifier |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadOriginal**
> \Swagger\Client\Model\HitElement uploadOriginal($id, $file, $create_version)

Upload a file for an asset using multi-part POST.

Upload a file for an asset placeholder or replace an existing asset's original, possibly creating a new version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id
$file = "/path/to/file.txt"; // \SplFileObject | file
$create_version = true; // bool | createVersion

try {
    $result = $apiInstance->uploadOriginal($id, $file, $create_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->uploadOriginal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **file** | **\SplFileObject**| file |
 **create_version** | **bool**| createVersion | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\HitElement**](../Model/HitElement.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

