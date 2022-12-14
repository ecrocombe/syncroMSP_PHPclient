# Swagger\Client\AppointmentApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appointmentsGet**](AppointmentApi.md#appointmentsget) | **GET** /appointments | Returns a paginated list of Appointments
[**appointmentsIdDelete**](AppointmentApi.md#appointmentsiddelete) | **DELETE** /appointments/{id} | Deletes an Appointment by ID
[**appointmentsIdGet**](AppointmentApi.md#appointmentsidget) | **GET** /appointments/{id} | Retrieves an Appointment by ID
[**appointmentsIdPut**](AppointmentApi.md#appointmentsidput) | **PUT** /appointments/{id} | Updates an existing Appointment by ID
[**appointmentsPost**](AppointmentApi.md#appointmentspost) | **POST** /appointments | Creates an Appointment

# **appointmentsGet**
> appointmentsGet($date_from, $date_to, $mine, $page)

Returns a paginated list of Appointments

Required permission: Appointments - View All (see-own never restricted)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = new \DateTime("2013-10-20"); // \DateTime | Returns Appointments that start after the date. Example \"2019-01-25\"
$date_to = new \DateTime("2013-10-20"); // \DateTime | Returns Appointments that start before the date. Example \"2019-12-31\"
$mine = true; // bool | Return only current user's appointments
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->appointmentsGet($date_from, $date_to, $mine, $page);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **\DateTime**| Returns Appointments that start after the date. Example \&quot;2019-01-25\&quot; | [optional]
 **date_to** | **\DateTime**| Returns Appointments that start before the date. Example \&quot;2019-12-31\&quot; | [optional]
 **mine** | **bool**| Return only current user&#x27;s appointments | [optional]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentsIdDelete**
> appointmentsIdDelete($id)

Deletes an Appointment by ID

No special permissions required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->appointmentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentsIdDelete: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentsIdGet**
> \Swagger\Client\Model\InlineResponse200 appointmentsIdGet($id)

Retrieves an Appointment by ID

No special permissions required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->appointmentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentsIdPut**
> appointmentsIdPut($id, $body)

Updates an existing Appointment by ID

No special permissions required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\AppointmentsIdBody(); // \Swagger\Client\Model\AppointmentsIdBody | Appointment object that needs to be added

try {
    $apiInstance->appointmentsIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\AppointmentsIdBody**](../Model/AppointmentsIdBody.md)| Appointment object that needs to be added | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentsPost**
> appointmentsPost($body)

Creates an Appointment

No special permissions required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AppointmentsBody(); // \Swagger\Client\Model\AppointmentsBody | Appointment object that needs to be added

try {
    $apiInstance->appointmentsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AppointmentsBody**](../Model/AppointmentsBody.md)| Appointment object that needs to be added | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

