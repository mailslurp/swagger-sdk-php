<?php
/**
 * SendEmailsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  MailSlurpSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MailSlurp API
 *
 * Send and receive email from ephemeral email addresses via REST. Test email signup, verification codes, transactional-mail and more.  Note: before using MailSlurp you must [sign up](https://app.mailslurp.com) and [obtain an API key](https://app.mailslurp.com).  [Skip introduction](https://docs.mailslurp.com/#tag-Send-Emails)  ### About [MailSlurp](https://www.mailslurp.com/) is a SAAS API for sending and receiving emails from ephemeral email inboxes. These inboxes can be created on the fly and each has a unique email address. The email address is typically `{UUID}@mailslurp.com`.   Once you have created an email address you can send emails from it. You can also receive emails that are sent to its address.   You can get an email from an inbox by first listing all emails in the inbox and then fetching the email you want by its ID. It is recommended to create a new inbox for every test so that it is empty.   As email sending and receiving is an asynchronous operation your tests must anticipate this. The MailSlurp API has `minCount` and `waitFor` properties that will hold an API request open until conditions have been met. This allows your code to wait for a particular email to be received.  If you have any questions or issues please [contact support](https://www.mailslurp.com/support/) - we love hearing from you!  ### Why MailSlurp was built for **testing software or processes that interact with email in some way**.  It should be used in your integration or end-to-end tests to test and verify key functions in staging or production applications.   See the homepage for [MailSlurp use cases](https://www.mailslurp.com/use-cases/) and [pricing](https://www.mailslurp.com/pricing/). More information at [MailSlurp.com](https://www.mailslurp.com/).  ### Important Links - [Create an account](https://app.mailslurp.com/) - [Get API Key](https://app.mailslurp.com/) - [API Documentation](https://docs.mailslurp.com/) - [Official SDK Libraries](https://github.com/mailslurp) - [Support](https://www.mailslurp.com/support/) / [Issues](mailto:jackmahoney212@gmail.com) - [Swagger JSON](https://swagger.mailslurp.com/)   ### Usage There are several ways to use MailSlurp. All methods require an account and an API key. You can obtain these by [signing up](https://app.mailslurp.com/) and [viewing your dashboard](https://app.mailslurp.com/).  As MailSlurp is a simple HTTPS REST API you can call it from any language that supports HTTPS. Or you can use the recommend Node Client or the other official SDKs.  #### Recommended Usage There is a hand written [Javascript SDK](https://www.npmjs.com/package/mailslurp-client) with Typescript support. It is [published on NPM](https://www.npmjs.com/package/mailslurp-client) and is the recommended client. However if you don't want to use it try the generated SDKs below in other languages instead.  - `npm install mailslurp-client`  See NPM package for [more information](https://www.npmjs.com/package/mailslurp-client).  ##### HTTP API You can call the MailSlurp API from any HTTP client in any language.  HTTP endpoints are [documented here](https://docs.mailslurp.com) and follow the REST/CRUD convention. The HTTP api uses HTTPS and JSON.  An example request might look like this:  ```bash curl -X POST https://api.mailslurp.com/inboxes -H 'x-api-key: test' ```  ##### Other official SDKs Or you use one of the official generated [SDK Libraries](https://github.com/mailslurp). These libraries are generated automatically with each API version change.   - [Official Typescript SDK](https://github.com/mailslurp/swagger-sdk-typescript-fetch) - [Official Python SDK](https://github.com/mailslurp/swagger-sdk-python) - [Official C# SDK](https://github.com/mailslurp/swagger-sdk-csharp) - [Official Java SDK](https://github.com/mailslurp/swagger-sdk-java) - [Official Swift SDK](https://github.com/mailslurp/swagger-sdk-swift) - [Official Golang SDK](https://github.com/mailslurp/swagger-sdk-go) - [Official Javascript SDK](https://github.com/mailslurp/swagger-sdk-javascript) - [Official PHP SDK](https://github.com/mailslurp/swagger-sdk-php) - [Official Ruby SDK](https://github.com/mailslurp/swagger-sdk-ruby)  ##### Custom SDKs You can also compile your own library with SwaggerCodegen and the [Swagger Spec](https://swagger.mailslurp.com).  ##### Demo application There is an interactive GUI available at [demo.mailslurp.com](https://demo.mailslurp.com/) for testing requests.  ### Authentication An [API Key](#authentication) must be passed as a header in all requests. This is usually documented as a method in the API clients. To get an API Key [sign up](https://app.mailslurp.com/sign-up) and log in to the [MailSlurp Dashboard](https://app.mailslurp.com/) web app.  > Use `test` as an API Key when using the demo application.  ### Terminology - [Inbox](#/definitions/InboxDto)     - A unique email address     - Unlimited in number     - Can send and receive emails - [Email](#/definitions/Email)     - Belongs to an inbox     - Contains summary and body     - Raw content stored on S3     - Sometimes called a Message (legacy)  ### Example operation - Before you send or receive an email you need to create an inbox - It is recommended to create a new empty inbox for each test case run - The inbox email address is returned with the response for the GetInbox and CreateInbox operations. - You can send an email (from your application or MailSlurp) to that address and it will be saved in the matching inbox - To get the email, ListEmails in the inbox and get a list of the current emails. Then GetEmail by the id given. - Emails are asynchronous so **it is highly recommended to use the minCount** parameter when using ListEmails so that MailSlurp retries the database until your expected count is met. This means you should increase your request timeout accordingly. - retryTimeout is limited to 180seconds.   ### Email recipients MailSlurp uses AWS SES under the hood. Any email sent to the `mailslurp.com` domain will be intercepted and parsed. The email will be assigned to any *existing* MailSlurp inbox whose email address is found in any of the following headers: - To - X-Forwarded-To - Received (with \"for \" prefix)  ### Support **Issues** If you encounter issues please [contact the developers](mailto:jackmahoney212@gmail.com) or open a ticket in [GitHub](https://www.github.com/mailslurp).  **Contact** Please contact MailSlurp at any time via [the support page](https://www.mailslurp.com/support).
 *
 * OpenAPI spec version: 0.0.1-alpha
 * Contact: jackmahoney212@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace MailSlurpSDK;

use \MailSlurpSDK\Configuration;
use \MailSlurpSDK\ApiException;
use \MailSlurpSDK\ObjectSerializer;

/**
 * SendEmailsApiTest Class Doc Comment
 *
 * @category Class
 * @package  MailSlurpSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendEmailsApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for bulkCreateInboxesUsingPOST
     *
     * Bulk create Inboxes (email addresses).
     *
     */
    public function testBulkCreateInboxesUsingPOST()
    {
    }

    /**
     * Test case for bulkSendEmailsUsingPOST
     *
     * Bulk Send Emails.
     *
     */
    public function testBulkSendEmailsUsingPOST()
    {
    }

    /**
     * Test case for createInboxUsingPOST
     *
     * Create an Inbox (email address).
     *
     */
    public function testCreateInboxUsingPOST()
    {
    }

    /**
     * Test case for sendEmailUsingPOST
     *
     * Send Email.
     *
     */
    public function testSendEmailUsingPOST()
    {
    }
}
