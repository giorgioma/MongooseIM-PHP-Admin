# MongooseIM\Admin\UserManagementApi

All URIs are relative to *http://localhost:8088/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersXMPPHostGet**](UserManagementApi.md#usersXMPPHostGet) | **GET** /users/{XMPPHost} | 
[**usersXMPPHostPost**](UserManagementApi.md#usersXMPPHostPost) | **POST** /users/{XMPPHost} | 
[**usersXMPPHostUsernameDelete**](UserManagementApi.md#usersXMPPHostUsernameDelete) | **DELETE** /users/{XMPPHost}/{username} | 
[**usersXMPPHostUsernamePut**](UserManagementApi.md#usersXMPPHostUsernamePut) | **PUT** /users/{XMPPHost}/{username} | 


# **usersXMPPHostGet**
> string[] usersXMPPHostGet($xmpp_host)



Retrieves a list of users registered under the given XMPP hostname.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\UserManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.

try {
    $result = $api_instance->usersXMPPHostGet($xmpp_host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->usersXMPPHostGet: ', $e->getMessage(), PHP_EOL;
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

# **usersXMPPHostPost**
> string usersXMPPHostPost($xmpp_host, $credentials)



Register a user under the given domain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\UserManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$credentials = new \MongooseIM\Admin\Models\Credentials(); // \MongooseIM\Admin\Models\Credentials | User's name and password

try {
    $result = $api_instance->usersXMPPHostPost($xmpp_host, $credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->usersXMPPHostPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **credentials** | [**\MongooseIM\Admin\Models\Credentials**](../Model/\MongooseIM\Admin\Models\Credentials.md)| User&#39;s name and password |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersXMPPHostUsernameDelete**
> string usersXMPPHostUsernameDelete($xmpp_host, $username)



Cancel a user's registration under the given domain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\UserManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$username = "username_example"; // string | The username part of the user's JID

try {
    $result = $api_instance->usersXMPPHostUsernameDelete($xmpp_host, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->usersXMPPHostUsernameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **username** | **string**| The username part of the user&#39;s JID |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersXMPPHostUsernamePut**
> usersXMPPHostUsernamePut($xmpp_host, $username, $password)



Change the user's password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\UserManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$username = "username_example"; // string | The username part of the user's JID
$password = new \MongooseIM\Admin\Models\Password(); // \MongooseIM\Admin\Models\Password | The new password for the user

try {
    $api_instance->usersXMPPHostUsernamePut($xmpp_host, $username, $password);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->usersXMPPHostUsernamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **username** | **string**| The username part of the user&#39;s JID |
 **password** | [**\MongooseIM\Admin\Models\Password**](../Model/\MongooseIM\Admin\Models\Password.md)| The new password for the user |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

