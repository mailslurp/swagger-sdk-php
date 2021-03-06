# MailSlurpSDK\ExtraOperationsApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateInboxesUsingPOST**](ExtraOperationsApi.md#bulkCreateInboxesUsingPOST) | **POST** /bulk/inboxes | Bulk create Inboxes (email addresses)
[**bulkDeleteInboxesUsingDELETE**](ExtraOperationsApi.md#bulkDeleteInboxesUsingDELETE) | **DELETE** /bulk/inboxes | Bulk Delete Inboxes
[**bulkSendEmailsUsingPOST**](ExtraOperationsApi.md#bulkSendEmailsUsingPOST) | **POST** /bulk/send | Bulk Send Emails
[**createInboxUsingPOST**](ExtraOperationsApi.md#createInboxUsingPOST) | **POST** /inboxes | Create an Inbox (email address)
[**deleteEmailUsingDELETE**](ExtraOperationsApi.md#deleteEmailUsingDELETE) | **DELETE** /emails/{emailId} | Delete Email
[**deleteInboxUsingDELETE**](ExtraOperationsApi.md#deleteInboxUsingDELETE) | **DELETE** /inboxes/{inboxId} | Delete Inbox
[**getEmailUsingGET**](ExtraOperationsApi.md#getEmailUsingGET) | **GET** /emails/{emailId} | Get Email Content
[**getEmailsUsingGET**](ExtraOperationsApi.md#getEmailsUsingGET) | **GET** /inboxes/{inboxId}/emails | List an Inbox&#39;s Emails
[**getInboxUsingGET**](ExtraOperationsApi.md#getInboxUsingGET) | **GET** /inboxes/{inboxId} | Get Inbox
[**getInboxesUsingGET**](ExtraOperationsApi.md#getInboxesUsingGET) | **GET** /inboxes | List Inboxes
[**getRawEmailUsingGET**](ExtraOperationsApi.md#getRawEmailUsingGET) | **GET** /emails/{emailId}/raw | Get Raw Email Content
[**sendEmailUsingPOST**](ExtraOperationsApi.md#sendEmailUsingPOST) | **POST** /inboxes/{inboxId} | Send Email


# **bulkCreateInboxesUsingPOST**
> \MailSlurpSDK\MailSlurpModels\Inbox[] bulkCreateInboxesUsingPOST($count)

Bulk create Inboxes (email addresses)

Enterprise Plan Required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
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
    echo 'Exception when calling ExtraOperationsApi->bulkCreateInboxesUsingPOST: ', $e->getMessage(), PHP_EOL;
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

Enterprise Plan Required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \MailSlurpSDK\MailSlurpModels\string[]()); // string[] | ids

try {
    $apiInstance->bulkDeleteInboxesUsingDELETE($ids);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->bulkDeleteInboxesUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

Enterprise Plan Required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_send_email_options = new \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions(); // \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions | bulkSendEmailOptions

try {
    $apiInstance->bulkSendEmailsUsingPOST($bulk_send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->bulkSendEmailsUsingPOST: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createInboxUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->createInboxUsingPOST: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = "email_id_example"; // string | emailId

try {
    $apiInstance->deleteEmailUsingDELETE($email_id);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->deleteEmailUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = "inbox_id_example"; // string | inboxId

try {
    $apiInstance->deleteInboxUsingDELETE($inbox_id);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->deleteInboxUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

# **getEmailUsingGET**
> \MailSlurpSDK\MailSlurpModels\Email getEmailUsingGET($email_id)

Get Email Content

Returns a email summary object with headers and content. To retrieve the raw unparsed email use the getRawMessage endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = "email_id_example"; // string | emailId

try {
    $result = $apiInstance->getEmailUsingGET($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->getEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

[**\MailSlurpSDK\MailSlurpModels\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailsUsingGET**
> \MailSlurpSDK\MailSlurpModels\EmailPreview[] getEmailsUsingGET($inbox_id, $limit, $min_count, $retry_timeout, $since)

List an Inbox's Emails

List emails that an inbox has received. Only emails that are sent to the inbox's email address will appear in the inbox. It may take several seconds for any email you send to an inbox's email address to appear in the inbox. To make this endpoint wait for a minimum number of emails use the `minCount` parameter. The server will retry the inbox database until the `minCount` is satisfied or the `retryTimeout` is reached

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = "inbox_id_example"; // string | Id of inbox that emails belongs to
$limit = 56; // int | Limit the result set, ordered by descending received date time
$min_count = 789; // int | Minimum acceptable email count. Will cause request to hang (and retry) until minCount is satisfied or retryTimeout is reached.
$retry_timeout = 789; // int | Maximum milliseconds to spend retrying inbox database until minCount emails are returned
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Exclude emails received before this ISO 8601 date time

try {
    $result = $apiInstance->getEmailsUsingGET($inbox_id, $limit, $min_count, $retry_timeout, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->getEmailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| Id of inbox that emails belongs to |
 **limit** | **int**| Limit the result set, ordered by descending received date time | [optional]
 **min_count** | **int**| Minimum acceptable email count. Will cause request to hang (and retry) until minCount is satisfied or retryTimeout is reached. | [optional]
 **retry_timeout** | **int**| Maximum milliseconds to spend retrying inbox database until minCount emails are returned | [optional]
 **since** | **\DateTime**| Exclude emails received before this ISO 8601 date time | [optional]

### Return type

[**\MailSlurpSDK\MailSlurpModels\EmailPreview[]**](../Model/EmailPreview.md)

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

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
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
    echo 'Exception when calling ExtraOperationsApi->getInboxUsingGET: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInboxesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->getInboxesUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getRawEmailUsingGET**
> string getRawEmailUsingGET($email_id)

Get Raw Email Content

Returns a raw, unparsed and unprocessed email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = "email_id_example"; // string | emailId

try {
    $result = $apiInstance->getRawEmailUsingGET($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtraOperationsApi->getRawEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

**string**

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

$apiInstance = new MailSlurpSDK\Api\ExtraOperationsApi(
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
    echo 'Exception when calling ExtraOperationsApi->sendEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
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

