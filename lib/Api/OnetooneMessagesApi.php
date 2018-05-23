<?php
/**
 * OnetooneMessagesApi
 * PHP version 5
 *
 * @category Class
 * @package  MongooseIM\Admin
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MongooseIM's REST API for backend administration
 *
 * Explore MongooseIM features using our REST API.  If you are familiar with the `mongooseimctl` command, the provided control functionality will seem very similar. The response objects are modeled on the `ejabberd_commands` entries and print-outs from `mongooseimctl`.  Please note that many of the fields such as **username** or **caller** expect a **JID** (jabber identifier, f.e. **alice@wonderland.com**). There are two types of **JIDs**:   * **bare JID** - consists of **username** and **domain name** (XMPP host, usually the one set in your `ejabberd.cfg` file).   * **full JID** - is a **bare JID** with online user's resource to uniquely identify user's connection (f.e. **alice@wonderland.com/resource**).
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MongooseIM\Admin\Api;

use \MongooseIM\Admin\Configuration;
use \MongooseIM\Admin\ApiClient;
use \MongooseIM\Admin\ApiException;
use \MongooseIM\Admin\ObjectSerializer;

/**
 * OnetooneMessagesApi Class Doc Comment
 *
 * @category Class
 * @package  MongooseIM\Admin
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OnetooneMessagesApi
{

    /**
     * API Client
     *
     * @var \MongooseIM\Admin\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \MongooseIM\Admin\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\MongooseIM\Admin\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost:8088/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \MongooseIM\Admin\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \MongooseIM\Admin\ApiClient $apiClient set the API client
     *
     * @return OnetooneMessagesApi
     */
    public function setApiClient(\MongooseIM\Admin\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation messagesOwnerGet
     *
     * 
     *
     * @param string $owner User&#39;s JID (f.e. alice@wonderland.lit) (required)
     * @param int $before Messages earlier then the given timestamp (defaults to now) (optional)
     * @param int $limit An upper bound on the number of messages to fetch from the archive (defaults to 100) (optional)
     * @return \MongooseIM\Admin\Models\MessageList
     * @throws \MongooseIM\Admin\ApiException on non-2xx response
     */
    public function messagesOwnerGet($owner, $before = null, $limit = null)
    {
        list($response) = $this->messagesOwnerGetWithHttpInfo($owner, $before, $limit);
        return $response;
    }

    /**
     * Operation messagesOwnerGetWithHttpInfo
     *
     * 
     *
     * @param string $owner User&#39;s JID (f.e. alice@wonderland.lit) (required)
     * @param int $before Messages earlier then the given timestamp (defaults to now) (optional)
     * @param int $limit An upper bound on the number of messages to fetch from the archive (defaults to 100) (optional)
     * @return Array of \MongooseIM\Admin\Models\MessageList, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Admin\ApiException on non-2xx response
     */
    public function messagesOwnerGetWithHttpInfo($owner, $before = null, $limit = null)
    {
        // verify the required parameter 'owner' is set
        if ($owner === null) {
            throw new \InvalidArgumentException('Missing the required parameter $owner when calling messagesOwnerGet');
        }
        // parse inputs
        $resourcePath = "/messages/{owner}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($before !== null) {
            $queryParams['before'] = $this->apiClient->getSerializer()->toQueryValue($before);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // path params
        if ($owner !== null) {
            $resourcePath = str_replace(
                "{" . "owner" . "}",
                $this->apiClient->getSerializer()->toPathValue($owner),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Admin\Models\MessageList',
                '/messages/{owner}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Admin\Models\MessageList', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Admin\Models\MessageList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation messagesOwnerWithGet
     *
     * 
     *
     * @param string $owner User&#39;s JID (f.e. alice@wonderland.lit) (required)
     * @param string $with The other party&#39;s JID (required)
     * @param int $before Messages earlier then the given timestamp (defaults to now). (optional)
     * @param int $limit An upper bound on the number of messages to fetch from the archive (defaults to 100) (optional)
     * @return \MongooseIM\Admin\Models\MessageList
     * @throws \MongooseIM\Admin\ApiException on non-2xx response
     */
    public function messagesOwnerWithGet($owner, $with, $before = null, $limit = null)
    {
        list($response) = $this->messagesOwnerWithGetWithHttpInfo($owner, $with, $before, $limit);
        return $response;
    }

    /**
     * Operation messagesOwnerWithGetWithHttpInfo
     *
     * 
     *
     * @param string $owner User&#39;s JID (f.e. alice@wonderland.lit) (required)
     * @param string $with The other party&#39;s JID (required)
     * @param int $before Messages earlier then the given timestamp (defaults to now). (optional)
     * @param int $limit An upper bound on the number of messages to fetch from the archive (defaults to 100) (optional)
     * @return Array of \MongooseIM\Admin\Models\MessageList, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Admin\ApiException on non-2xx response
     */
    public function messagesOwnerWithGetWithHttpInfo($owner, $with, $before = null, $limit = null)
    {
        // verify the required parameter 'owner' is set
        if ($owner === null) {
            throw new \InvalidArgumentException('Missing the required parameter $owner when calling messagesOwnerWithGet');
        }
        // verify the required parameter 'with' is set
        if ($with === null) {
            throw new \InvalidArgumentException('Missing the required parameter $with when calling messagesOwnerWithGet');
        }
        // parse inputs
        $resourcePath = "/messages/{owner}/{with}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($before !== null) {
            $queryParams['before'] = $this->apiClient->getSerializer()->toQueryValue($before);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // path params
        if ($owner !== null) {
            $resourcePath = str_replace(
                "{" . "owner" . "}",
                $this->apiClient->getSerializer()->toPathValue($owner),
                $resourcePath
            );
        }
        // path params
        if ($with !== null) {
            $resourcePath = str_replace(
                "{" . "with" . "}",
                $this->apiClient->getSerializer()->toPathValue($with),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Admin\Models\MessageList',
                '/messages/{owner}/{with}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Admin\Models\MessageList', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Admin\Models\MessageList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation messagesPost
     *
     * 
     *
     * @param \MongooseIM\Admin\Models\Message $message The chat stanza (with a sender and recipient) (required)
     * @return void
     * @throws \MongooseIM\Admin\ApiException on non-2xx response
     */
    public function messagesPost($message)
    {
        list($response) = $this->messagesPostWithHttpInfo($message);
        return $response;
    }

    /**
     * Operation messagesPostWithHttpInfo
     *
     * 
     *
     * @param \MongooseIM\Admin\Models\Message $message The chat stanza (with a sender and recipient) (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Admin\ApiException on non-2xx response
     */
    public function messagesPostWithHttpInfo($message)
    {
        // verify the required parameter 'message' is set
        if ($message === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message when calling messagesPost');
        }
        // parse inputs
        $resourcePath = "/messages";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($message)) {
            $_tempBody = $message;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/messages'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
