# OpenAPI\Client\SecurePaymentLinksApi

All URIs are relative to https://api.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**securePaymentlinksDetailsPost()**](SecurePaymentLinksApi.md#securePaymentlinksDetailsPost) | **POST** /secure/paymentlinks/details | This API is used for getting Payment Links by PaymentLink ID |
| [**securePaymentlinksExpirationsPost()**](SecurePaymentLinksApi.md#securePaymentlinksExpirationsPost) | **POST** /secure/paymentlinks/expirations | This API is used for to set expired payment link |
| [**securePaymentlinksIdPut()**](SecurePaymentLinksApi.md#securePaymentlinksIdPut) | **PUT** /secure/paymentlinks/{id} | This API is used to update Payment Links |
| [**securePaymentlinksPost()**](SecurePaymentLinksApi.md#securePaymentlinksPost) | **POST** /secure/paymentlinks | This API is used to create Payment Links |


## `securePaymentlinksDetailsPost()`

```php
securePaymentlinksDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentLinkRequest): \OpenAPI\Client\Model\PaymentLinkResponse
```

This API is used for getting Payment Links by PaymentLink ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$securePaymentLinkRequest = new \OpenAPI\Client\Model\SecurePaymentLinkRequest(); // \OpenAPI\Client\Model\SecurePaymentLinkRequest | Secure Payment Link Request

try {
    $result = $apiInstance->securePaymentlinksDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentLinksApi->securePaymentlinksDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **securePaymentLinkRequest** | [**\OpenAPI\Client\Model\SecurePaymentLinkRequest**](../Model/SecurePaymentLinkRequest.md)| Secure Payment Link Request | |

### Return type

[**\OpenAPI\Client\Model\PaymentLinkResponse**](../Model/PaymentLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securePaymentlinksExpirationsPost()`

```php
securePaymentlinksExpirationsPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentLinkRequest): \OpenAPI\Client\Model\PaymentLinkExpiresResponse
```

This API is used for to set expired payment link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$securePaymentLinkRequest = new \OpenAPI\Client\Model\SecurePaymentLinkRequest(); // \OpenAPI\Client\Model\SecurePaymentLinkRequest | Secure Payment Link Request

try {
    $result = $apiInstance->securePaymentlinksExpirationsPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentLinksApi->securePaymentlinksExpirationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **securePaymentLinkRequest** | [**\OpenAPI\Client\Model\SecurePaymentLinkRequest**](../Model/SecurePaymentLinkRequest.md)| Secure Payment Link Request | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentLinkExpiresResponse**](../Model/PaymentLinkExpiresResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securePaymentlinksIdPut()`

```php
securePaymentlinksIdPut($xApiKey, $xAppKey, $xVersion, $origin, $id, $secureUpdatePaymentLinkRequest): \OpenAPI\Client\Model\PaymentLinkResponse
```

This API is used to update Payment Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$id = 'id_example'; // string | PaymentLink identifier
$secureUpdatePaymentLinkRequest = new \OpenAPI\Client\Model\SecureUpdatePaymentLinkRequest(); // \OpenAPI\Client\Model\SecureUpdatePaymentLinkRequest | Payment Link Request

try {
    $result = $apiInstance->securePaymentlinksIdPut($xApiKey, $xAppKey, $xVersion, $origin, $id, $secureUpdatePaymentLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentLinksApi->securePaymentlinksIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **id** | **string**| PaymentLink identifier | |
| **secureUpdatePaymentLinkRequest** | [**\OpenAPI\Client\Model\SecureUpdatePaymentLinkRequest**](../Model/SecureUpdatePaymentLinkRequest.md)| Payment Link Request | |

### Return type

[**\OpenAPI\Client\Model\PaymentLinkResponse**](../Model/PaymentLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securePaymentlinksPost()`

```php
securePaymentlinksPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentLinkRequest): \OpenAPI\Client\Model\PaymentLinkResponse
```

This API is used to create Payment Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentLinkRequest = new \OpenAPI\Client\Model\PaymentLinkRequest(); // \OpenAPI\Client\Model\PaymentLinkRequest | Payment Link Request

try {
    $result = $apiInstance->securePaymentlinksPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentLinksApi->securePaymentlinksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentLinkRequest** | [**\OpenAPI\Client\Model\PaymentLinkRequest**](../Model/PaymentLinkRequest.md)| Payment Link Request | |

### Return type

[**\OpenAPI\Client\Model\PaymentLinkResponse**](../Model/PaymentLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
