# VereTech\SyncroMSP_PHPclient\Client\WorksheetResultApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ticketsTicketIdWorksheetResultsGet**](WorksheetResultApi.md#ticketsticketidworksheetresultsget) | **GET** /tickets/{ticket_id}/worksheet_results | Returns a paginated list of Worksheet Results
[**ticketsTicketIdWorksheetResultsIdDelete**](WorksheetResultApi.md#ticketsticketidworksheetresultsiddelete) | **DELETE** /tickets/{ticket_id}/worksheet_results/{id} | Deletes a Worksheet Result
[**ticketsTicketIdWorksheetResultsIdGet**](WorksheetResultApi.md#ticketsticketidworksheetresultsidget) | **GET** /tickets/{ticket_id}/worksheet_results/{id} | Retrieves a Worksheet Result by ID
[**ticketsTicketIdWorksheetResultsIdPut**](WorksheetResultApi.md#ticketsticketidworksheetresultsidput) | **PUT** /tickets/{ticket_id}/worksheet_results/{id} | Updates a Worksheet Result
[**ticketsTicketIdWorksheetResultsPost**](WorksheetResultApi.md#ticketsticketidworksheetresultspost) | **POST** /tickets/{ticket_id}/worksheet_results | Creates Worksheet Result

# **ticketsTicketIdWorksheetResultsGet**
> ticketsTicketIdWorksheetResultsGet($ticket_id, $page)

Returns a paginated list of Worksheet Results

Required permissions: \"Tickets - View Details\" or \"Tickets - View 'Their Ticket' Details (assigned to them)\" Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\WorksheetResultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | 
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->ticketsTicketIdWorksheetResultsGet($ticket_id, $page);
} catch (Exception $e) {
    echo 'Exception when calling WorksheetResultApi->ticketsTicketIdWorksheetResultsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**|  |
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsTicketIdWorksheetResultsIdDelete**
> ticketsTicketIdWorksheetResultsIdDelete($ticket_id, $id)

Deletes a Worksheet Result

Required permissions: \"Tickets - View Details\" or \"Tickets - View 'Their Ticket' Details (assigned to them)\" Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\WorksheetResultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | 
$id = 56; // int | 

try {
    $apiInstance->ticketsTicketIdWorksheetResultsIdDelete($ticket_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling WorksheetResultApi->ticketsTicketIdWorksheetResultsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsTicketIdWorksheetResultsIdGet**
> ticketsTicketIdWorksheetResultsIdGet($ticket_id, $id)

Retrieves a Worksheet Result by ID

Required permissions: \"Tickets - View Details\" or \"Tickets - View 'Their Ticket' Details (assigned to them)\" Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\WorksheetResultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | 
$id = 56; // int | 

try {
    $apiInstance->ticketsTicketIdWorksheetResultsIdGet($ticket_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling WorksheetResultApi->ticketsTicketIdWorksheetResultsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsTicketIdWorksheetResultsIdPut**
> ticketsTicketIdWorksheetResultsIdPut($ticket_id, $id, $body)

Updates a Worksheet Result

Required permissions: \"Tickets - View Details\" or \"Tickets - View 'Their Ticket' Details (assigned to them)\" Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\WorksheetResultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | 
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\WorksheetResultsIdBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\WorksheetResultsIdBody | 

try {
    $apiInstance->ticketsTicketIdWorksheetResultsIdPut($ticket_id, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorksheetResultApi->ticketsTicketIdWorksheetResultsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**|  |
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\WorksheetResultsIdBody**](../Model/WorksheetResultsIdBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsTicketIdWorksheetResultsPost**
> ticketsTicketIdWorksheetResultsPost($ticket_id, $body)

Creates Worksheet Result

Required permissions: \"Tickets - View Details\" or \"Tickets - View 'Their Ticket' Details (assigned to them)\" Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\WorksheetResultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\TicketIdWorksheetResultsBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\TicketIdWorksheetResultsBody | 

try {
    $apiInstance->ticketsTicketIdWorksheetResultsPost($ticket_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorksheetResultApi->ticketsTicketIdWorksheetResultsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\TicketIdWorksheetResultsBody**](../Model/TicketIdWorksheetResultsBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

