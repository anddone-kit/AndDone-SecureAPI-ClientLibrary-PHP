# OpenAPI\Client\SecureVoidsApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureCancellationsPost()**](SecureVoidsApi.md#secureCancellationsPost) | **POST** /secure/cancellations | This API cancel a transaction. |


## `secureCancellationsPost()`

```php
secureCancellationsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTransactionCancelRequest): \OpenAPI\Client\Model\SecureCancelledTransactionResponse
```

This API cancel a transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureVoidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureTransactionCancelRequest = new \OpenAPI\Client\Model\SecureTransactionCancelRequest(); // \OpenAPI\Client\Model\SecureTransactionCancelRequest | Cancel Detail

try {
    $result = $apiInstance->secureCancellationsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTransactionCancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureVoidsApi->secureCancellationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureTransactionCancelRequest** | [**\OpenAPI\Client\Model\SecureTransactionCancelRequest**](../Model/SecureTransactionCancelRequest.md)| Cancel Detail | |

### Return type

[**\OpenAPI\Client\Model\SecureCancelledTransactionResponse**](../Model/SecureCancelledTransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
