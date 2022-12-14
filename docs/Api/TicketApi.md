# VereTech\SyncroMSP_PHPclient\Client\TicketApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ticketsGet**](TicketApi.md#ticketsget) | **GET** /tickets | Returns a paginated list of Tickets
[**ticketsIdAddLineItemPost**](TicketApi.md#ticketsidaddlineitempost) | **POST** /tickets/{id}/add_line_item | Creates a Ticket Line Item
[**ticketsIdAttachFileUrlPost**](TicketApi.md#ticketsidattachfileurlpost) | **POST** /tickets/{id}/attach_file_url | Attach a file to a Ticket
[**ticketsIdChargeTimerEntryPost**](TicketApi.md#ticketsidchargetimerentrypost) | **POST** /tickets/{id}/charge_timer_entry | Charges a Ticket Timer
[**ticketsIdCommentPost**](TicketApi.md#ticketsidcommentpost) | **POST** /tickets/{id}/comment | Adds a Comment to a Ticket
[**ticketsIdDelete**](TicketApi.md#ticketsiddelete) | **DELETE** /tickets/{id} | Deletes a Ticket by ID
[**ticketsIdDeleteAttachmentPost**](TicketApi.md#ticketsiddeleteattachmentpost) | **POST** /tickets/{id}/delete_attachment | Deletes a Ticket Attachment
[**ticketsIdDeleteTimerEntryPost**](TicketApi.md#ticketsiddeletetimerentrypost) | **POST** /tickets/{id}/delete_timer_entry | Deletes a Ticket Timer
[**ticketsIdGet**](TicketApi.md#ticketsidget) | **GET** /tickets/{id} | Retrieves a Ticket by ID
[**ticketsIdPrintPost**](TicketApi.md#ticketsidprintpost) | **POST** /tickets/{id}/print | Prints a Ticket by ID
[**ticketsIdPut**](TicketApi.md#ticketsidput) | **PUT** /tickets/{id} | Updates an existing Ticket by ID
[**ticketsIdRemoveLineItemPost**](TicketApi.md#ticketsidremovelineitempost) | **POST** /tickets/{id}/remove_line_item | Deletes a Ticket Line Item
[**ticketsIdTimerEntryPost**](TicketApi.md#ticketsidtimerentrypost) | **POST** /tickets/{id}/timer_entry | Create a Ticket Timer for a Ticket
[**ticketsIdUpdateLineItemPut**](TicketApi.md#ticketsidupdatelineitemput) | **PUT** /tickets/{id}/update_line_item | Updates an existing Ticket Line Item
[**ticketsIdUpdateTimerEntryPut**](TicketApi.md#ticketsidupdatetimerentryput) | **PUT** /tickets/{id}/update_timer_entry | Updates an existing Ticket Timer
[**ticketsPost**](TicketApi.md#ticketspost) | **POST** /tickets | Creates a Ticket
[**ticketsSettingsGet**](TicketApi.md#ticketssettingsget) | **GET** /tickets/settings | Returns Tickets Settings

# **ticketsGet**
> ticketsGet($customer_id, $contact_id, $number, $resolved_after, $created_after, $since_updated_at, $status, $query, $user_id, $mine, $ticket_search_id, $page)

Returns a paginated list of Tickets

Required permission: Tickets - List/Search Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | Any Ticket with customer_id equal to the parameter.
$contact_id = 56; // int | Any Ticket with contact_id equal to the parameter.
$number = "number_example"; // string | Any Ticket with number equal to the parameter.
$resolved_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns Tickets resolved after the date. Example \"2019-01-23\".
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns Tickets created after the date. Example \"2019-02-25\".
$since_updated_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns Tickets updated after the date. Example \"2019-02-25\".
$status = "status_example"; // string | Any Ticket with status equal to the parameter. Examples \"New\", \"In Progress\", \"Resolved\", \"Invoiced\", \"Waiting for Parts\", \"Waiting on Customer\", \"Scheduled\", \"Customer Reply\", \"Not Closed\".
$query = "query_example"; // string | Search query
$user_id = 56; // int | Any Ticket assigned to a User ID
$mine = true; // bool | Any Ticket assigned to the current user
$ticket_search_id = 56; // int | Returns results of a Ticket Search
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->ticketsGet($customer_id, $contact_id, $number, $resolved_after, $created_after, $since_updated_at, $status, $query, $user_id, $mine, $ticket_search_id, $page);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Any Ticket with customer_id equal to the parameter. | [optional]
 **contact_id** | **int**| Any Ticket with contact_id equal to the parameter. | [optional]
 **number** | **string**| Any Ticket with number equal to the parameter. | [optional]
 **resolved_after** | **\DateTime**| Returns Tickets resolved after the date. Example \&quot;2019-01-23\&quot;. | [optional]
 **created_after** | **\DateTime**| Returns Tickets created after the date. Example \&quot;2019-02-25\&quot;. | [optional]
 **since_updated_at** | **\DateTime**| Returns Tickets updated after the date. Example \&quot;2019-02-25\&quot;. | [optional]
 **status** | **string**| Any Ticket with status equal to the parameter. Examples \&quot;New\&quot;, \&quot;In Progress\&quot;, \&quot;Resolved\&quot;, \&quot;Invoiced\&quot;, \&quot;Waiting for Parts\&quot;, \&quot;Waiting on Customer\&quot;, \&quot;Scheduled\&quot;, \&quot;Customer Reply\&quot;, \&quot;Not Closed\&quot;. | [optional]
 **query** | **string**| Search query | [optional]
 **user_id** | **int**| Any Ticket assigned to a User ID | [optional]
 **mine** | **bool**| Any Ticket assigned to the current user | [optional]
 **ticket_search_id** | **int**| Returns results of a Ticket Search | [optional]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdAddLineItemPost**
> ticketsIdAddLineItemPost($id, $body)

Creates a Ticket Line Item

Required permission: Tickets - Edit Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\IdAddLineItemBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\IdAddLineItemBody | 

try {
    $apiInstance->ticketsIdAddLineItemPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdAddLineItemPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\IdAddLineItemBody**](../Model/IdAddLineItemBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdAttachFileUrlPost**
> ticketsIdAttachFileUrlPost($id, $body)

Attach a file to a Ticket

Required permission: Tickets - Edit Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $apiInstance->ticketsIdAttachFileUrlPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdAttachFileUrlPost: ', $e->getMessage(), PHP_EOL;
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

# **ticketsIdChargeTimerEntryPost**
> ticketsIdChargeTimerEntryPost($id, $body)

Charges a Ticket Timer

Required permission: Ticket Timers - Overview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $apiInstance->ticketsIdChargeTimerEntryPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdChargeTimerEntryPost: ', $e->getMessage(), PHP_EOL;
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

# **ticketsIdCommentPost**
> ticketsIdCommentPost($id, $body)

Adds a Comment to a Ticket

Required permission: Tickets - Edit Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\IdCommentBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\IdCommentBody | 

try {
    $apiInstance->ticketsIdCommentPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdCommentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\IdCommentBody**](../Model/IdCommentBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdDelete**
> ticketsIdDelete($id)

Deletes a Ticket by ID

Required permission: Tickets - Delete Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->ticketsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **ticketsIdDeleteAttachmentPost**
> ticketsIdDeleteAttachmentPost($id, $body)

Deletes a Ticket Attachment

Required permission: Tickets - Edit Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\IdDeleteAttachmentBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\IdDeleteAttachmentBody | 

try {
    $apiInstance->ticketsIdDeleteAttachmentPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdDeleteAttachmentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\IdDeleteAttachmentBody**](../Model/IdDeleteAttachmentBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdDeleteTimerEntryPost**
> ticketsIdDeleteTimerEntryPost($id, $body)

Deletes a Ticket Timer

Required permission: Ticket Timers - Overview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $apiInstance->ticketsIdDeleteTimerEntryPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdDeleteTimerEntryPost: ', $e->getMessage(), PHP_EOL;
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

# **ticketsIdGet**
> ticketsIdGet($id)

Retrieves a Ticket by ID

Required permissions: \"Tickets - View Details\" or \"Tickets - View 'Their Ticket' Details (assigned to them)\" Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->ticketsIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **ticketsIdPrintPost**
> ticketsIdPrintPost($id)

Prints a Ticket by ID

Required permission: Tickets - View Details Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->ticketsIdPrintPost($id);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdPrintPost: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdPut**
> ticketsIdPut($id, $body)

Updates an existing Ticket by ID

Required permission: Tickets - Edit Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $apiInstance->ticketsIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdPut: ', $e->getMessage(), PHP_EOL;
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

# **ticketsIdRemoveLineItemPost**
> ticketsIdRemoveLineItemPost($id, $body)

Deletes a Ticket Line Item

Required permission: Tickets - Edit Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\IdRemoveLineItemBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\IdRemoveLineItemBody | 

try {
    $apiInstance->ticketsIdRemoveLineItemPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdRemoveLineItemPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\IdRemoveLineItemBody**](../Model/IdRemoveLineItemBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdTimerEntryPost**
> ticketsIdTimerEntryPost($id, $body)

Create a Ticket Timer for a Ticket

Required permission: Ticket Timers - Overview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\IdTimerEntryBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\IdTimerEntryBody | 

try {
    $apiInstance->ticketsIdTimerEntryPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdTimerEntryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\IdTimerEntryBody**](../Model/IdTimerEntryBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdUpdateLineItemPut**
> ticketsIdUpdateLineItemPut($id, $body)

Updates an existing Ticket Line Item

Required permission: Tickets - Edit Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\IdUpdateLineItemBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\IdUpdateLineItemBody | 

try {
    $apiInstance->ticketsIdUpdateLineItemPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdUpdateLineItemPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\IdUpdateLineItemBody**](../Model/IdUpdateLineItemBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsIdUpdateTimerEntryPut**
> ticketsIdUpdateTimerEntryPut($id, $body)

Updates an existing Ticket Timer

Required permission: Ticket Timers - Overview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \VereTech\SyncroMSP_PHPclient\Client\Model\IdUpdateTimerEntryBody(); // \VereTech\SyncroMSP_PHPclient\Client\Model\IdUpdateTimerEntryBody | 

try {
    $apiInstance->ticketsIdUpdateTimerEntryPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsIdUpdateTimerEntryPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\VereTech\SyncroMSP_PHPclient\Client\Model\IdUpdateTimerEntryBody**](../Model/IdUpdateTimerEntryBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ticketsPost**
> ticketsPost($body)

Creates a Ticket

Required permission: Tickets - Create Single-Customer Users can only access own tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 

try {
    $apiInstance->ticketsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsPost: ', $e->getMessage(), PHP_EOL;
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

# **ticketsSettingsGet**
> ticketsSettingsGet()

Returns Tickets Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VereTech\SyncroMSP_PHPclient\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VereTech\SyncroMSP_PHPclient\Client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ticketsSettingsGet();
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->ticketsSettingsGet: ', $e->getMessage(), PHP_EOL;
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

