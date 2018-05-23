# MongooseIM\Admin\ContactsApi

All URIs are relative to *http://localhost:8088/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactsUserContactDelete**](ContactsApi.md#contactsUserContactDelete) | **DELETE** /contacts/{user}/{contact} | 
[**contactsUserContactManagePut**](ContactsApi.md#contactsUserContactManagePut) | **PUT** /contacts/{user}/{contact}/manage | 
[**contactsUserContactPut**](ContactsApi.md#contactsUserContactPut) | **PUT** /contacts/{user}/{contact} | 
[**contactsUserGet**](ContactsApi.md#contactsUserGet) | **GET** /contacts/{user} | 
[**contactsUserPost**](ContactsApi.md#contactsUserPost) | **POST** /contacts/{user} | 


# **contactsUserContactDelete**
> contactsUserContactDelete($user, $contact)



Removes contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\ContactsApi();
$user = "user_example"; // string | 
$contact = "contact_example"; // string | 

try {
    $api_instance->contactsUserContactDelete($user, $contact);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsUserContactDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **contact** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsUserContactManagePut**
> contactsUserContactManagePut($user, $contact, $action)



An administrative action to set roster entries and two-way subscriptions. There are two possible actions: 'connect' sets roster entries and performs subsciption in both ways, thus effectively connecting the two users; 'disconnect' removes them from each other's roster. The operation involves many stages and is not atomic (can succeed partially).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\ContactsApi();
$user = "user_example"; // string | 
$contact = "contact_example"; // string | 
$action = "action_example"; // string | 

try {
    $api_instance->contactsUserContactManagePut($user, $contact, $action);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsUserContactManagePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **contact** | **string**|  |
 **action** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsUserContactPut**
> contactsUserContactPut($user, $contact, $action)



Manage subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\ContactsApi();
$user = "user_example"; // string | 
$contact = "contact_example"; // string | 
$action = "action_example"; // string | 

try {
    $api_instance->contactsUserContactPut($user, $contact, $action);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsUserContactPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **contact** | **string**|  |
 **action** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsUserGet**
> \MongooseIM\Admin\Models\ContactDetails[] contactsUserGet($user)



Returns all contacts from the user's roster

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\ContactsApi();
$user = "user_example"; // string | User's JID (f.e. alice@wonderland.lit)

try {
    $result = $api_instance->contactsUserGet($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User&#39;s JID (f.e. alice@wonderland.lit) |

### Return type

[**\MongooseIM\Admin\Models\ContactDetails[]**](../Model/ContactDetails.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsUserPost**
> contactsUserPost($contact)



Adds a user to a contact list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\ContactsApi();
$contact = new \MongooseIM\Admin\Models\Addcontact(); // \MongooseIM\Admin\Models\Addcontact | 

try {
    $api_instance->contactsUserPost($contact);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsUserPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | [**\MongooseIM\Admin\Models\Addcontact**](../Model/\MongooseIM\Admin\Models\Addcontact.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

