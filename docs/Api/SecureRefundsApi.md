# OpenAPI\Client\SecureRefundsApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureRefundsEligibilityPost()**](SecureRefundsApi.md#secureRefundsEligibilityPost) | **POST** /secure/refunds/eligibility | This API return refund eligibility of a transaction. |
| [**secureRefundsPost()**](SecureRefundsApi.md#secureRefundsPost) | **POST** /secure/refunds | This API will refund a transaction which has been settled by the processor. |


## `secureRefundsEligibilityPost()`

```php
secureRefundsEligibilityPost($xApiKey, $xAppKey, $xVersion, $origin, $transactionRefundEligibilityRequest): \OpenAPI\Client\Model\RefundEligibility
```

This API return refund eligibility of a transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: x-api-key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure API key authorization: x-app-key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-app-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-app-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecureRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$transactionRefundEligibilityRequest = new \OpenAPI\Client\Model\TransactionRefundEligibilityRequest(); // \OpenAPI\Client\Model\TransactionRefundEligibilityRequest | refund Detail

try {
    $result = $apiInstance->secureRefundsEligibilityPost($xApiKey, $xAppKey, $xVersion, $origin, $transactionRefundEligibilityRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureRefundsApi->secureRefundsEligibilityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **transactionRefundEligibilityRequest** | [**\OpenAPI\Client\Model\TransactionRefundEligibilityRequest**](../Model/TransactionRefundEligibilityRequest.md)| refund Detail | |

### Return type

[**\OpenAPI\Client\Model\RefundEligibility**](../Model/RefundEligibility.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureRefundsPost()`

```php
secureRefundsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTransactionRefundRequest): \OpenAPI\Client\Model\SecureTransactionDetailDTO
```

This API will refund a transaction which has been settled by the processor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: x-api-key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure API key authorization: x-app-key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-app-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-app-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SecureRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureTransactionRefundRequest = new \OpenAPI\Client\Model\SecureTransactionRefundRequest(); // \OpenAPI\Client\Model\SecureTransactionRefundRequest | Refund Detail

try {
    $result = $apiInstance->secureRefundsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTransactionRefundRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureRefundsApi->secureRefundsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureTransactionRefundRequest** | [**\OpenAPI\Client\Model\SecureTransactionRefundRequest**](../Model/SecureTransactionRefundRequest.md)| Refund Detail | |

### Return type

[**\OpenAPI\Client\Model\SecureTransactionDetailDTO**](../Model/SecureTransactionDetailDTO.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
