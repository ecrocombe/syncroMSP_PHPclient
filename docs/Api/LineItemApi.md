# VereTech\SyncroMSP_PHPclient\Client\LineItemApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lineItemsGet**](LineItemApi.md#lineitemsget) | **GET** /line_items | Returns a paginated list of Line Items

# **lineItemsGet**
> lineItemsGet($invoice_id, $estimate_id, $invoice_id_not_null, $estimate_id_not_null)

Returns a paginated list of Line Items

Required permission: Global Admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\LineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | Returns Line Items that belong to an Invoice ID
$estimate_id = 56; // int | Returns Line Items that belong to an Estimate ID
$invoice_id_not_null = true; // bool | Returns Line Items that belong to any Invoice
$estimate_id_not_null = true; // bool | Returns Line Items that belong to any Estimate

try {
    $apiInstance->lineItemsGet($invoice_id, $estimate_id, $invoice_id_not_null, $estimate_id_not_null);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| Returns Line Items that belong to an Invoice ID | [optional]
 **estimate_id** | **int**| Returns Line Items that belong to an Estimate ID | [optional]
 **invoice_id_not_null** | **bool**| Returns Line Items that belong to any Invoice | [optional]
 **estimate_id_not_null** | **bool**| Returns Line Items that belong to any Estimate | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

