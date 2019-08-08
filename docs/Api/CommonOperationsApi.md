# MailSlurpSDK\CommonOperationsApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewEmailAddressUsingPOST**](CommonOperationsApi.md#createNewEmailAddressUsingPOST) | **POST** /newEmailAddress | Create new email address
[**fetchLatestEmailUsingGET**](CommonOperationsApi.md#fetchLatestEmailUsingGET) | **GET** /fetchLatestEmail | Fetch inbox&#39;s latest email or if empty wait for email to arrive
[**sendEmailSimpleUsingPOST**](CommonOperationsApi.md#sendEmailSimpleUsingPOST) | **POST** /sendEmail | Send an email from a random email address


# **createNewEmailAddressUsingPOST**
> \MailSlurpSDK\MailSlurpModels\Inbox createNewEmailAddressUsingPOST()

Create new email address

Returns an Inbox with an `id` and an `emailAddress`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\CommonOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createNewEmailAddressUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonOperationsApi->createNewEmailAddressUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **fetchLatestEmailUsingGET**
> \MailSlurpSDK\MailSlurpModels\Email fetchLatestEmailUsingGET($inbox_email_address, $inbox_id)

Fetch inbox's latest email or if empty wait for email to arrive

Will return either the last received email or wait for an email to arrive and return that. If you need to wait for an email for a non-empty inbox see the other receive methods.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\CommonOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_email_address = "inbox_email_address_example"; // string | Email address of the inbox we are fetching emails from
$inbox_id = "inbox_id_example"; // string | Id of the inbox we are fetching emails from

try {
    $result = $apiInstance->fetchLatestEmailUsingGET($inbox_email_address, $inbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonOperationsApi->fetchLatestEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_email_address** | **string**| Email address of the inbox we are fetching emails from | [optional]
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are fetching emails from | [optional]

### Return type

[**\MailSlurpSDK\MailSlurpModels\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmailSimpleUsingPOST**
> sendEmailSimpleUsingPOST($send_email_options)

Send an email from a random email address

To specify an email address first create an inbox and use that with the other send email methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurpSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurpSDK\Api\CommonOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_email_options = new \MailSlurpSDK\MailSlurpModels\SendEmailOptions(); // \MailSlurpSDK\MailSlurpModels\SendEmailOptions | sendEmailOptions

try {
    $apiInstance->sendEmailSimpleUsingPOST($send_email_options);
} catch (Exception $e) {
    echo 'Exception when calling CommonOperationsApi->sendEmailSimpleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_email_options** | [**\MailSlurpSDK\MailSlurpModels\SendEmailOptions**](../Model/SendEmailOptions.md)| sendEmailOptions |

### Return type

void (empty response body)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

