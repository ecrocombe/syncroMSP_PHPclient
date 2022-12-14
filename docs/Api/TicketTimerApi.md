# Swagger\Client\TicketTimerApi

All URIs are relative to *https://{subdomain}.syncromsp.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ticketTimersGet**](TicketTimerApi.md#tickettimersget) | **GET** /ticket_timers | Returns a paginated list of Ticket Timers

# **ticketTimersGet**
> ticketTimersGet($created_at_lt, $created_at_gt, $page)

Returns a paginated list of Ticket Timers

Required permission: Ticket Timers - Overview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearerAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TicketTimerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_at_lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns Ticket Timers created before the date. Example \"2019-01-22\"
$created_at_gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns Ticket Timers created after the date. Example \"2019-12-22\"
$page = 56; // int | Returns provided page of results, each 'page' contains 25 results

try {
    $apiInstance->ticketTimersGet($created_at_lt, $created_at_gt, $page);
} catch (Exception $e) {
    echo 'Exception when calling TicketTimerApi->ticketTimersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_at_lt** | **\DateTime**| Returns Ticket Timers created before the date. Example \&quot;2019-01-22\&quot; | [optional]
 **created_at_gt** | **\DateTime**| Returns Ticket Timers created after the date. Example \&quot;2019-12-22\&quot; | [optional]
 **page** | **int**| Returns provided page of results, each &#x27;page&#x27; contains 25 results | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

