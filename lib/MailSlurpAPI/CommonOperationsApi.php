<?php
/**
 * CommonOperationsApi
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
 * For extensive guides and examples see [full documentation](https://www.mailslurp.com/developers). [Create an account](https://app.mailslurp.com) in the MailSlurp Dashboard to [view your API Key](https://app). For all bugs, feature requests, or help please [see support](https://www.mailslurp.com/support).
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
 * CommonOperationsApi Class Doc Comment
 *
 * @category Class
 * @package  MailSlurpSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommonOperationsApi
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
     * Operation createNewEmailAddressUsingPOST
     *
     * Create new email address
     *
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurpSDK\MailSlurpModels\Inbox
     */
    public function createNewEmailAddressUsingPOST()
    {
        list($response) = $this->createNewEmailAddressUsingPOSTWithHttpInfo();
        return $response;
    }

    /**
     * Operation createNewEmailAddressUsingPOSTWithHttpInfo
     *
     * Create new email address
     *
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurpSDK\MailSlurpModels\Inbox, HTTP status code, HTTP response headers (array of strings)
     */
    public function createNewEmailAddressUsingPOSTWithHttpInfo()
    {
        $returnType = '\MailSlurpSDK\MailSlurpModels\Inbox';
        $request = $this->createNewEmailAddressUsingPOSTRequest();

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
                        '\MailSlurpSDK\MailSlurpModels\Inbox',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createNewEmailAddressUsingPOSTAsync
     *
     * Create new email address
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createNewEmailAddressUsingPOSTAsync()
    {
        return $this->createNewEmailAddressUsingPOSTAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createNewEmailAddressUsingPOSTAsyncWithHttpInfo
     *
     * Create new email address
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createNewEmailAddressUsingPOSTAsyncWithHttpInfo()
    {
        $returnType = '\MailSlurpSDK\MailSlurpModels\Inbox';
        $request = $this->createNewEmailAddressUsingPOSTRequest();

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
     * Create request for operation 'createNewEmailAddressUsingPOST'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createNewEmailAddressUsingPOSTRequest()
    {

        $resourcePath = '/newEmailAddress';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation fetchLatestEmailUsingGET
     *
     * Fetch inbox's latest email or if empty wait for email to arrive
     *
     * @param  string $inbox_email_address Email address of the inbox we are fetching emails from (optional)
     * @param  string $inbox_id Id of the inbox we are fetching emails from (optional)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurpSDK\MailSlurpModels\Email
     */
    public function fetchLatestEmailUsingGET($inbox_email_address = null, $inbox_id = null)
    {
        list($response) = $this->fetchLatestEmailUsingGETWithHttpInfo($inbox_email_address, $inbox_id);
        return $response;
    }

    /**
     * Operation fetchLatestEmailUsingGETWithHttpInfo
     *
     * Fetch inbox's latest email or if empty wait for email to arrive
     *
     * @param  string $inbox_email_address Email address of the inbox we are fetching emails from (optional)
     * @param  string $inbox_id Id of the inbox we are fetching emails from (optional)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurpSDK\MailSlurpModels\Email, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchLatestEmailUsingGETWithHttpInfo($inbox_email_address = null, $inbox_id = null)
    {
        $returnType = '\MailSlurpSDK\MailSlurpModels\Email';
        $request = $this->fetchLatestEmailUsingGETRequest($inbox_email_address, $inbox_id);

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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MailSlurpSDK\MailSlurpModels\Email',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fetchLatestEmailUsingGETAsync
     *
     * Fetch inbox's latest email or if empty wait for email to arrive
     *
     * @param  string $inbox_email_address Email address of the inbox we are fetching emails from (optional)
     * @param  string $inbox_id Id of the inbox we are fetching emails from (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchLatestEmailUsingGETAsync($inbox_email_address = null, $inbox_id = null)
    {
        return $this->fetchLatestEmailUsingGETAsyncWithHttpInfo($inbox_email_address, $inbox_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchLatestEmailUsingGETAsyncWithHttpInfo
     *
     * Fetch inbox's latest email or if empty wait for email to arrive
     *
     * @param  string $inbox_email_address Email address of the inbox we are fetching emails from (optional)
     * @param  string $inbox_id Id of the inbox we are fetching emails from (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchLatestEmailUsingGETAsyncWithHttpInfo($inbox_email_address = null, $inbox_id = null)
    {
        $returnType = '\MailSlurpSDK\MailSlurpModels\Email';
        $request = $this->fetchLatestEmailUsingGETRequest($inbox_email_address, $inbox_id);

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
     * Create request for operation 'fetchLatestEmailUsingGET'
     *
     * @param  string $inbox_email_address Email address of the inbox we are fetching emails from (optional)
     * @param  string $inbox_id Id of the inbox we are fetching emails from (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fetchLatestEmailUsingGETRequest($inbox_email_address = null, $inbox_id = null)
    {

        $resourcePath = '/fetchLatestEmail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($inbox_email_address !== null) {
            $queryParams['inboxEmailAddress'] = ObjectSerializer::toQueryValue($inbox_email_address);
        }
        // query params
        if ($inbox_id !== null) {
            $queryParams['inboxId'] = ObjectSerializer::toQueryValue($inbox_id);
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendEmailSimpleUsingPOST
     *
     * Send an email from a random email address
     *
     * @param  \MailSlurpSDK\MailSlurpModels\SendEmailOptions $send_email_options sendEmailOptions (required)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sendEmailSimpleUsingPOST($send_email_options)
    {
        $this->sendEmailSimpleUsingPOSTWithHttpInfo($send_email_options);
    }

    /**
     * Operation sendEmailSimpleUsingPOSTWithHttpInfo
     *
     * Send an email from a random email address
     *
     * @param  \MailSlurpSDK\MailSlurpModels\SendEmailOptions $send_email_options sendEmailOptions (required)
     *
     * @throws \MailSlurpSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendEmailSimpleUsingPOSTWithHttpInfo($send_email_options)
    {
        $returnType = '';
        $request = $this->sendEmailSimpleUsingPOSTRequest($send_email_options);

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
     * Operation sendEmailSimpleUsingPOSTAsync
     *
     * Send an email from a random email address
     *
     * @param  \MailSlurpSDK\MailSlurpModels\SendEmailOptions $send_email_options sendEmailOptions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendEmailSimpleUsingPOSTAsync($send_email_options)
    {
        return $this->sendEmailSimpleUsingPOSTAsyncWithHttpInfo($send_email_options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendEmailSimpleUsingPOSTAsyncWithHttpInfo
     *
     * Send an email from a random email address
     *
     * @param  \MailSlurpSDK\MailSlurpModels\SendEmailOptions $send_email_options sendEmailOptions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendEmailSimpleUsingPOSTAsyncWithHttpInfo($send_email_options)
    {
        $returnType = '';
        $request = $this->sendEmailSimpleUsingPOSTRequest($send_email_options);

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
     * Create request for operation 'sendEmailSimpleUsingPOST'
     *
     * @param  \MailSlurpSDK\MailSlurpModels\SendEmailOptions $send_email_options sendEmailOptions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendEmailSimpleUsingPOSTRequest($send_email_options)
    {
        // verify the required parameter 'send_email_options' is set
        if ($send_email_options === null || (is_array($send_email_options) && count($send_email_options) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $send_email_options when calling sendEmailSimpleUsingPOST'
            );
        }

        $resourcePath = '/sendEmail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($send_email_options)) {
            $_tempBody = $send_email_options;
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