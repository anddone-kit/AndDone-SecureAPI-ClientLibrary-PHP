# OpenAPI\Client\SecurePaymentBatchingApi

All URIs are relative to https://api.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureBatchesDetailsPost()**](SecurePaymentBatchingApi.md#secureBatchesDetailsPost) | **POST** /secure/batches/details | This API is used for getting Secure Payment Batch Details |
| [**secureBatchesExecutePost()**](SecurePaymentBatchingApi.md#secureBatchesExecutePost) | **POST** /secure/batches/execute | This API execute on-demand batch transaction. |
| [**secureBatchesPost()**](SecurePaymentBatchingApi.md#secureBatchesPost) | **POST** /secure/batches | This API is used for getting Secure Payment Batches |
| [**secureBatchesTimelinesPost()**](SecurePaymentBatchingApi.md#secureBatchesTimelinesPost) | **POST** /secure/batches/timelines | This API will returns batch timeline. |
| [**secureBatchesTransactionsCancelPost()**](SecurePaymentBatchingApi.md#secureBatchesTransactionsCancelPost) | **POST** /secure/batches/transactions/cancel | This API cancels transactions from an active batch. |


## `secureBatchesDetailsPost()`

```php
secureBatchesDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentBatchDetailsRequest): \OpenAPI\Client\Model\PaymentBatchDetailsResponse[]
```

This API is used for getting Secure Payment Batch Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentBatchingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$securePaymentBatchDetailsRequest = new \OpenAPI\Client\Model\SecurePaymentBatchDetailsRequest(); // \OpenAPI\Client\Model\SecurePaymentBatchDetailsRequest | Secure Payment Batch Details Request

try {
    $result = $apiInstance->secureBatchesDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentBatchDetailsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentBatchingApi->secureBatchesDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **securePaymentBatchDetailsRequest** | [**\OpenAPI\Client\Model\SecurePaymentBatchDetailsRequest**](../Model/SecurePaymentBatchDetailsRequest.md)| Secure Payment Batch Details Request | |

### Return type

[**\OpenAPI\Client\Model\PaymentBatchDetailsResponse[]**](../Model/PaymentBatchDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureBatchesExecutePost()`

```php
secureBatchesExecutePost($xApiKey, $xAppKey, $xVersion, $origin, $secureBatchExecuteRequest)
```

This API execute on-demand batch transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentBatchingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureBatchExecuteRequest = new \OpenAPI\Client\Model\SecureBatchExecuteRequest(); // \OpenAPI\Client\Model\SecureBatchExecuteRequest | Payment Batch Execution Request

try {
    $apiInstance->secureBatchesExecutePost($xApiKey, $xAppKey, $xVersion, $origin, $secureBatchExecuteRequest);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentBatchingApi->secureBatchesExecutePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureBatchExecuteRequest** | [**\OpenAPI\Client\Model\SecureBatchExecuteRequest**](../Model/SecureBatchExecuteRequest.md)| Payment Batch Execution Request | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureBatchesPost()`

```php
secureBatchesPost($xApiKey, $xAppKey, $xVersion, $origin, $startRow, $pageSize, $sortField, $asc): \OpenAPI\Client\Model\PaymentBatchResponse
```

This API is used for getting Secure Payment Batches

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentBatchingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$startRow = 56; // int | Set StartRow
$pageSize = 56; // int | Set PageSize
$sortField = 'sortField_example'; // string | Set SortField
$asc = True; // bool | Set Asc

try {
    $result = $apiInstance->secureBatchesPost($xApiKey, $xAppKey, $xVersion, $origin, $startRow, $pageSize, $sortField, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentBatchingApi->secureBatchesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **startRow** | **int**| Set StartRow | [optional] |
| **pageSize** | **int**| Set PageSize | [optional] |
| **sortField** | **string**| Set SortField | [optional] |
| **asc** | **bool**| Set Asc | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentBatchResponse**](../Model/PaymentBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureBatchesTimelinesPost()`

```php
secureBatchesTimelinesPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentBatchDetailsRequest): \OpenAPI\Client\Model\PaymentBatchEventLogResponse[]
```

This API will returns batch timeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentBatchingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$securePaymentBatchDetailsRequest = new \OpenAPI\Client\Model\SecurePaymentBatchDetailsRequest(); // \OpenAPI\Client\Model\SecurePaymentBatchDetailsRequest | Payment Batch Timeline Request

try {
    $result = $apiInstance->secureBatchesTimelinesPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentBatchDetailsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentBatchingApi->secureBatchesTimelinesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **securePaymentBatchDetailsRequest** | [**\OpenAPI\Client\Model\SecurePaymentBatchDetailsRequest**](../Model/SecurePaymentBatchDetailsRequest.md)| Payment Batch Timeline Request | |

### Return type

[**\OpenAPI\Client\Model\PaymentBatchEventLogResponse[]**](../Model/PaymentBatchEventLogResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureBatchesTransactionsCancelPost()`

```php
secureBatchesTransactionsCancelPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentBatchCancellationRequest)
```

This API cancels transactions from an active batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurePaymentBatchingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentBatchCancellationRequest = new \OpenAPI\Client\Model\PaymentBatchCancellationRequest(); // \OpenAPI\Client\Model\PaymentBatchCancellationRequest | Payment Batch Cancellation Request

try {
    $apiInstance->secureBatchesTransactionsCancelPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentBatchCancellationRequest);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentBatchingApi->secureBatchesTransactionsCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentBatchCancellationRequest** | [**\OpenAPI\Client\Model\PaymentBatchCancellationRequest**](../Model/PaymentBatchCancellationRequest.md)| Payment Batch Cancellation Request | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
