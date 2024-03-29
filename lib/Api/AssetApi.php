<?php
/**
 * AssetApi
 * PHP version 5
 *
 * @category Class
 * @package  VereTech\SyncroMSP_PHPclient\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Syncro
 *
 * Welcome to the official Syncro API Docs.  To use these docs, you will need an active Syncro account. You can sign up for one here: [Syncro](https://syncromsp.com)  If you already have an active account, fill in your subdomain below and then click \"Authorize\" and fill in your api-key. The key is specific to your user account so it is found on the your user profile page.  Please review the [API License Agreement](https://syncromsp.com/syncromsp-api-license-agreement/) before using our API. By accessing our API, you are agreeing to the API License Agreement.  Please note there is a rate limit of 180 requests per minute per IP address on API Usage.
 *
 * OpenAPI spec version: v1
 * Contact: help@syncromsp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VereTech\SyncroMSP_PHPclient\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use VereTech\SyncroMSP_PHPclient\Client\ApiException;
use VereTech\SyncroMSP_PHPclient\Client\Configuration;
use VereTech\SyncroMSP_PHPclient\Client\HeaderSelector;
use VereTech\SyncroMSP_PHPclient\Client\ObjectSerializer;

/**
 * AssetApi Class Doc Comment
 *
 * @category Class
 * @package  VereTech\SyncroMSP_PHPclient\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetApi
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
     * Operation customerAssetsGet
     *
     * Returns a paginated list of Assets
     *
     * @param  bool $snmp_enabled Any assets with SNMP enabled (optional)
     * @param  int $customer_id Any assets attached to a Customer ID (optional)
     * @param  int $asset_type_id Any assets attached to an Asset Type ID (optional)
     * @param  string $query Search query (optional)
     * @param  int $page Returns provided page of results, each &#x27;page&#x27; contains 25 results (optional)
     *
     * @throws \VereTech\SyncroMSP_PHPclient\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function customerAssetsGet($snmp_enabled = null, $customer_id = null, $asset_type_id = null, $query = null, $page = null)
    {
        $this->customerAssetsGetWithHttpInfo($snmp_enabled, $customer_id, $asset_type_id, $query, $page);
    }

    /**
     * Operation customerAssetsGetWithHttpInfo
     *
     * Returns a paginated list of Assets
     *
     * @param  bool $snmp_enabled Any assets with SNMP enabled (optional)
     * @param  int $customer_id Any assets attached to a Customer ID (optional)
     * @param  int $asset_type_id Any assets attached to an Asset Type ID (optional)
     * @param  string $query Search query (optional)
     * @param  int $page Returns provided page of results, each &#x27;page&#x27; contains 25 results (optional)
     *
     * @throws \VereTech\SyncroMSP_PHPclient\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function customerAssetsGetWithHttpInfo($snmp_enabled = null, $customer_id = null, $asset_type_id = null, $query = null, $page = null)
    {
        $returnType = '';
        $request = $this->customerAssetsGetRequest($snmp_enabled, $customer_id, $asset_type_id, $query, $page);

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
     * Operation customerAssetsGetAsync
     *
     * Returns a paginated list of Assets
     *
     * @param  bool $snmp_enabled Any assets with SNMP enabled (optional)
     * @param  int $customer_id Any assets attached to a Customer ID (optional)
     * @param  int $asset_type_id Any assets attached to an Asset Type ID (optional)
     * @param  string $query Search query (optional)
     * @param  int $page Returns provided page of results, each &#x27;page&#x27; contains 25 results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function customerAssetsGetAsync($snmp_enabled = null, $customer_id = null, $asset_type_id = null, $query = null, $page = null)
    {
        return $this->customerAssetsGetAsyncWithHttpInfo($snmp_enabled, $customer_id, $asset_type_id, $query, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation customerAssetsGetAsyncWithHttpInfo
     *
     * Returns a paginated list of Assets
     *
     * @param  bool $snmp_enabled Any assets with SNMP enabled (optional)
     * @param  int $customer_id Any assets attached to a Customer ID (optional)
     * @param  int $asset_type_id Any assets attached to an Asset Type ID (optional)
     * @param  string $query Search query (optional)
     * @param  int $page Returns provided page of results, each &#x27;page&#x27; contains 25 results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function customerAssetsGetAsyncWithHttpInfo($snmp_enabled = null, $customer_id = null, $asset_type_id = null, $query = null, $page = null)
    {
        $returnType = '';
        $request = $this->customerAssetsGetRequest($snmp_enabled, $customer_id, $asset_type_id, $query, $page);

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
     * Create request for operation 'customerAssetsGet'
     *
     * @param  bool $snmp_enabled Any assets with SNMP enabled (optional)
     * @param  int $customer_id Any assets attached to a Customer ID (optional)
     * @param  int $asset_type_id Any assets attached to an Asset Type ID (optional)
     * @param  string $query Search query (optional)
     * @param  int $page Returns provided page of results, each &#x27;page&#x27; contains 25 results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function customerAssetsGetRequest($snmp_enabled = null, $customer_id = null, $asset_type_id = null, $query = null, $page = null)
    {

        $resourcePath = '/customer_assets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($snmp_enabled !== null) {
            $queryParams['snmp_enabled'] = ObjectSerializer::toQueryValue($snmp_enabled, null);
        }
        // query params
        if ($customer_id !== null) {
            $queryParams['customer_id'] = ObjectSerializer::toQueryValue($customer_id, null);
        }
        // query params
        if ($asset_type_id !== null) {
            $queryParams['asset_type_id'] = ObjectSerializer::toQueryValue($asset_type_id, null);
        }
        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query, null);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
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
                []
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
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation customerAssetsIdGet
     *
     * Retrieves an Asset by ID
     *
     * @param  int $id id (required)
     *
     * @throws \VereTech\SyncroMSP_PHPclient\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001
     */
    public function customerAssetsIdGet($id)
    {
        list($response) = $this->customerAssetsIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation customerAssetsIdGetWithHttpInfo
     *
     * Retrieves an Asset by ID
     *
     * @param  int $id (required)
     *
     * @throws \VereTech\SyncroMSP_PHPclient\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function customerAssetsIdGetWithHttpInfo($id)
    {
        $returnType = '\VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001';
        $request = $this->customerAssetsIdGetRequest($id);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation customerAssetsIdGetAsync
     *
     * Retrieves an Asset by ID
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function customerAssetsIdGetAsync($id)
    {
        return $this->customerAssetsIdGetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation customerAssetsIdGetAsyncWithHttpInfo
     *
     * Retrieves an Asset by ID
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function customerAssetsIdGetAsyncWithHttpInfo($id)
    {
        $returnType = '\VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001';
        $request = $this->customerAssetsIdGetRequest($id);

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
     * Create request for operation 'customerAssetsIdGet'
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function customerAssetsIdGetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling customerAssetsIdGet'
            );
        }

        $resourcePath = '/customer_assets/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
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
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation customerAssetsIdPut
     *
     * Updates an existing Asset by ID
     *
     * @param  int $id id (required)
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsIdBody $body Asset object that needs to be updated (optional)
     *
     * @throws \VereTech\SyncroMSP_PHPclient\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001
     */
    public function customerAssetsIdPut($id, $body = null)
    {
        list($response) = $this->customerAssetsIdPutWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation customerAssetsIdPutWithHttpInfo
     *
     * Updates an existing Asset by ID
     *
     * @param  int $id (required)
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsIdBody $body Asset object that needs to be updated (optional)
     *
     * @throws \VereTech\SyncroMSP_PHPclient\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function customerAssetsIdPutWithHttpInfo($id, $body = null)
    {
        $returnType = '\VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001';
        $request = $this->customerAssetsIdPutRequest($id, $body);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation customerAssetsIdPutAsync
     *
     * Updates an existing Asset by ID
     *
     * @param  int $id (required)
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsIdBody $body Asset object that needs to be updated (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function customerAssetsIdPutAsync($id, $body = null)
    {
        return $this->customerAssetsIdPutAsyncWithHttpInfo($id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation customerAssetsIdPutAsyncWithHttpInfo
     *
     * Updates an existing Asset by ID
     *
     * @param  int $id (required)
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsIdBody $body Asset object that needs to be updated (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function customerAssetsIdPutAsyncWithHttpInfo($id, $body = null)
    {
        $returnType = '\VereTech\SyncroMSP_PHPclient\Client\Model\InlineResponse2001';
        $request = $this->customerAssetsIdPutRequest($id, $body);

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
     * Create request for operation 'customerAssetsIdPut'
     *
     * @param  int $id (required)
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsIdBody $body Asset object that needs to be updated (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function customerAssetsIdPutRequest($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling customerAssetsIdPut'
            );
        }

        $resourcePath = '/customer_assets/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation customerAssetsPost
     *
     * Creates an Asset
     *
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsBody $body Asset object that needs to be added (optional)
     *
     * @throws \VereTech\SyncroMSP_PHPclient\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function customerAssetsPost($body = null)
    {
        $this->customerAssetsPostWithHttpInfo($body);
    }

    /**
     * Operation customerAssetsPostWithHttpInfo
     *
     * Creates an Asset
     *
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsBody $body Asset object that needs to be added (optional)
     *
     * @throws \VereTech\SyncroMSP_PHPclient\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function customerAssetsPostWithHttpInfo($body = null)
    {
        $returnType = '';
        $request = $this->customerAssetsPostRequest($body);

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
     * Operation customerAssetsPostAsync
     *
     * Creates an Asset
     *
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsBody $body Asset object that needs to be added (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function customerAssetsPostAsync($body = null)
    {
        return $this->customerAssetsPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation customerAssetsPostAsyncWithHttpInfo
     *
     * Creates an Asset
     *
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsBody $body Asset object that needs to be added (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function customerAssetsPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '';
        $request = $this->customerAssetsPostRequest($body);

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
     * Create request for operation 'customerAssetsPost'
     *
     * @param  \VereTech\SyncroMSP_PHPclient\Client\Model\CustomerAssetsBody $body Asset object that needs to be added (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function customerAssetsPostRequest($body = null)
    {

        $resourcePath = '/customer_assets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
