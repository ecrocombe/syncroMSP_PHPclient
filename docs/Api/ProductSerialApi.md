# Swagger\Client\ProductSerialApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsProductIdProductSerialsAttachToLineItemPost**](ProductSerialApi.md#productsproductidproductserialsattachtolineitempost) | **POST** /products/{product_id}/product_serials/attach_to_line_item | Adds Product Serials to a Line Item
[**productsProductIdProductSerialsGet**](ProductSerialApi.md#productsproductidproductserialsget) | **GET** /products/{product_id}/product_serials | Returns a paginated list of Product_serials
[**productsProductIdProductSerialsIdPut**](ProductSerialApi.md#productsproductidproductserialsidput) | **PUT** /products/{product_id}/product_serials/{id} | Updates an existing Product Serial by ID
[**productsProductIdProductSerialsPost**](ProductSerialApi.md#productsproductidproductserialspost) | **POST** /products/{product_id}/product_serials | Creates a Product Serial

# **productsProductIdProductSerialsAttachToLineItemPost**
> productsProductIdProductSerialsAttachToLineItemPost($product_id, $body)

Adds Product Serials to a Line Item

Required permission: Products - List/Search Additional permissions required depending on \"record_type\": - LineItem: \"Invoices - Edit\" or \"Estimates - Edit\" - TicketLineItem: Tickets - Edit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | 
$body = new \Swagger\Client\Model\ProductSerialsAttachToLineItemBody(); // \Swagger\Client\Model\ProductSerialsAttachToLineItemBody | 

try {
    $apiInstance->productsProductIdProductSerialsAttachToLineItemPost($product_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductSerialApi->productsProductIdProductSerialsAttachToLineItemPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ProductSerialsAttachToLineItemBody**](../Model/ProductSerialsAttachToLineItemBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdProductSerialsGet**
> \Swagger\Client\Model\InlineResponse2004 productsProductIdProductSerialsGet($product_id, $status, $page)

Returns a paginated list of Product_serials

Required permission: Products - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | 
$status = "status_example"; // string | Possible values are reserved, sold, returned, in_transfer, breakage, used_in_refurb, in_stock
$page = 56; // int | Returns provided page of results, each 'page' contains 100 result

try {
    $result = $apiInstance->productsProductIdProductSerialsGet($product_id, $status, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSerialApi->productsProductIdProductSerialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **status** | **string**| Possible values are reserved, sold, returned, in_transfer, breakage, used_in_refurb, in_stock | [optional]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 100 result | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdProductSerialsIdPut**
> productsProductIdProductSerialsIdPut($product_id, $id, $body)

Updates an existing Product Serial by ID

Required permission: Products - Edit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | 
$id = 56; // int | 
$body = new \Swagger\Client\Model\ProductSerialsIdBody(); // \Swagger\Client\Model\ProductSerialsIdBody | Product Serial object that needs to be updated

try {
    $apiInstance->productsProductIdProductSerialsIdPut($product_id, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductSerialApi->productsProductIdProductSerialsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ProductSerialsIdBody**](../Model/ProductSerialsIdBody.md)| Product Serial object that needs to be updated | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdProductSerialsPost**
> productsProductIdProductSerialsPost($product_id, $body)

Creates a Product Serial

Required permission: Products - Edit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | 
$body = new \Swagger\Client\Model\ProductIdProductSerialsBody(); // \Swagger\Client\Model\ProductIdProductSerialsBody | Product Serial object that needs to be added

try {
    $apiInstance->productsProductIdProductSerialsPost($product_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductSerialApi->productsProductIdProductSerialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ProductIdProductSerialsBody**](../Model/ProductIdProductSerialsBody.md)| Product Serial object that needs to be added | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

