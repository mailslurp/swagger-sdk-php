# MailSlurpSDK\ReceiveEmailsApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateInboxesUsingPOST**](ReceiveEmailsApi.md#bulkCreateInboxesUsingPOST) | **POST** /bulk/inboxes | Bulk create Inboxes (email addresses)
[**createInboxUsingPOST**](ReceiveEmailsApi.md#createInboxUsingPOST) | **POST** /inboxes | Create an Inbox (email address)
[**getEmailAnalyticsUsingGET**](ReceiveEmailsApi.md#getEmailAnalyticsUsingGET) | **GET** /emails/{emailId}/analytics | Get Email Analytics
[**getEmailUsingGET**](ReceiveEmailsApi.md#getEmailUsingGET) | **GET** /emails/{emailId} | Get Email Content
[**getEmailsUsingGET**](ReceiveEmailsApi.md#getEmailsUsingGET) | **GET** /inboxes/{inboxId}/emails | List an Inbox&#39;s Emails
[**getRawEmailUsingGET**](ReceiveEmailsApi.md#getRawEmailUsingGET) | **GET** /emails/{emailId}/raw | Get Raw Email Content


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

$apiInstance = new MailSlurpSDK\Api\ReceiveEmailsApi(
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
    echo 'Exception when calling ReceiveEmailsApi->bulkCreateInboxesUsingPOST: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailSlurpSDK\Api\ReceiveEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createInboxUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiveEmailsApi->createInboxUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **getEmailAnalyticsUsingGET**
> \MailSlurpSDK\MailSlurpModels\EmailAnalytics getEmailAnalyticsUsingGET($email_id)

Get Email Analytics

Returns a spam analysis on a given email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\ReceiveEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = "email_id_example"; // string | emailId

try {
    $result = $apiInstance->getEmailAnalyticsUsingGET($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiveEmailsApi->getEmailAnalyticsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | [**string**](../Model/.md)| emailId |

### Return type

[**\MailSlurpSDK\MailSlurpModels\EmailAnalytics**](../Model/EmailAnalytics.md)

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

$apiInstance = new MailSlurpSDK\Api\ReceiveEmailsApi(
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
    echo 'Exception when calling ReceiveEmailsApi->getEmailUsingGET: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailSlurpSDK\Api\ReceiveEmailsApi(
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
    echo 'Exception when calling ReceiveEmailsApi->getEmailsUsingGET: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailSlurpSDK\Api\ReceiveEmailsApi(
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
    echo 'Exception when calling ReceiveEmailsApi->getRawEmailUsingGET: ', $e->getMessage(), PHP_EOL;
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

