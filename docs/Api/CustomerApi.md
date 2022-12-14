# Swagger\Client\CustomerApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersAutocompleteGet**](CustomerApi.md#customersautocompleteget) | **GET** /customers/autocomplete | Returns a paginated list of customers for autocomplete query
[**customersGet**](CustomerApi.md#customersget) | **GET** /customers | Returns a paginated list of customers
[**customersIdDelete**](CustomerApi.md#customersiddelete) | **DELETE** /customers/{id} | Deletes a Customer by ID
[**customersIdGet**](CustomerApi.md#customersidget) | **GET** /customers/{id} | Retrieves a Customer by ID
[**customersIdPut**](CustomerApi.md#customersidput) | **PUT** /customers/{id} | Updates an existing Customer by ID
[**customersLatestGet**](CustomerApi.md#customerslatestget) | **GET** /customers/latest | Returns latest Customer
[**customersPost**](CustomerApi.md#customerspost) | **POST** /customers | Creates a Customer

# **customersAutocompleteGet**
> customersAutocompleteGet($query)

Returns a paginated list of customers for autocomplete query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Search query

try {
    $apiInstance->customersAutocompleteGet($query);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersAutocompleteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Search query | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersGet**
> customersGet($sort, $query, $firstname, $lastname, $business_name, $id, $not_id, $email, $include_disabled, $page)

Returns a paginated list of customers

Required permission: Customers - List/Search Single-Customer Users can only access own customer (self).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = "sort_example"; // string | A customer field to order by. Examples \"firstname ASC\", \"city DESC\".
$query = "query_example"; // string | Search query
$firstname = "firstname_example"; // string | Any customers with a first name like the parameter
$lastname = "lastname_example"; // string | Any customers with a last name like the parameter
$business_name = "business_name_example"; // string | Any customers with a business name like the parameter
$id = array(56); // int[] | Any customers with ID included in the list
$not_id = array(56); // int[] | Any customers with ID not included in the list
$email = "email_example"; // string | 
$include_disabled = "false"; // string | Whether or not the returned list of customers includes disabled customers
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->customersGet($sort, $query, $firstname, $lastname, $business_name, $id, $not_id, $email, $include_disabled, $page);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| A customer field to order by. Examples \&quot;firstname ASC\&quot;, \&quot;city DESC\&quot;. | [optional]
 **query** | **string**| Search query | [optional]
 **firstname** | **string**| Any customers with a first name like the parameter | [optional]
 **lastname** | **string**| Any customers with a last name like the parameter | [optional]
 **business_name** | **string**| Any customers with a business name like the parameter | [optional]
 **id** | [**int[]**](../Model/int.md)| Any customers with ID included in the list | [optional]
 **not_id** | [**int[]**](../Model/int.md)| Any customers with ID not included in the list | [optional]
 **email** | **string**|  | [optional]
 **include_disabled** | **string**| Whether or not the returned list of customers includes disabled customers | [optional] [default to false]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdDelete**
> customersIdDelete($id)

Deletes a Customer by ID

Required permission: Customers - Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->customersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **customersIdGet**
> customersIdGet($id)

Retrieves a Customer by ID

Required permission: Customers - View Detail Single-Customer Users can only access own customer (self).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->customersIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdGet: ', $e->getMessage(), PHP_EOL;
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

# **customersIdPut**
> customersIdPut($id, $body)

Updates an existing Customer by ID

Required permission: Customers - Edit Single-Customer Users can only access own customer (self).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $apiInstance->customersIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersLatestGet**
> customersLatestGet()

Returns latest Customer

Required permission: Customers - Edit Single-Customer Users can only access own customer (self).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->customersLatestGet();
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersLatestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersPost**
> customersPost($body)

Creates a Customer

Required permission: Customers - Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 

try {
    $apiInstance->customersPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

