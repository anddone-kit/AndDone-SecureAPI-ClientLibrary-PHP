# OpenAPI\Client\SecurePaymentIntentApi

All URIs are relative to https://api.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**securePaymentintentsExpirationsPost()**](SecurePaymentIntentApi.md#securePaymentintentsExpirationsPost) | **POST** /secure/paymentintents/expirations | This API expires the payment Intent or link. |
| [**securePaymentintentsPost()**](SecurePaymentIntentApi.md#securePaymentintentsPost) | **POST** /secure/paymentintents | This API is use to create Secure payment Intent. |


## `securePaymentintentsExpirationsPost()`

```php
securePaymentintentsExpirationsPost($xApiKey, $xAppKey, $xVersion, $origin, $id): \OpenAPI\Client\Model\PaymentIntentExpiresResponse
```

This API expires the payment Intent or link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$id = 'id_example'; // string | Payment Intent Id

try {
    $result = $apiInstance->securePaymentintentsExpirationsPost($xApiKey, $xAppKey, $xVersion, $origin, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentIntentApi->securePaymentintentsExpirationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **id** | **string**| Payment Intent Id | |

### Return type

[**\OpenAPI\Client\Model\PaymentIntentExpiresResponse**](../Model/PaymentIntentExpiresResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securePaymentintentsPost()`

```php
securePaymentintentsPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentIntentRequest): \OpenAPI\Client\Model\PaymentIntentResponse
```

This API is use to create Secure payment Intent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentIntentRequest = new \OpenAPI\Client\Model\PaymentIntentRequest(); // \OpenAPI\Client\Model\PaymentIntentRequest | Payment Intent Request

try {
    $result = $apiInstance->securePaymentintentsPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentIntentApi->securePaymentintentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentIntentRequest** | [**\OpenAPI\Client\Model\PaymentIntentRequest**](../Model/PaymentIntentRequest.md)| Payment Intent Request | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentIntentResponse**](../Model/PaymentIntentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
