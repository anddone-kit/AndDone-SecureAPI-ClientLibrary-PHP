# OpenAPI\Client\SecurePremiumFinanceLiteApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureEpfliteQuotesGeneratePost()**](SecurePremiumFinanceLiteApi.md#secureEpfliteQuotesGeneratePost) | **POST** /secure/epflite/quotes/generate | This API is used to generate the quote from the provider. |
| [**secureEpfliteQuotesLinkPost()**](SecurePremiumFinanceLiteApi.md#secureEpfliteQuotesLinkPost) | **POST** /secure/epflite/quotes/link | This API will return quotes created againsts a payment link. |
| [**secureEpfliteQuotesPaymentlinksPost()**](SecurePremiumFinanceLiteApi.md#secureEpfliteQuotesPaymentlinksPost) | **POST** /secure/epflite/quotes/paymentlinks | This API is used to create Payment Links |


## `secureEpfliteQuotesGeneratePost()`

```php
secureEpfliteQuotesGeneratePost($xApiKey, $xAppKey, $xVersion, $origin, $pFLiteSecureQuoteRequest): \OpenAPI\Client\Model\PFLiteGenerateQuoteResponse
```

This API is used to generate the quote from the provider.

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


$apiInstance = new OpenAPI\Client\Api\SecurePremiumFinanceLiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFLiteSecureQuoteRequest = new \OpenAPI\Client\Model\PFLiteSecureQuoteRequest(); // \OpenAPI\Client\Model\PFLiteSecureQuoteRequest | PFLite Quote Secure Request details

try {
    $result = $apiInstance->secureEpfliteQuotesGeneratePost($xApiKey, $xAppKey, $xVersion, $origin, $pFLiteSecureQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePremiumFinanceLiteApi->secureEpfliteQuotesGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFLiteSecureQuoteRequest** | [**\OpenAPI\Client\Model\PFLiteSecureQuoteRequest**](../Model/PFLiteSecureQuoteRequest.md)| PFLite Quote Secure Request details | [optional] |

### Return type

[**\OpenAPI\Client\Model\PFLiteGenerateQuoteResponse**](../Model/PFLiteGenerateQuoteResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureEpfliteQuotesLinkPost()`

```php
secureEpfliteQuotesLinkPost($xApiKey, $xAppKey, $xVersion, $origin, $pFLiteGetQuoteRequest): \OpenAPI\Client\Model\PFLiteQuoteByPaymentLinkResponse[]
```

This API will return quotes created againsts a payment link.

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


$apiInstance = new OpenAPI\Client\Api\SecurePremiumFinanceLiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFLiteGetQuoteRequest = new \OpenAPI\Client\Model\PFLiteGetQuoteRequest(); // \OpenAPI\Client\Model\PFLiteGetQuoteRequest | Signature Request details

try {
    $result = $apiInstance->secureEpfliteQuotesLinkPost($xApiKey, $xAppKey, $xVersion, $origin, $pFLiteGetQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePremiumFinanceLiteApi->secureEpfliteQuotesLinkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFLiteGetQuoteRequest** | [**\OpenAPI\Client\Model\PFLiteGetQuoteRequest**](../Model/PFLiteGetQuoteRequest.md)| Signature Request details | [optional] |

### Return type

[**\OpenAPI\Client\Model\PFLiteQuoteByPaymentLinkResponse[]**](../Model/PFLiteQuoteByPaymentLinkResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureEpfliteQuotesPaymentlinksPost()`

```php
secureEpfliteQuotesPaymentlinksPost($xApiKey, $xAppKey, $xVersion, $origin, $pFLitePaymentLinkRequest): \OpenAPI\Client\Model\PaymentLinkResponse
```

This API is used to create Payment Links

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


$apiInstance = new OpenAPI\Client\Api\SecurePremiumFinanceLiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFLitePaymentLinkRequest = new \OpenAPI\Client\Model\PFLitePaymentLinkRequest(); // \OpenAPI\Client\Model\PFLitePaymentLinkRequest | Payment Link Request

try {
    $result = $apiInstance->secureEpfliteQuotesPaymentlinksPost($xApiKey, $xAppKey, $xVersion, $origin, $pFLitePaymentLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePremiumFinanceLiteApi->secureEpfliteQuotesPaymentlinksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFLitePaymentLinkRequest** | [**\OpenAPI\Client\Model\PFLitePaymentLinkRequest**](../Model/PFLitePaymentLinkRequest.md)| Payment Link Request | |

### Return type

[**\OpenAPI\Client\Model\PaymentLinkResponse**](../Model/PaymentLinkResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
