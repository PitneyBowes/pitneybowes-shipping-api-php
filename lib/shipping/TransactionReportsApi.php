<?php
/**
 * TransactionReportsApi
 * PHP version 5
 *
 * @category Class
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shipping API
 *
 * Shipping API Sample.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@pb.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace pitneybowesShipping\shipping;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use pitneybowesShipping\ApiException;
use pitneybowesShipping\Configuration;
use pitneybowesShipping\HeaderSelector;
use pitneybowesShipping\ObjectSerializer;

/**
 * TransactionReportsApi Class Doc Comment
 *
 * @category Class
 * @package  pitneybowesShipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionReportsApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getTransactionReport
     *
     * This operation retrieves all transactions for a specified period of time.
     *
     * @param  string $developer_id developerId (required)
     * @param  bool $x_pb_unified_error_structure Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. (optional, default to true)
     * @param  \DateTime $from_date fromDate (optional)
     * @param  int $ship_details ship_details (optional, default to 0)
     * @param  int $page page (optional)
     * @param  int $size size (optional, default to 20)
     * @param  string $print_status printStatus (optional)
     * @param  \DateTime $to_date toDate (optional)
     * @param  string $transaction_type transactionType (optional)
     * @param  string $merchant_id The value of the postalReportingNumber element in the [merchant object](https://shipping.pitneybowes.com/reference/resource-objects.html). This value is also the merchant&#39;s Shipper ID. (optional)
     * @param  string $sort Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc). Use the following form-  * **sort&#x3D;&lt;property_name&gt;,&lt;sort_direction&gt;** For example- **sort&#x3D;transactionId,desc** (optional)
     * @param  string $parcel_tracking_number Parcel tracking number of the shipment. (optional)
     * @param  string $transaction_id The unique string that identifies all the transactions associated with a given shipment. The string comprises the developer ID and the shipment&#39;s X-PB-TransactionId, separated by an underscore (_). For example-  * **transactionId&#x3D;44397664_ad5aa07-ad7414-a78a-c22b3** (optional)
     *
     * @throws \pitneybowesShipping\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport|\pitneybowesShipping\shippingApi.model\Errors
     */
    public function getTransactionReport($developer_id, $x_pb_unified_error_structure = true, $from_date = null, $ship_details = 0, $page = null, $size = 20, $print_status = null, $to_date = null, $transaction_type = null, $merchant_id = null, $sort = null, $parcel_tracking_number = null, $transaction_id = null)
    {
        list($response) = $this->getTransactionReportWithHttpInfo($developer_id, $x_pb_unified_error_structure, $from_date, $ship_details, $page, $size, $print_status, $to_date, $transaction_type, $merchant_id, $sort, $parcel_tracking_number, $transaction_id);
        return $response;
    }

    /**
     * Operation getTransactionReportWithHttpInfo
     *
     * This operation retrieves all transactions for a specified period of time.
     *
     * @param  string $developer_id developerId (required)
     * @param  bool $x_pb_unified_error_structure Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. (optional, default to true)
     * @param  \DateTime $from_date fromDate (optional)
     * @param  int $ship_details (optional, default to 0)
     * @param  int $page (optional)
     * @param  int $size (optional, default to 20)
     * @param  string $print_status printStatus (optional)
     * @param  \DateTime $to_date toDate (optional)
     * @param  string $transaction_type transactionType (optional)
     * @param  string $merchant_id The value of the postalReportingNumber element in the [merchant object](https://shipping.pitneybowes.com/reference/resource-objects.html). This value is also the merchant&#39;s Shipper ID. (optional)
     * @param  string $sort Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc). Use the following form-  * **sort&#x3D;&lt;property_name&gt;,&lt;sort_direction&gt;** For example- **sort&#x3D;transactionId,desc** (optional)
     * @param  string $parcel_tracking_number Parcel tracking number of the shipment. (optional)
     * @param  string $transaction_id The unique string that identifies all the transactions associated with a given shipment. The string comprises the developer ID and the shipment&#39;s X-PB-TransactionId, separated by an underscore (_). For example-  * **transactionId&#x3D;44397664_ad5aa07-ad7414-a78a-c22b3** (optional)
     *
     * @throws \pitneybowesShipping\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport|\pitneybowesShipping\shippingApi.model\Errors, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionReportWithHttpInfo($developer_id, $x_pb_unified_error_structure = true, $from_date = null, $ship_details = 0, $page = null, $size = 20, $print_status = null, $to_date = null, $transaction_type = null, $merchant_id = null, $sort = null, $parcel_tracking_number = null, $transaction_id = null)
    {
        $request = $this->getTransactionReportRequest($developer_id, $x_pb_unified_error_structure, $from_date, $ship_details, $page, $size, $print_status, $to_date, $transaction_type, $merchant_id, $sort, $parcel_tracking_number, $transaction_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\pitneybowesShipping\shippingApi.model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\pitneybowesShipping\shippingApi.model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\pitneybowesShipping\shippingApi.model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTransactionReportAsync
     *
     * This operation retrieves all transactions for a specified period of time.
     *
     * @param  string $developer_id developerId (required)
     * @param  bool $x_pb_unified_error_structure Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. (optional, default to true)
     * @param  \DateTime $from_date fromDate (optional)
     * @param  int $ship_details (optional, default to 0)
     * @param  int $page (optional)
     * @param  int $size (optional, default to 20)
     * @param  string $print_status printStatus (optional)
     * @param  \DateTime $to_date toDate (optional)
     * @param  string $transaction_type transactionType (optional)
     * @param  string $merchant_id The value of the postalReportingNumber element in the [merchant object](https://shipping.pitneybowes.com/reference/resource-objects.html). This value is also the merchant&#39;s Shipper ID. (optional)
     * @param  string $sort Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc). Use the following form-  * **sort&#x3D;&lt;property_name&gt;,&lt;sort_direction&gt;** For example- **sort&#x3D;transactionId,desc** (optional)
     * @param  string $parcel_tracking_number Parcel tracking number of the shipment. (optional)
     * @param  string $transaction_id The unique string that identifies all the transactions associated with a given shipment. The string comprises the developer ID and the shipment&#39;s X-PB-TransactionId, separated by an underscore (_). For example-  * **transactionId&#x3D;44397664_ad5aa07-ad7414-a78a-c22b3** (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionReportAsync($developer_id, $x_pb_unified_error_structure = true, $from_date = null, $ship_details = 0, $page = null, $size = 20, $print_status = null, $to_date = null, $transaction_type = null, $merchant_id = null, $sort = null, $parcel_tracking_number = null, $transaction_id = null)
    {
        return $this->getTransactionReportAsyncWithHttpInfo($developer_id, $x_pb_unified_error_structure, $from_date, $ship_details, $page, $size, $print_status, $to_date, $transaction_type, $merchant_id, $sort, $parcel_tracking_number, $transaction_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTransactionReportAsyncWithHttpInfo
     *
     * This operation retrieves all transactions for a specified period of time.
     *
     * @param  string $developer_id developerId (required)
     * @param  bool $x_pb_unified_error_structure Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. (optional, default to true)
     * @param  \DateTime $from_date fromDate (optional)
     * @param  int $ship_details (optional, default to 0)
     * @param  int $page (optional)
     * @param  int $size (optional, default to 20)
     * @param  string $print_status printStatus (optional)
     * @param  \DateTime $to_date toDate (optional)
     * @param  string $transaction_type transactionType (optional)
     * @param  string $merchant_id The value of the postalReportingNumber element in the [merchant object](https://shipping.pitneybowes.com/reference/resource-objects.html). This value is also the merchant&#39;s Shipper ID. (optional)
     * @param  string $sort Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc). Use the following form-  * **sort&#x3D;&lt;property_name&gt;,&lt;sort_direction&gt;** For example- **sort&#x3D;transactionId,desc** (optional)
     * @param  string $parcel_tracking_number Parcel tracking number of the shipment. (optional)
     * @param  string $transaction_id The unique string that identifies all the transactions associated with a given shipment. The string comprises the developer ID and the shipment&#39;s X-PB-TransactionId, separated by an underscore (_). For example-  * **transactionId&#x3D;44397664_ad5aa07-ad7414-a78a-c22b3** (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionReportAsyncWithHttpInfo($developer_id, $x_pb_unified_error_structure = true, $from_date = null, $ship_details = 0, $page = null, $size = 20, $print_status = null, $to_date = null, $transaction_type = null, $merchant_id = null, $sort = null, $parcel_tracking_number = null, $transaction_id = null)
    {
        $returnType = '\pitneybowesShipping\shippingApi.model\PageRealTransactionDetailReport';
        $request = $this->getTransactionReportRequest($developer_id, $x_pb_unified_error_structure, $from_date, $ship_details, $page, $size, $print_status, $to_date, $transaction_type, $merchant_id, $sort, $parcel_tracking_number, $transaction_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'getTransactionReport'
     *
     * @param  string $developer_id developerId (required)
     * @param  bool $x_pb_unified_error_structure Set this to true to use the standard [error object](https://shipping.pitneybowes.com/reference/error-object.html#standard-error-object) if an error occurs. (optional, default to true)
     * @param  \DateTime $from_date fromDate (optional)
     * @param  int $ship_details (optional, default to 0)
     * @param  int $page (optional)
     * @param  int $size (optional, default to 20)
     * @param  string $print_status printStatus (optional)
     * @param  \DateTime $to_date toDate (optional)
     * @param  string $transaction_type transactionType (optional)
     * @param  string $merchant_id The value of the postalReportingNumber element in the [merchant object](https://shipping.pitneybowes.com/reference/resource-objects.html). This value is also the merchant&#39;s Shipper ID. (optional)
     * @param  string $sort Defines a property to sort on and the sort order. Sort order can be ascending (asc) or descending (desc). Use the following form-  * **sort&#x3D;&lt;property_name&gt;,&lt;sort_direction&gt;** For example- **sort&#x3D;transactionId,desc** (optional)
     * @param  string $parcel_tracking_number Parcel tracking number of the shipment. (optional)
     * @param  string $transaction_id The unique string that identifies all the transactions associated with a given shipment. The string comprises the developer ID and the shipment&#39;s X-PB-TransactionId, separated by an underscore (_). For example-  * **transactionId&#x3D;44397664_ad5aa07-ad7414-a78a-c22b3** (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTransactionReportRequest($developer_id, $x_pb_unified_error_structure = true, $from_date = null, $ship_details = 0, $page = null, $size = 20, $print_status = null, $to_date = null, $transaction_type = null, $merchant_id = null, $sort = null, $parcel_tracking_number = null, $transaction_id = null)
    {
        // verify the required parameter 'developer_id' is set
        if ($developer_id === null || (is_array($developer_id) && count($developer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $developer_id when calling getTransactionReport'
            );
        }

        $resourcePath = '/v4/ledger/developers/{developerId}/transactions/reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($from_date !== null) {
            if('form' === 'form' && is_array($from_date)) {
                foreach($from_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['fromDate'] = $from_date;
            }
        }
        // query params
        if ($ship_details !== null) {
            if('form' === 'form' && is_array($ship_details)) {
                foreach($ship_details as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['shipDetails'] = $ship_details;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($size !== null) {
            if('form' === 'form' && is_array($size)) {
                foreach($size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['size'] = $size;
            }
        }
        // query params
        if ($print_status !== null) {
            if('form' === 'form' && is_array($print_status)) {
                foreach($print_status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['printStatus'] = $print_status;
            }
        }
        // query params
        if ($to_date !== null) {
            if('form' === 'form' && is_array($to_date)) {
                foreach($to_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['toDate'] = $to_date;
            }
        }
        // query params
        if ($transaction_type !== null) {
            if('form' === 'form' && is_array($transaction_type)) {
                foreach($transaction_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['transactionType'] = $transaction_type;
            }
        }
        // query params
        if ($merchant_id !== null) {
            if('form' === 'form' && is_array($merchant_id)) {
                foreach($merchant_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['merchantId'] = $merchant_id;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }
        // query params
        if ($parcel_tracking_number !== null) {
            if('form' === 'form' && is_array($parcel_tracking_number)) {
                foreach($parcel_tracking_number as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['parcelTrackingNumber'] = $parcel_tracking_number;
            }
        }

        // header params
        if ($x_pb_unified_error_structure !== null) {
            $headerParams['X-PB-UnifiedErrorStructure'] = ObjectSerializer::toHeaderValue($x_pb_unified_error_structure);
        }
        // header params
        if ($transaction_id !== null) {
            $headerParams['transactionId'] = ObjectSerializer::toHeaderValue($transaction_id);
        }

        // path params
        if ($developer_id !== null) {
            $resourcePath = str_replace(
                '{' . 'developerId' . '}',
                ObjectSerializer::toPathValue($developer_id),
                $resourcePath
            );
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
