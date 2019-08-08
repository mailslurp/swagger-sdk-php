# MailSlurpSDK\BulkApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateInboxesUsingPOST**](BulkApi.md#bulkCreateInboxesUsingPOST) | **POST** /bulk/inboxes | Bulk create Inboxes (email addresses)
[**bulkDeleteInboxesUsingDELETE**](BulkApi.md#bulkDeleteInboxesUsingDELETE) | **DELETE** /bulk/inboxes | Bulk Delete Inboxes
[**bulkSendEmailsUsingPOST**](BulkApi.md#bulkSendEmailsUsingPOST) | **POST** /bulk/send | Bulk Send Emails


# **bulkCreateInboxesUsingPOST**
> \MailSlurpSDK\MailSlurpModels\Inbox[] bulkCreateInboxesUsingPOST($count)

Bulk create Inboxes (email addresses)

Enterprise Account Required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\BulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Number of inboxes to be created in bulk

try {
    $result = $apiInstance->bulkCreateInboxesUsingPOST($count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->bulkCreateInboxesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of inboxes to be created in bulk |

### Return type

[**\MailSlurpSDK\MailSlurpModels\Inbox[]**](../Model/Inbox.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new MailSlurpSDK\Api\BulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \MailSlurpSDK\MailSlurpModels\string[]()); // string[] | ids

try {
    $apiInstance->bulkDeleteInboxesUsingDELETE($ids);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->bulkDeleteInboxesUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **bulkSendEmailsUsingPOST**
> bulkSendEmailsUsingPOST($bulk_send_email_options)

Bulk Send Emails

Enterprise Account Required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\BulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_send_email_options = new \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions(); // \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions | bulkSendEmailOptions

try {
    $apiInstance->bulkSendEmailsUsingPOST($bulk_send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->bulkSendEmailsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_send_email_options** | [**\MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions**](../Model/BulkSendEmailOptions.md)| bulkSendEmailOptions |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

