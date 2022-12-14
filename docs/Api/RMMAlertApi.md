# Swagger\Client\RMMAlertApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmmAlertsGet**](RMMAlertApi.md#rmmalertsget) | **GET** /rmm_alerts | Returns a paginated list of RMM Alerts
[**rmmAlertsIdDelete**](RMMAlertApi.md#rmmalertsiddelete) | **DELETE** /rmm_alerts/{id} | Deletes/Clears an RMM Alert by ID
[**rmmAlertsIdGet**](RMMAlertApi.md#rmmalertsidget) | **GET** /rmm_alerts/{id} | Retrieves an RMM Alert by ID
[**rmmAlertsIdMutePost**](RMMAlertApi.md#rmmalertsidmutepost) | **POST** /rmm_alerts/{id}/mute | Mutes an RMM Alert by ID
[**rmmAlertsPost**](RMMAlertApi.md#rmmalertspost) | **POST** /rmm_alerts | Creates an RMM Alert

# **rmmAlertsGet**
> rmmAlertsGet($status, $page)

Returns a paginated list of RMM Alerts

Required permission: RMM Alerts - List Single-Customer Users can only access own RMM Alerts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RMMAlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "active"; // string | Possible values resolved, all, active.
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->rmmAlertsGet($status, $page);
} catch (Exception $e) {
    echo 'Exception when calling RMMAlertApi->rmmAlertsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Possible values resolved, all, active. | [optional] [default to active]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmmAlertsIdDelete**
> rmmAlertsIdDelete($id)

Deletes/Clears an RMM Alert by ID

Required permission: RMM Alerts - Delete Single-Customer Users can only access own RMM Alerts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RMMAlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->rmmAlertsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RMMAlertApi->rmmAlertsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmmAlertsIdGet**
> rmmAlertsIdGet($id)

Retrieves an RMM Alert by ID

Required permission: RMM Alerts - List Single-Customer Users can only access own RMM Alerts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RMMAlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->rmmAlertsIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling RMMAlertApi->rmmAlertsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmmAlertsIdMutePost**
> rmmAlertsIdMutePost($id, $mute_for)

Mutes an RMM Alert by ID

Required permission: RMM Alerts - Clear/Manage Single-Customer Users can only access own RMM Alerts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RMMAlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$mute_for = "mute_for_example"; // string | Length of time to mute alert for. Accepted values: '1-hour', '1-day', '2-days', '1-week', '2-weeks', '1-month', 'forever'

try {
    $apiInstance->rmmAlertsIdMutePost($id, $mute_for);
} catch (Exception $e) {
    echo 'Exception when calling RMMAlertApi->rmmAlertsIdMutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **mute_for** | **string**| Length of time to mute alert for. Accepted values: &#x27;1-hour&#x27;, &#x27;1-day&#x27;, &#x27;2-days&#x27;, &#x27;1-week&#x27;, &#x27;2-weeks&#x27;, &#x27;1-month&#x27;, &#x27;forever&#x27; |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmmAlertsPost**
> rmmAlertsPost($body)

Creates an RMM Alert

Required permission: RMM Alerts - Create Single-Customer Users can only access own RMM Alerts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RMMAlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RmmAlertsBody(); // \Swagger\Client\Model\RmmAlertsBody | 

try {
    $apiInstance->rmmAlertsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling RMMAlertApi->rmmAlertsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RmmAlertsBody**](../Model/RmmAlertsBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

