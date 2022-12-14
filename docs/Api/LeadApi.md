# Swagger\Client\LeadApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsGet**](LeadApi.md#leadsget) | **GET** /leads | Returns a paginated list of Leads
[**leadsIdGet**](LeadApi.md#leadsidget) | **GET** /leads/{id} | Retrieves a Lead by ID
[**leadsIdPut**](LeadApi.md#leadsidput) | **PUT** /leads/{id} | Updates an existing Lead by ID
[**leadsPost**](LeadApi.md#leadspost) | **POST** /leads | Creates a Lead

# **leadsGet**
> leadsGet($statuses, $status_list, $users, $mailbox_ids, $has_ticket, $query, $page)

Returns a paginated list of Leads

Required permission: Leads - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statuses = array("statuses_example"); // string[] | Array of statuses. Possible values are \"New\", \"Lead\", \"First Contact\", \"Opportunity\", \"Prospect\", \"Waiting on Client\", \"In Negotiation\", \"Pending\", \"Won\", \"Lost\".
$status_list = "status_list_example"; // string | Comma separated list of statuses.
$users = array(56); // int[] | Array of user IDs.
$mailbox_ids = array(56); // int[] | Array of Mailbox IDs
$has_ticket = true; // bool | 
$query = "query_example"; // string | Search query
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->leadsGet($statuses, $status_list, $users, $mailbox_ids, $has_ticket, $query, $page);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statuses** | [**string[]**](../Model/string.md)| Array of statuses. Possible values are \&quot;New\&quot;, \&quot;Lead\&quot;, \&quot;First Contact\&quot;, \&quot;Opportunity\&quot;, \&quot;Prospect\&quot;, \&quot;Waiting on Client\&quot;, \&quot;In Negotiation\&quot;, \&quot;Pending\&quot;, \&quot;Won\&quot;, \&quot;Lost\&quot;. | [optional]
 **status_list** | **string**| Comma separated list of statuses. | [optional]
 **users** | [**int[]**](../Model/int.md)| Array of user IDs. | [optional]
 **mailbox_ids** | [**int[]**](../Model/int.md)| Array of Mailbox IDs | [optional]
 **has_ticket** | **bool**|  | [optional]
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

# **leadsIdGet**
> leadsIdGet($id)

Retrieves a Lead by ID

Required permission: Leads - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->leadsIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **leadsIdPut**
> leadsIdPut($id, $body)

Updates an existing Lead by ID

Required permission: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\LeadsIdBody(); // \Swagger\Client\Model\LeadsIdBody | Lead object that needs to be updated

try {
    $apiInstance->leadsIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\LeadsIdBody**](../Model/LeadsIdBody.md)| Lead object that needs to be updated | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsPost**
> leadsPost($body)

Creates a Lead

Required permission: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LeadsBody(); // \Swagger\Client\Model\LeadsBody | Lead object that needs to be added

try {
    $apiInstance->leadsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LeadsBody**](../Model/LeadsBody.md)| Lead object that needs to be added | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

