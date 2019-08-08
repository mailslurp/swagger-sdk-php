<?php
/**
 * BulkApi
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
 * Do not edit the class manually.
 */

namespace MailSlurpSDK\MailSlurpAPI;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MailSlurpSDK\ApiException;
use MailSlurpSDK\Configuration;
use MailSlurpSDK\HeaderSelector;
use MailSlurpSDK\ObjectSerializer;

/**
 * BulkApi Class Doc Comment
 *
 * @category Class
 * @package  MailSlurpSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulkApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation bulkCreateInboxesUsingPOST
     *
     * Bulk create Inboxes (email addresses)
     *
     * @param  int $count Number of inboxes to be created in bulk (required)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurpSDK\MailSlurpModels\Inbox[]
     */
    public function bulkCreateInboxesUsingPOST($count)
    {
        list($response) = $this->bulkCreateInboxesUsingPOSTWithHttpInfo($count);
        return $response;
    }

    /**
     * Operation bulkCreateInboxesUsingPOSTWithHttpInfo
     *
     * Bulk create Inboxes (email addresses)
     *
     * @param  int $count Number of inboxes to be created in bulk (required)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurpSDK\MailSlurpModels\Inbox[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bulkCreateInboxesUsingPOSTWithHttpInfo($count)
    {
        $returnType = '\MailSlurpSDK\MailSlurpModels\Inbox[]';
        $request = $this->bulkCreateInboxesUsingPOSTRequest($count);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MailSlurpSDK\MailSlurpModels\Inbox[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bulkCreateInboxesUsingPOSTAsync
     *
     * Bulk create Inboxes (email addresses)
     *
     * @param  int $count Number of inboxes to be created in bulk (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkCreateInboxesUsingPOSTAsync($count)
    {
        return $this->bulkCreateInboxesUsingPOSTAsyncWithHttpInfo($count)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkCreateInboxesUsingPOSTAsyncWithHttpInfo
     *
     * Bulk create Inboxes (email addresses)
     *
     * @param  int $count Number of inboxes to be created in bulk (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkCreateInboxesUsingPOSTAsyncWithHttpInfo($count)
    {
        $returnType = '\MailSlurpSDK\MailSlurpModels\Inbox[]';
        $request = $this->bulkCreateInboxesUsingPOSTRequest($count);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bulkCreateInboxesUsingPOST'
     *
     * @param  int $count Number of inboxes to be created in bulk (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bulkCreateInboxesUsingPOSTRequest($count)
    {
        // verify the required parameter 'count' is set
        if ($count === null || (is_array($count) && count($count) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $count when calling bulkCreateInboxesUsingPOST'
            );
        }

        $resourcePath = '/bulk/inboxes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            $queryParams['count'] = ObjectSerializer::toQueryValue($count);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bulkDeleteInboxesUsingDELETE
     *
     * Bulk Delete Inboxes
     *
     * @param  string[] $ids ids (required)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function bulkDeleteInboxesUsingDELETE($ids)
    {
        $this->bulkDeleteInboxesUsingDELETEWithHttpInfo($ids);
    }

    /**
     * Operation bulkDeleteInboxesUsingDELETEWithHttpInfo
     *
     * Bulk Delete Inboxes
     *
     * @param  string[] $ids ids (required)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function bulkDeleteInboxesUsingDELETEWithHttpInfo($ids)
    {
        $returnType = '';
        $request = $this->bulkDeleteInboxesUsingDELETERequest($ids);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation bulkDeleteInboxesUsingDELETEAsync
     *
     * Bulk Delete Inboxes
     *
     * @param  string[] $ids ids (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkDeleteInboxesUsingDELETEAsync($ids)
    {
        return $this->bulkDeleteInboxesUsingDELETEAsyncWithHttpInfo($ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkDeleteInboxesUsingDELETEAsyncWithHttpInfo
     *
     * Bulk Delete Inboxes
     *
     * @param  string[] $ids ids (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkDeleteInboxesUsingDELETEAsyncWithHttpInfo($ids)
    {
        $returnType = '';
        $request = $this->bulkDeleteInboxesUsingDELETERequest($ids);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bulkDeleteInboxesUsingDELETE'
     *
     * @param  string[] $ids ids (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bulkDeleteInboxesUsingDELETERequest($ids)
    {
        // verify the required parameter 'ids' is set
        if ($ids === null || (is_array($ids) && count($ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ids when calling bulkDeleteInboxesUsingDELETE'
            );
        }

        $resourcePath = '/bulk/inboxes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($ids)) {
            $_tempBody = $ids;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bulkSendEmailsUsingPOST
     *
     * Bulk Send Emails
     *
     * @param  \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions $bulk_send_email_options bulkSendEmailOptions (required)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function bulkSendEmailsUsingPOST($bulk_send_email_options)
    {
        $this->bulkSendEmailsUsingPOSTWithHttpInfo($bulk_send_email_options);
    }

    /**
     * Operation bulkSendEmailsUsingPOSTWithHttpInfo
     *
     * Bulk Send Emails
     *
     * @param  \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions $bulk_send_email_options bulkSendEmailOptions (required)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function bulkSendEmailsUsingPOSTWithHttpInfo($bulk_send_email_options)
    {
        $returnType = '';
        $request = $this->bulkSendEmailsUsingPOSTRequest($bulk_send_email_options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation bulkSendEmailsUsingPOSTAsync
     *
     * Bulk Send Emails
     *
     * @param  \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions $bulk_send_email_options bulkSendEmailOptions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkSendEmailsUsingPOSTAsync($bulk_send_email_options)
    {
        return $this->bulkSendEmailsUsingPOSTAsyncWithHttpInfo($bulk_send_email_options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkSendEmailsUsingPOSTAsyncWithHttpInfo
     *
     * Bulk Send Emails
     *
     * @param  \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions $bulk_send_email_options bulkSendEmailOptions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkSendEmailsUsingPOSTAsyncWithHttpInfo($bulk_send_email_options)
    {
        $returnType = '';
        $request = $this->bulkSendEmailsUsingPOSTRequest($bulk_send_email_options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bulkSendEmailsUsingPOST'
     *
     * @param  \MailSlurpSDK\MailSlurpModels\BulkSendEmailOptions $bulk_send_email_options bulkSendEmailOptions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bulkSendEmailsUsingPOSTRequest($bulk_send_email_options)
    {
        // verify the required parameter 'bulk_send_email_options' is set
        if ($bulk_send_email_options === null || (is_array($bulk_send_email_options) && count($bulk_send_email_options) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $bulk_send_email_options when calling bulkSendEmailsUsingPOST'
            );
        }

        $resourcePath = '/bulk/send';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($bulk_send_email_options)) {
            $_tempBody = $bulk_send_email_options;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
