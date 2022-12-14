# Swagger\Client\AssetApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAssetsGet**](AssetApi.md#customerassetsget) | **GET** /customer_assets | Returns a paginated list of Assets
[**customerAssetsIdGet**](AssetApi.md#customerassetsidget) | **GET** /customer_assets/{id} | Retrieves an Asset by ID
[**customerAssetsIdPut**](AssetApi.md#customerassetsidput) | **PUT** /customer_assets/{id} | Updates an existing Asset by ID
[**customerAssetsPost**](AssetApi.md#customerassetspost) | **POST** /customer_assets | Creates an Asset

# **customerAssetsGet**
> customerAssetsGet($snmp_enabled, $customer_id, $asset_type_id, $query, $page)

Returns a paginated list of Assets

Required permission: Assets - List/Search Single-Customer Users can only access own assets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$snmp_enabled = true; // bool | Any assets with SNMP enabled
$customer_id = 56; // int | Any assets attached to a Customer ID
$asset_type_id = 56; // int | Any assets attached to an Asset Type ID
$query = "query_example"; // string | Search query
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->customerAssetsGet($snmp_enabled, $customer_id, $asset_type_id, $query, $page);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->customerAssetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **snmp_enabled** | **bool**| Any assets with SNMP enabled | [optional]
 **customer_id** | **int**| Any assets attached to a Customer ID | [optional]
 **asset_type_id** | **int**| Any assets attached to an Asset Type ID | [optional]
 **query** | **string**| Search query | [optional]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAssetsIdGet**
> \Swagger\Client\Model\InlineResponse2001 customerAssetsIdGet($id)

Retrieves an Asset by ID

Required permission: Assets - View Details Single-Customer Users can only access own assets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->customerAssetsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->customerAssetsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAssetsIdPut**
> \Swagger\Client\Model\InlineResponse2001 customerAssetsIdPut($id, $body)

Updates an existing Asset by ID

Required permission: Assets - Edit Single-Customer Users can only access own assets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\CustomerAssetsIdBody(); // \Swagger\Client\Model\CustomerAssetsIdBody | Asset object that needs to be updated

try {
    $result = $apiInstance->customerAssetsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->customerAssetsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\CustomerAssetsIdBody**](../Model/CustomerAssetsIdBody.md)| Asset object that needs to be updated | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAssetsPost**
> customerAssetsPost($body)

Creates an Asset

Required permission: Assets - Create Single-Customer Users can only access own assets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerAssetsBody(); // \Swagger\Client\Model\CustomerAssetsBody | Asset object that needs to be added

try {
    $apiInstance->customerAssetsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->customerAssetsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerAssetsBody**](../Model/CustomerAssetsBody.md)| Asset object that needs to be added | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

