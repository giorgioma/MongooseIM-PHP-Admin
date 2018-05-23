# MongooseIM\Admin\SessionManagementApi

All URIs are relative to *http://localhost:8088/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sessionsXMPPHostGet**](SessionManagementApi.md#sessionsXMPPHostGet) | **GET** /sessions/{XMPPHost} | 
[**sessionsXMPPHostUsernameResourceDelete**](SessionManagementApi.md#sessionsXMPPHostUsernameResourceDelete) | **DELETE** /sessions/{XMPPHost}/{username}/{resource} | 


# **sessionsXMPPHostGet**
> string[] sessionsXMPPHostGet($xmpp_host)



Retrieve a list of sessions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\SessionManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.

try {
    $result = $api_instance->sessionsXMPPHostGet($xmpp_host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionManagementApi->sessionsXMPPHostGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionsXMPPHostUsernameResourceDelete**
> string sessionsXMPPHostUsernameResourceDelete($xmpp_host, $username, $resource)



Terminate this session (connection).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\SessionManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$username = "username_example"; // string | The leading part of a user's JID.
$resource = "resource_example"; // string | A resource name for the given user.

try {
    $result = $api_instance->sessionsXMPPHostUsernameResourceDelete($xmpp_host, $username, $resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionManagementApi->sessionsXMPPHostUsernameResourceDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **username** | **string**| The leading part of a user&#39;s JID. |
 **resource** | **string**| A resource name for the given user. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

