# MongooseIM\Admin\MUCManagementApi

All URIs are relative to *http://localhost:8088/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mucsXMPPHostPost**](MUCManagementApi.md#mucsXMPPHostPost) | **POST** /mucs/{XMPPHost} | 
[**mucsXMPPHostRoomNameMessagesPost**](MUCManagementApi.md#mucsXMPPHostRoomNameMessagesPost) | **POST** /mucs/{XMPPHost}/{roomName}/messages | 
[**mucsXMPPHostRoomNameNicknameDelete**](MUCManagementApi.md#mucsXMPPHostRoomNameNicknameDelete) | **DELETE** /mucs/{XMPPHost}/{roomName}/{nickname} | 
[**mucsXMPPHostRoomNameParticipantsPost**](MUCManagementApi.md#mucsXMPPHostRoomNameParticipantsPost) | **POST** /mucs/{XMPPHost}/{roomName}/participants | 


# **mucsXMPPHostPost**
> mucsXMPPHostPost($xmpp_host, $room_details)



Create a MUC room under the given XMPP hostname.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUCManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$room_details = new \MongooseIM\Admin\Models\RoomDetails2(); // \MongooseIM\Admin\Models\RoomDetails2 | Details for the room to be created.

try {
    $api_instance->mucsXMPPHostPost($xmpp_host, $room_details);
} catch (Exception $e) {
    echo 'Exception when calling MUCManagementApi->mucsXMPPHostPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **room_details** | [**\MongooseIM\Admin\Models\RoomDetails2**](../Model/\MongooseIM\Admin\Models\RoomDetails2.md)| Details for the room to be created. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mucsXMPPHostRoomNameMessagesPost**
> mucsXMPPHostRoomNameMessagesPost($xmpp_host, $room_name, $chat_message)



Send message to the MUC room on behalf of a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUCManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$room_name = "room_name_example"; // string | The MUC Light room's **name** (i.e. **not** the room's JID)
$chat_message = new \MongooseIM\Admin\Models\ChatMessage1(); // \MongooseIM\Admin\Models\ChatMessage1 | The message details

try {
    $api_instance->mucsXMPPHostRoomNameMessagesPost($xmpp_host, $room_name, $chat_message);
} catch (Exception $e) {
    echo 'Exception when calling MUCManagementApi->mucsXMPPHostRoomNameMessagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **room_name** | **string**| The MUC Light room&#39;s **name** (i.e. **not** the room&#39;s JID) |
 **chat_message** | [**\MongooseIM\Admin\Models\ChatMessage1**](../Model/\MongooseIM\Admin\Models\ChatMessage1.md)| The message details |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mucsXMPPHostRoomNameNicknameDelete**
> mucsXMPPHostRoomNameNicknameDelete($xmpp_host, $room_name, $nickname)



Kick a user out on behalf of one of the room's moderators.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUCManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$room_name = "room_name_example"; // string | The MUC Light room's **name** (i.e. **not** the room's JID)
$nickname = "nickname_example"; // string | The user's nickname for the given room

try {
    $api_instance->mucsXMPPHostRoomNameNicknameDelete($xmpp_host, $room_name, $nickname);
} catch (Exception $e) {
    echo 'Exception when calling MUCManagementApi->mucsXMPPHostRoomNameNicknameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **room_name** | **string**| The MUC Light room&#39;s **name** (i.e. **not** the room&#39;s JID) |
 **nickname** | **string**| The user&#39;s nickname for the given room |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mucsXMPPHostRoomNameParticipantsPost**
> mucsXMPPHostRoomNameParticipantsPost($xmpp_host, $room_name, $invite)



Invite one user on behalf of another.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\MUCManagementApi();
$xmpp_host = "xmpp_host_example"; // string | The XMPP host served by the server.
$room_name = "room_name_example"; // string | The MUC Light room's **name** (i.e. **not** the room's JID)
$invite = new \MongooseIM\Admin\Models\Invite1(); // \MongooseIM\Admin\Models\Invite1 | The invite itself

try {
    $api_instance->mucsXMPPHostRoomNameParticipantsPost($xmpp_host, $room_name, $invite);
} catch (Exception $e) {
    echo 'Exception when calling MUCManagementApi->mucsXMPPHostRoomNameParticipantsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xmpp_host** | **string**| The XMPP host served by the server. |
 **room_name** | **string**| The MUC Light room&#39;s **name** (i.e. **not** the room&#39;s JID) |
 **invite** | [**\MongooseIM\Admin\Models\Invite1**](../Model/\MongooseIM\Admin\Models\Invite1.md)| The invite itself |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

