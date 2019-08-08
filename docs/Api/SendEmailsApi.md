# MailSlurpSDK\SendEmailsApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateInboxesUsingPOST**](SendEmailsApi.md#bulkCreateInboxesUsingPOST) | **POST** /bulk/inboxes | Bulk create Inboxes (email addresses)
[**bulkSendEmailsUsingPOST**](SendEmailsApi.md#bulkSendEmailsUsingPOST) | **POST** /bulk/send | Bulk Send Emails
[**createInboxUsingPOST**](SendEmailsApi.md#createInboxUsingPOST) | **POST** /inboxes | Create an Inbox (email address)
[**sendEmailUsingPOST**](SendEmailsApi.md#sendEmailUsingPOST) | **POST** /inboxes/{inboxId} | Send Email


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

$apiInstance = new MailSlurpSDK\Api\SendEmailsApi(
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
    echo 'Exception when calling SendEmailsApi->bulkCreateInboxesUsingPOST: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailSlurpSDK\Api\SendEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_send_email_options = new \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions(); // \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions | bulkSendEmailOptions

try {
    $apiInstance->bulkSendEmailsUsingPOST($bulk_send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling SendEmailsApi->bulkSendEmailsUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **createInboxUsingPOST**
> \MailSlurpSDK\MailSlurpModels\Inbox createInboxUsingPOST()

Create an Inbox (email address)

Create a new inbox and ephemeral email address to send and receive from. This is a necessary step before sending or receiving emails. The response contains the inbox's ID and its associated email address. It is recommended that you create a new inbox during each test method so that it is unique and empty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\SendEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createInboxUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendEmailsApi->createInboxUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailSlurpSDK\MailSlurpModels\Inbox**](../Model/Inbox.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmailUsingPOST**
> sendEmailUsingPOST($inbox_id, $send_email_options)

Send Email

Send an email from the inbox's email address. Specify the email recipients and contents in the request body. See the `SendEmailOptions` for more information. Note the `inboxId` refers to the inbox's id NOT its email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\SendEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = "inbox_id_example"; // string | inboxId
$send_email_options = new \MailSlurpSDK\MailSlurpModels\SendEmailOptions(); // \MailSlurpSDK\MailSlurpModels\SendEmailOptions | sendEmailOptions

try {
    $apiInstance->sendEmailUsingPOST($inbox_id, $send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling SendEmailsApi->sendEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| inboxId |
 **send_email_options** | [**\MailSlurpSDK\MailSlurpModels\SendEmailOptions**](../Model/SendEmailOptions.md)| sendEmailOptions |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

