# MongooseIM\Admin\OnetooneMessagesApi

All URIs are relative to *http://localhost:8088/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messagesOwnerGet**](OnetooneMessagesApi.md#messagesOwnerGet) | **GET** /messages/{owner} | 
[**messagesOwnerWithGet**](OnetooneMessagesApi.md#messagesOwnerWithGet) | **GET** /messages/{owner}/{with} | 
[**messagesPost**](OnetooneMessagesApi.md#messagesPost) | **POST** /messages | 


# **messagesOwnerGet**
> \MongooseIM\Admin\Models\MessageList messagesOwnerGet($owner, $before, $limit)



Retrieve recent messages from the given user's archive. This works only with `mod_mam` enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\OnetooneMessagesApi();
$owner = "owner_example"; // string | User's JID (f.e. alice@wonderland.lit)
$before = 56; // int | Messages earlier then the given timestamp (defaults to now)
$limit = 56; // int | An upper bound on the number of messages to fetch from the archive (defaults to 100)

try {
    $result = $api_instance->messagesOwnerGet($owner, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnetooneMessagesApi->messagesOwnerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| User&#39;s JID (f.e. alice@wonderland.lit) |
 **before** | **int**| Messages earlier then the given timestamp (defaults to now) | [optional]
 **limit** | **int**| An upper bound on the number of messages to fetch from the archive (defaults to 100) | [optional]

### Return type

[**\MongooseIM\Admin\Models\MessageList**](../Model/MessageList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesOwnerWithGet**
> \MongooseIM\Admin\Models\MessageList messagesOwnerWithGet($owner, $with, $before, $limit)



Retrieve recent message from archive, only those exchanged with the given contact. This works only with `mod_mam` enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\OnetooneMessagesApi();
$owner = "owner_example"; // string | User's JID (f.e. alice@wonderland.lit)
$with = "with_example"; // string | The other party's JID
$before = 56; // int | Messages earlier then the given timestamp (defaults to now).
$limit = 56; // int | An upper bound on the number of messages to fetch from the archive (defaults to 100)

try {
    $result = $api_instance->messagesOwnerWithGet($owner, $with, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnetooneMessagesApi->messagesOwnerWithGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| User&#39;s JID (f.e. alice@wonderland.lit) |
 **with** | **string**| The other party&#39;s JID |
 **before** | **int**| Messages earlier then the given timestamp (defaults to now). | [optional]
 **limit** | **int**| An upper bound on the number of messages to fetch from the archive (defaults to 100) | [optional]

### Return type

[**\MongooseIM\Admin\Models\MessageList**](../Model/MessageList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesPost**
> messagesPost($message)



Send a chat message from one user to another.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\OnetooneMessagesApi();
$message = new \MongooseIM\Admin\Models\Message(); // \MongooseIM\Admin\Models\Message | The chat stanza (with a sender and recipient)

try {
    $api_instance->messagesPost($message);
} catch (Exception $e) {
    echo 'Exception when calling OnetooneMessagesApi->messagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\MongooseIM\Admin\Models\Message**](../Model/\MongooseIM\Admin\Models\Message.md)| The chat stanza (with a sender and recipient) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

