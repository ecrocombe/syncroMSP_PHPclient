# Swagger\Client\ProductApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsBarcodeGet**](ProductApi.md#productsbarcodeget) | **GET** /products/barcode | Returns a Product by Barcode
[**productsCategoriesGet**](ProductApi.md#productscategoriesget) | **GET** /products/categories | Returns a paginated list of Product Categories
[**productsGet**](ProductApi.md#productsget) | **GET** /products | Returns a paginated list of Products
[**productsIdAddImagesPost**](ProductApi.md#productsidaddimagespost) | **POST** /products/{id}/add_images | Creates a Product Image
[**productsIdDeleteImageDelete**](ProductApi.md#productsiddeleteimagedelete) | **DELETE** /products/{id}/delete_image | Deletes a Product Image
[**productsIdGet**](ProductApi.md#productsidget) | **GET** /products/{id} | Retrieves a Product by ID
[**productsIdLocationQuantitiesPut**](ProductApi.md#productsidlocationquantitiesput) | **PUT** /products/{id}/location_quantities | Updates a Location Quantity
[**productsIdPut**](ProductApi.md#productsidput) | **PUT** /products/{id} | Updates an existing Product by ID
[**productsPost**](ProductApi.md#productspost) | **POST** /products | Creates a Product

# **productsBarcodeGet**
> productsBarcodeGet($barcode)

Returns a Product by Barcode

Required permission: Products - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode = "barcode_example"; // string | Product Barcode string

try {
    $apiInstance->productsBarcodeGet($barcode);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsBarcodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode** | **string**| Product Barcode string | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsCategoriesGet**
> productsCategoriesGet()

Returns a paginated list of Product Categories

Required permission: Products - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->productsCategoriesGet();
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsCategoriesGet: ', $e->getMessage(), PHP_EOL;
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

# **productsGet**
> productsGet($sort, $sku, $name, $upc_code, $category_id, $id, $id_not, $query, $page)

Returns a paginated list of Products

Required permission: Products - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = "sort_example"; // string | A Product field to order by. Example \"name ASC\".
$sku = "sku_example"; // string | Returns Products with the SKU.
$name = "name_example"; // string | Returns Products with the name.
$upc_code = "upc_code_example"; // string | Returns Products with the UPC Code.
$category_id = 56; // int | Returns Products from the Category.
$id = array(56); // int[] | Any product with ID included in the list.
$id_not = array(56); // int[] | Any product with ID not included in the list.
$query = "query_example"; // string | Search query.
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results.

try {
    $apiInstance->productsGet($sort, $sku, $name, $upc_code, $category_id, $id, $id_not, $query, $page);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| A Product field to order by. Example \&quot;name ASC\&quot;. | [optional]
 **sku** | **string**| Returns Products with the SKU. | [optional]
 **name** | **string**| Returns Products with the name. | [optional]
 **upc_code** | **string**| Returns Products with the UPC Code. | [optional]
 **category_id** | **int**| Returns Products from the Category. | [optional]
 **id** | [**int[]**](../Model/int.md)| Any product with ID included in the list. | [optional]
 **id_not** | [**int[]**](../Model/int.md)| Any product with ID not included in the list. | [optional]
 **query** | **string**| Search query. | [optional]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results. | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsIdAddImagesPost**
> productsIdAddImagesPost($id, $body)

Creates a Product Image

Required permission: Products - Edit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $apiInstance->productsIdAddImagesPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsIdAddImagesPost: ', $e->getMessage(), PHP_EOL;
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

# **productsIdDeleteImageDelete**
> productsIdDeleteImageDelete($id, $photo_id)

Deletes a Product Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$photo_id = 56; // int | 

try {
    $apiInstance->productsIdDeleteImageDelete($id, $photo_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsIdDeleteImageDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **photo_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsIdGet**
> productsIdGet($id)

Retrieves a Product by ID

Required permission: Products - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->productsIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **productsIdLocationQuantitiesPut**
> productsIdLocationQuantitiesPut($id, $body)

Updates a Location Quantity

Required permission: Products - Edit Quantities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\IdLocationQuantitiesBody(); // \Swagger\Client\Model\IdLocationQuantitiesBody | 

try {
    $apiInstance->productsIdLocationQuantitiesPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsIdLocationQuantitiesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\IdLocationQuantitiesBody**](../Model/IdLocationQuantitiesBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsIdPut**
> productsIdPut($id, $body)

Updates an existing Product by ID

Required permission: Products - Edit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\ProductsIdBody(); // \Swagger\Client\Model\ProductsIdBody | Product object that needs to be updated

try {
    $apiInstance->productsIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ProductsIdBody**](../Model/ProductsIdBody.md)| Product object that needs to be updated | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsPost**
> productsPost($body)

Creates a Product

Required permission: Products - Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductsBody(); // \Swagger\Client\Model\ProductsBody | Product object that needs to be added

try {
    $apiInstance->productsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductsBody**](../Model/ProductsBody.md)| Product object that needs to be added | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

