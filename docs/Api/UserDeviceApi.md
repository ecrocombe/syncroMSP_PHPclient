# VereTech\SyncroMSP_PHPclient\Client\UserDeviceApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userDevicesIdGet**](UserDeviceApi.md#userdevicesidget) | **GET** /user_devices/{id} | Retrieves an existing User Device by UUID
[**userDevicesIdPut**](UserDeviceApi.md#userdevicesidput) | **PUT** /user_devices/{id} | Updates an existing User Device by UUID
[**userDevicesPost**](UserDeviceApi.md#userdevicespost) | **POST** /user_devices | Creates a User Device

# **userDevicesIdGet**
> userDevicesIdGet($id)

Retrieves an existing User Device by UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\UserDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User Device UUID

try {
    $apiInstance->userDevicesIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling UserDeviceApi->userDevicesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User Device UUID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDevicesIdPut**
> userDevicesIdPut($id, $body)

Updates an existing User Device by UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\UserDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Device UUID
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\UserDevicesIdBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\UserDevicesIdBody | 

try {
    $apiInstance->userDevicesIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserDeviceApi->userDevicesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Device UUID |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\UserDevicesIdBody**](../Model/UserDevicesIdBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDevicesPost**
> userDevicesPost($body)

Creates a User Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\UserDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\UserDevicesBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\UserDevicesBody | 

try {
    $apiInstance->userDevicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UserDeviceApi->userDevicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\UserDevicesBody**](../Model/UserDevicesBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

