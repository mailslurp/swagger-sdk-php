# MailSlurpSDK\ManageEntitiesApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkDeleteInboxesUsingDELETE**](ManageEntitiesApi.md#bulkDeleteInboxesUsingDELETE) | **DELETE** /bulk/inboxes | Bulk Delete Inboxes
[**deleteEmailUsingDELETE**](ManageEntitiesApi.md#deleteEmailUsingDELETE) | **DELETE** /emails/{emailId} | Delete Email
[**deleteInboxUsingDELETE**](ManageEntitiesApi.md#deleteInboxUsingDELETE) | **DELETE** /inboxes/{inboxId} | Delete Inbox
[**getInboxUsingGET**](ManageEntitiesApi.md#getInboxUsingGET) | **GET** /inboxes/{inboxId} | Get Inbox
[**getInboxesUsingGET**](ManageEntitiesApi.md#getInboxesUsingGET) | **GET** /inboxes | List Inboxes


# **bulkDeleteInboxesUsingDELETE**
> bulkDeleteInboxesUsingDELETE($ids)

Bulk Delete Inboxes

Enterprise Account Required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ManageEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \MailSlurpSDK\MailSlurpModels\string[]()); // string[] | ids

try {
    $apiInstance->bulkDeleteInboxesUsingDELETE($ids);
} catch (Exception $e) {
    echo 'Exception when calling ManageEntitiesApi->bulkDeleteInboxesUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string[]**| ids |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailUsingDELETE**
> deleteEmailUsingDELETE($email_id)

Delete Email

Deletes an email and removes it from the inbox

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ManageEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = "email_id_example"; // string | emailId

try {
    $apiInstance->deleteEmailUsingDELETE($email_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageEntitiesApi->deleteEmailUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInboxUsingDELETE**
> deleteInboxUsingDELETE($inbox_id)

Delete Inbox

Permanently delete an inbox and associated email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ManageEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = "inbox_id_example"; // string | inboxId

try {
    $apiInstance->deleteInboxUsingDELETE($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageEntitiesApi->deleteInboxUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| inboxId |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboxUsingGET**
> \MailSlurpSDK\MailSlurpModels\Inbox getInboxUsingGET($inbox_id)

Get Inbox

Returns an inbox's properties, including its email address and ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ManageEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = "inbox_id_example"; // string | inboxId

try {
    $result = $apiInstance->getInboxUsingGET($inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageEntitiesApi->getInboxUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| inboxId |

### Return type

[**\MailSlurpSDK\MailSlurpModels\Inbox**](../Model/Inbox.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboxesUsingGET**
> \MailSlurpSDK\MailSlurpModels\Inbox[] getInboxesUsingGET()

List Inboxes

List the inboxes you have created

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ManageEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInboxesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageEntitiesApi->getInboxesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailSlurpSDK\MailSlurpModels\Inbox[]**](../Model/Inbox.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

