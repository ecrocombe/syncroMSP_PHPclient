# VereTech\SyncroMSP_PHPclient\Client\PaymentProfileApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCustomerIdPaymentProfilesGet**](PaymentProfileApi.md#customerscustomeridpaymentprofilesget) | **GET** /customers/{customer_id}/payment_profiles | Returns a paginated list of Payment Profiles
[**customersCustomerIdPaymentProfilesIdDelete**](PaymentProfileApi.md#customerscustomeridpaymentprofilesiddelete) | **DELETE** /customers/{customer_id}/payment_profiles/{id} | Deletes a Payment Profile
[**customersCustomerIdPaymentProfilesIdGet**](PaymentProfileApi.md#customerscustomeridpaymentprofilesidget) | **GET** /customers/{customer_id}/payment_profiles/{id} | Retrieves a Payment Profile by ID
[**customersCustomerIdPaymentProfilesIdPut**](PaymentProfileApi.md#customerscustomeridpaymentprofilesidput) | **PUT** /customers/{customer_id}/payment_profiles/{id} | Updates a Payment Profile
[**customersCustomerIdPaymentProfilesPost**](PaymentProfileApi.md#customerscustomeridpaymentprofilespost) | **POST** /customers/{customer_id}/payment_profiles | Creates a Payment Profile

# **customersCustomerIdPaymentProfilesGet**
> customersCustomerIdPaymentProfilesGet($customer_id)

Returns a paginated list of Payment Profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\PaymentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | 

try {
    $apiInstance->customersCustomerIdPaymentProfilesGet($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProfileApi->customersCustomerIdPaymentProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPaymentProfilesIdDelete**
> customersCustomerIdPaymentProfilesIdDelete($customer_id, $id)

Deletes a Payment Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\PaymentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | 
$id = 56; // int | 

try {
    $apiInstance->customersCustomerIdPaymentProfilesIdDelete($customer_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProfileApi->customersCustomerIdPaymentProfilesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPaymentProfilesIdGet**
> customersCustomerIdPaymentProfilesIdGet($customer_id, $id)

Retrieves a Payment Profile by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\PaymentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | 
$id = 56; // int | 

try {
    $apiInstance->customersCustomerIdPaymentProfilesIdGet($customer_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProfileApi->customersCustomerIdPaymentProfilesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPaymentProfilesIdPut**
> customersCustomerIdPaymentProfilesIdPut($customer_id, $id, $body)

Updates a Payment Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\PaymentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | 
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\PaymentProfilesIdBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\PaymentProfilesIdBody | 

try {
    $apiInstance->customersCustomerIdPaymentProfilesIdPut($customer_id, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProfileApi->customersCustomerIdPaymentProfilesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\PaymentProfilesIdBody**](../Model/PaymentProfilesIdBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPaymentProfilesPost**
> customersCustomerIdPaymentProfilesPost($customer_id, $body)

Creates a Payment Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\PaymentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerIdPaymentProfilesBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerIdPaymentProfilesBody | 

try {
    $apiInstance->customersCustomerIdPaymentProfilesPost($customer_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProfileApi->customersCustomerIdPaymentProfilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\CustomerIdPaymentProfilesBody**](../Model/CustomerIdPaymentProfilesBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

