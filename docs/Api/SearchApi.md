# VereTech\SyncroMSP_PHPclient\Client\SearchApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchGet**](SearchApi.md#searchget) | **GET** /search | Search all the things

# **searchGet**
> searchGet($query)

Search all the things

Additional permissions required depending on search results type: - Customer, Contact, Asset: \"Customers - List/Search\" - Lead: Leads - List/Search - Invoice: Invoices - List/Search - Estimate: Estimates - List/Search - Ticket: Tickets - List/Search - Product: Products - List/Search - Purchase Order, Vendor: Purchase Orders - List/Search - Report: Reports - View - Wiki: Documentation - Allow Usage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 56; // int | Search query

try {
    $apiInstance->searchGet($query);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **int**| Search query | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

