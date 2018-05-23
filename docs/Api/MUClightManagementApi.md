# MongooseIM\Admin\MUClightManagementApi

All URIs are relative to *http://localhost:8088/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mucLightsXMPPHostPost**](MUClightManagementApi.md#mucLightsXMPPHostPost) | **POST** /muc-lights/{XMPPHost} | 
[**mucLightsXMPPHostPut**](MUClightManagementApi.md#mucLightsXMPPHostPut) | **PUT** /muc-lights/{XMPPHost} | 
[**mucLightsXMPPMUCHostRoomNameMessagesPost**](MUClightManagementApi.md#mucLightsXMPPMUCHostRoomNameMessagesPost) | **POST** /muc-lights/{XMPPMUCHost}/{roomName}/messages | 
[**mucLightsXMPPMUCHostRoomNameParticipantsPost**](MUClightManagementApi.md#mucLightsXMPPMUCHostRoomNameParticipantsPost) | **POST** /muc-lights/{XMPPMUCHost}/{roomName}/participants | 
[**mucLightsXMPPMUCHostRoomNameUserManagementDelete**](MUClightManagementApi.md#mucLightsXMPPMUCHostRoomNameUserManagementDelete) | **DELETE** /muc-lights/{XMPPMUCHost}/{roomName}/{user}/management | 


# **mucLightsXMPPHostPost**
> string mucLightsXMPPHostPost($xmpp_host, $room_details)



Create a MUC Light room under the given XMPP hostname.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUClightManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$room_details = new \MongooseIM\Admin\Models\RoomDetails1(); // \MongooseIM\Admin\Models\RoomDetails1 | Details for the room to be created

try {
    $result = $api_instance->mucLightsXMPPHostPost($xmpp_host, $room_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MUClightManagementApi->mucLightsXMPPHostPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **room_details** | [**\MongooseIM\Admin\Models\RoomDetails1**](../Model/\MongooseIM\Admin\Models\RoomDetails1.md)| Details for the room to be created |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mucLightsXMPPHostPut**
> string mucLightsXMPPHostPut($xmpp_host, $room_details)



Create a MUC Light room with the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUClightManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$room_details = new \MongooseIM\Admin\Models\RoomDetails(); // \MongooseIM\Admin\Models\RoomDetails | Details for the room to be created (including ID)

try {
    $result = $api_instance->mucLightsXMPPHostPut($xmpp_host, $room_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MUClightManagementApi->mucLightsXMPPHostPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **room_details** | [**\MongooseIM\Admin\Models\RoomDetails**](../Model/\MongooseIM\Admin\Models\RoomDetails.md)| Details for the room to be created (including ID) |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mucLightsXMPPMUCHostRoomNameMessagesPost**
> mucLightsXMPPMUCHostRoomNameMessagesPost($xmppmuc_host, $room_name, $chat_message)



Send a message to the MUC Light room on behalf of a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUClightManagementApi();
$xmppmuc_host = "xmppmuc_host_example"; // string | The XMPP host of the muc service.
$room_name = "room_name_example"; // string | The MUC Light room's **name** (i.e. **not** the room's JID)
$chat_message = new \MongooseIM\Admin\Models\ChatMessage(); // \MongooseIM\Admin\Models\ChatMessage | The message details

try {
    $api_instance->mucLightsXMPPMUCHostRoomNameMessagesPost($xmppmuc_host, $room_name, $chat_message);
} catch (Exception $e) {
    echo 'Exception when calling MUClightManagementApi->mucLightsXMPPMUCHostRoomNameMessagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmppmuc_host** | **string**| The XMPP host of the muc service. |
 **room_name** | **string**| The MUC Light room&#39;s **name** (i.e. **not** the room&#39;s JID) |
 **chat_message** | [**\MongooseIM\Admin\Models\ChatMessage**](../Model/\MongooseIM\Admin\Models\ChatMessage.md)| The message details |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mucLightsXMPPMUCHostRoomNameParticipantsPost**
> mucLightsXMPPMUCHostRoomNameParticipantsPost($xmppmuc_host, $room_name, $invite)



Invite one user on behalf of another.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUClightManagementApi();
$xmppmuc_host = "xmppmuc_host_example"; // string | The XMPP host of the muc service.
$room_name = "room_name_example"; // string | The MUC Light room's **name** (i.e. **not** the room's JID)
$invite = new \MongooseIM\Admin\Models\Invite(); // \MongooseIM\Admin\Models\Invite | The invite itself

try {
    $api_instance->mucLightsXMPPMUCHostRoomNameParticipantsPost($xmppmuc_host, $room_name, $invite);
} catch (Exception $e) {
    echo 'Exception when calling MUClightManagementApi->mucLightsXMPPMUCHostRoomNameParticipantsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmppmuc_host** | **string**| The XMPP host of the muc service. |
 **room_name** | **string**| The MUC Light room&#39;s **name** (i.e. **not** the room&#39;s JID) |
 **invite** | [**\MongooseIM\Admin\Models\Invite**](../Model/\MongooseIM\Admin\Models\Invite.md)| The invite itself |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mucLightsXMPPMUCHostRoomNameUserManagementDelete**
> mucLightsXMPPMUCHostRoomNameUserManagementDelete($xmppmuc_host, $room_name, $error_unknown)



Delete a MUC-light room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUClightManagementApi();
$xmppmuc_host = "xmppmuc_host_example"; // string | The XMPP host of the muc service.
$room_name = "room_name_example"; // string | The MUC Light room's **name** (i.e. **not** the room's JID)
$error_unknown = "error_unknown_example"; // string | User's JID (f.e. alice@wonderland.lit)

try {
    $api_instance->mucLightsXMPPMUCHostRoomNameUserManagementDelete($xmppmuc_host, $room_name, $error_unknown);
} catch (Exception $e) {
    echo 'Exception when calling MUClightManagementApi->mucLightsXMPPMUCHostRoomNameUserManagementDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmppmuc_host** | **string**| The XMPP host of the muc service. |
 **room_name** | **string**| The MUC Light room&#39;s **name** (i.e. **not** the room&#39;s JID) |
 **error_unknown** | **string**| User&#39;s JID (f.e. alice@wonderland.lit) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

