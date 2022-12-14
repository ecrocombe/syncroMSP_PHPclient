# VereTech\SyncroMSP_PHPclient\Client\InvoiceApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesGet**](InvoiceApi.md#invoicesget) | **GET** /invoices | Returns a paginated list of Invoices
[**invoicesIdDelete**](InvoiceApi.md#invoicesiddelete) | **DELETE** /invoices/{id} | Deletes an invoice by ID
[**invoicesIdEmailPost**](InvoiceApi.md#invoicesidemailpost) | **POST** /invoices/{id}/email | Sends invoice to customer
[**invoicesIdGet**](InvoiceApi.md#invoicesidget) | **GET** /invoices/{id} | Retrieves an Invoice by ID or Number
[**invoicesIdPrintPost**](InvoiceApi.md#invoicesidprintpost) | **POST** /invoices/{id}/print | Queues a print job for an invoice
[**invoicesIdPut**](InvoiceApi.md#invoicesidput) | **PUT** /invoices/{id} | Updates an existing invoice by ID
[**invoicesIdTicketGet**](InvoiceApi.md#invoicesidticketget) | **GET** /invoices/{id}/ticket | Returns the associated ticket for an invoice
[**invoicesPost**](InvoiceApi.md#invoicespost) | **POST** /invoices | Creates an Invoice

# **invoicesGet**
> invoicesGet($paid, $unpaid, $ticket_id, $since_updated_at, $page)

Returns a paginated list of Invoices

Required permission: Invoices - List/Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paid = true; // bool | Whether or not the returned list of invoices has been marked as paid
$unpaid = true; // bool | Whether or not the returned list of invoices has been marked as unpaid
$ticket_id = 56; // int | Any invoices attached to a Ticket ID
$since_updated_at = "since_updated_at_example"; // string | Any invoices updated since a date
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->invoicesGet($paid, $unpaid, $ticket_id, $since_updated_at, $page);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paid** | **bool**| Whether or not the returned list of invoices has been marked as paid | [optional]
 **unpaid** | **bool**| Whether or not the returned list of invoices has been marked as unpaid | [optional]
 **ticket_id** | **int**| Any invoices attached to a Ticket ID | [optional]
 **since_updated_at** | **string**| Any invoices updated since a date | [optional]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIdDelete**
> invoicesIdDelete($id)

Deletes an invoice by ID

Returns 200 even if the delete fails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Invoice to delete

try {
    $apiInstance->invoicesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoicesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Invoice to delete |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIdEmailPost**
> invoicesIdEmailPost($id)

Sends invoice to customer

Required permission: Invoices - View Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Invoice which will be emailed

try {
    $apiInstance->invoicesIdEmailPost($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoicesIdEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Invoice which will be emailed |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIdGet**
> \VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2003 invoicesIdGet($id)

Retrieves an Invoice by ID or Number

Required permission: Invoices - View Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID or Number of Invoice to retrieve

try {
    $result = $apiInstance->invoicesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoicesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID or Number of Invoice to retrieve |

### Return type

[**\VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIdPrintPost**
> invoicesIdPrintPost($id)

Queues a print job for an invoice

Required permission: Invoices - View Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the Invoice to print

try {
    $apiInstance->invoicesIdPrintPost($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoicesIdPrintPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the Invoice to print |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIdPut**
> invoicesIdPut($id, $body)

Updates an existing invoice by ID

This updates an existing Invoice, all parameters overwrite existing params

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Invoice to update
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\InvoicesIdBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\InvoicesIdBody | Invoice properties to update

try {
    $apiInstance->invoicesIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoicesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Invoice to update |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\InvoicesIdBody**](../Model/InvoicesIdBody.md)| Invoice properties to update | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIdTicketGet**
> invoicesIdTicketGet($id)

Returns the associated ticket for an invoice

Required permissions: \"Invoices - View Details\" and \"Tickets - View Details\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Invoice whose Ticket will be returned

try {
    $apiInstance->invoicesIdTicketGet($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoicesIdTicketGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Invoice whose Ticket will be returned |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesPost**
> invoicesPost($body)

Creates an Invoice

Required permission: Invoices - Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\InvoicesBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\InvoicesBody | Invoice object that needs to be added

try {
    $apiInstance->invoicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\InvoicesBody**](../Model/InvoicesBody.md)| Invoice object that needs to be added | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

