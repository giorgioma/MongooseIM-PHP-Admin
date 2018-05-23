# MongooseIM\Admin\CommandsApi

All URIs are relative to *http://localhost:8088/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commandsGet**](CommandsApi.md#commandsGet) | **GET** /commands | 


# **commandsGet**
> \MongooseIM\Admin\Models\CommandDescription[] commandsGet()



Lists the available commands for administering MongooseIM.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new MongooseIM\Admin\Api\CommandsApi();

try {
    $result = $api_instance->commandsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->commandsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MongooseIM\Admin\Models\CommandDescription[]**](../Model/CommandDescription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

