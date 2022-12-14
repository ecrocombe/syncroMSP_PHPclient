# VereTech\SyncroMSP_PHPclient\Client\InvoiceLineItemApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesIdLineItemsLineItemIdDelete**](InvoiceLineItemApi.md#invoicesidlineitemslineitemiddelete) | **DELETE** /invoices/{id}/line_items/{line_item_id} | Deletes an a line item of an invoice by ID
[**invoicesIdLineItemsLineItemIdPut**](InvoiceLineItemApi.md#invoicesidlineitemslineitemidput) | **PUT** /invoices/{id}/line_items/{line_item_id} | Updates an a line item of an invoice by ID
[**invoicesIdLineItemsPost**](InvoiceLineItemApi.md#invoicesidlineitemspost) | **POST** /invoices/{id}/line_items | Creates a new line item

# **invoicesIdLineItemsLineItemIdDelete**
> invoicesIdLineItemsLineItemIdDelete($id, $line_item_id)

Deletes an a line item of an invoice by ID

This deletes an existing Invoice's line item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Invoice to delete
$line_item_id = 56; // int | ID of line item to update

try {
    $apiInstance->invoicesIdLineItemsLineItemIdDelete($id, $line_item_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineItemApi->invoicesIdLineItemsLineItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Invoice to delete |
 **line_item_id** | **int**| ID of line item to update |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIdLineItemsLineItemIdPut**
> invoicesIdLineItemsLineItemIdPut($id, $line_item_id, $body)

Updates an a line item of an invoice by ID

This updates an existing Invoice's line item, all parameters overwrite existing params

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Invoice to update
$line_item_id = 56; // int | ID of line item to update
$body = new \stdClass; // object | ID of line item to update

try {
    $apiInstance->invoicesIdLineItemsLineItemIdPut($id, $line_item_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineItemApi->invoicesIdLineItemsLineItemIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Invoice to update |
 **line_item_id** | **int**| ID of line item to update |
 **body** | [**object**](../Model/object.md)| ID of line item to update | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIdLineItemsPost**
> invoicesIdLineItemsPost($id, $body)

Creates a new line item

Required permission: Invoices - Edit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Invoice to update
$body = new \stdClass; // object | ID of line item to update

try {
    $apiInstance->invoicesIdLineItemsPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineItemApi->invoicesIdLineItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Invoice to update |
 **body** | [**object**](../Model/object.md)| ID of line item to update | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

