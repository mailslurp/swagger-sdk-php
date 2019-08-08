# MailSlurpAPIPHPClient
For extensive guides and examples see [full documentation](https://www.mailslurp.com/developers). [Create an account](https://app.mailslurp.com) in the MailSlurp Dashboard to [view your API Key](https://app). For all bugs, feature requests, or help please [see support](https://www.mailslurp.com/support).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.1-alpha
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.mailslurp.com](https://www.mailslurp.com)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/mailslurp/swagger-sdk-php.git"
    }
  ],
  "require": {
    "mailslurp/swagger-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/MailSlurpAPIPHPClient/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.mailslurp.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommonOperationsApi* | [**createNewEmailAddressUsingPOST**](docs/Api/CommonOperationsApi.md#createnewemailaddressusingpost) | **POST** /newEmailAddress | Create new email address
*CommonOperationsApi* | [**fetchLatestEmailUsingGET**](docs/Api/CommonOperationsApi.md#fetchlatestemailusingget) | **GET** /fetchLatestEmail | Fetch inbox&#39;s latest email or if empty wait for email to arrive
*CommonOperationsApi* | [**sendEmailSimpleUsingPOST**](docs/Api/CommonOperationsApi.md#sendemailsimpleusingpost) | **POST** /sendEmail | Send an email from a random email address
*ExtraOperationsApi* | [**bulkCreateInboxesUsingPOST**](docs/Api/ExtraOperationsApi.md#bulkcreateinboxesusingpost) | **POST** /bulk/inboxes | Bulk create Inboxes (email addresses)
*ExtraOperationsApi* | [**bulkDeleteInboxesUsingDELETE**](docs/Api/ExtraOperationsApi.md#bulkdeleteinboxesusingdelete) | **DELETE** /bulk/inboxes | Bulk Delete Inboxes
*ExtraOperationsApi* | [**bulkSendEmailsUsingPOST**](docs/Api/ExtraOperationsApi.md#bulksendemailsusingpost) | **POST** /bulk/send | Bulk Send Emails
*ExtraOperationsApi* | [**createInboxUsingPOST**](docs/Api/ExtraOperationsApi.md#createinboxusingpost) | **POST** /inboxes | Create an Inbox (email address)
*ExtraOperationsApi* | [**deleteEmailUsingDELETE**](docs/Api/ExtraOperationsApi.md#deleteemailusingdelete) | **DELETE** /emails/{emailId} | Delete Email
*ExtraOperationsApi* | [**deleteInboxUsingDELETE**](docs/Api/ExtraOperationsApi.md#deleteinboxusingdelete) | **DELETE** /inboxes/{inboxId} | Delete Inbox
*ExtraOperationsApi* | [**getEmailUsingGET**](docs/Api/ExtraOperationsApi.md#getemailusingget) | **GET** /emails/{emailId} | Get Email Content
*ExtraOperationsApi* | [**getEmailsUsingGET**](docs/Api/ExtraOperationsApi.md#getemailsusingget) | **GET** /inboxes/{inboxId}/emails | List an Inbox&#39;s Emails
*ExtraOperationsApi* | [**getInboxUsingGET**](docs/Api/ExtraOperationsApi.md#getinboxusingget) | **GET** /inboxes/{inboxId} | Get Inbox
*ExtraOperationsApi* | [**getInboxesUsingGET**](docs/Api/ExtraOperationsApi.md#getinboxesusingget) | **GET** /inboxes | List Inboxes
*ExtraOperationsApi* | [**getRawEmailUsingGET**](docs/Api/ExtraOperationsApi.md#getrawemailusingget) | **GET** /emails/{emailId}/raw | Get Raw Email Content
*ExtraOperationsApi* | [**sendEmailUsingPOST**](docs/Api/ExtraOperationsApi.md#sendemailusingpost) | **POST** /inboxes/{inboxId} | Send Email


## Documentation For Models

 - [BulkSendEmailOptions](docs/Model/BulkSendEmailOptions.md)
 - [Email](docs/Model/Email.md)
 - [EmailAnalysis](docs/Model/EmailAnalysis.md)
 - [EmailPreview](docs/Model/EmailPreview.md)
 - [Inbox](docs/Model/Inbox.md)
 - [SendEmailOptions](docs/Model/SendEmailOptions.md)


## Documentation For Authorization


## API_KEY

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Author

jackmahoney212@gmail.com


