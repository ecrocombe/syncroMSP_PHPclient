# VereTech\SyncroMSP_PHPclient\Client\ItemApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemsGet**](ItemApi.md#itemsget) | **GET** /items | Returns a paginated list of Part Orders

# **itemsGet**
> itemsGet($completed, $query, $page)

Returns a paginated list of Part Orders

Required permission: Parts Orders - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$completed = true; // bool | Returns only completed part orders
$query = "query_example"; // string | Search query
$page = 56; // int | Returns provided page of results, each 'page' contains 50 results

try {
    $apiInstance->itemsGet($completed, $query, $page);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **completed** | **bool**| Returns only completed part orders | [optional]
 **query** | **string**| Search query | [optional]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 50 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

