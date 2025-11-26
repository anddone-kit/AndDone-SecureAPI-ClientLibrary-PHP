# OpenAPI\Client\SecureEmbeddedPremiumFinanceApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureEpfMerchantsQuotesPolicyPut()**](SecureEmbeddedPremiumFinanceApi.md#secureEpfMerchantsQuotesPolicyPut) | **PUT** /secure/epf/merchants/quotes/policy | This API is will update the policy number |
| [**secureEpfQuotesBookingPut()**](SecureEmbeddedPremiumFinanceApi.md#secureEpfQuotesBookingPut) | **PUT** /secure/epf/quotes/booking | This API will update PFA to book a quote. |
| [**secureEpfQuotesCaptureesignPut()**](SecureEmbeddedPremiumFinanceApi.md#secureEpfQuotesCaptureesignPut) | **PUT** /secure/epf/quotes/captureesign | This API will eSign the pfa with insured name. |
| [**secureEpfQuotesGeneratePost()**](SecureEmbeddedPremiumFinanceApi.md#secureEpfQuotesGeneratePost) | **POST** /secure/epf/quotes/generate | This API is used to Generate Quotes |
| [**secureEpfQuotesIntentPost()**](SecureEmbeddedPremiumFinanceApi.md#secureEpfQuotesIntentPost) | **POST** /secure/epf/quotes/intent | This API will return quotes created againsts a payment intent. |
| [**secureEpfQuotesPost()**](SecureEmbeddedPremiumFinanceApi.md#secureEpfQuotesPost) | **POST** /secure/epf/quotes | This API will return quote by QuoteKey. |
| [**secureEpfRetrievepfaPost()**](SecureEmbeddedPremiumFinanceApi.md#secureEpfRetrievepfaPost) | **POST** /secure/epf/retrievepfa | This API will return PFA for given quoteKey. |


## `secureEpfMerchantsQuotesPolicyPut()`

```php
secureEpfMerchantsQuotesPolicyPut($xApiKey, $xAppKey, $xVersion, $origin, $pFPolicyUpdateRequestDTO): \OpenAPI\Client\Model\PFPolicyUpdateResponse
```

This API is will update the policy number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFPolicyUpdateRequestDTO = new \OpenAPI\Client\Model\PFPolicyUpdateRequestDTO(); // \OpenAPI\Client\Model\PFPolicyUpdateRequestDTO | Signature Request details

try {
    $result = $apiInstance->secureEpfMerchantsQuotesPolicyPut($xApiKey, $xAppKey, $xVersion, $origin, $pFPolicyUpdateRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceApi->secureEpfMerchantsQuotesPolicyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFPolicyUpdateRequestDTO** | [**\OpenAPI\Client\Model\PFPolicyUpdateRequestDTO**](../Model/PFPolicyUpdateRequestDTO.md)| Signature Request details | [optional] |

### Return type

[**\OpenAPI\Client\Model\PFPolicyUpdateResponse**](../Model/PFPolicyUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureEpfQuotesBookingPut()`

```php
secureEpfQuotesBookingPut($xApiKey, $xAppKey, $xVersion, $origin, $pFQuoteBookingRequest): \OpenAPI\Client\Model\PFUpdatePFAResponse
```

This API will update PFA to book a quote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFQuoteBookingRequest = new \OpenAPI\Client\Model\PFQuoteBookingRequest(); // \OpenAPI\Client\Model\PFQuoteBookingRequest | PFQuoteBooking Request details

try {
    $result = $apiInstance->secureEpfQuotesBookingPut($xApiKey, $xAppKey, $xVersion, $origin, $pFQuoteBookingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceApi->secureEpfQuotesBookingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFQuoteBookingRequest** | [**\OpenAPI\Client\Model\PFQuoteBookingRequest**](../Model/PFQuoteBookingRequest.md)| PFQuoteBooking Request details | |

### Return type

[**\OpenAPI\Client\Model\PFUpdatePFAResponse**](../Model/PFUpdatePFAResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureEpfQuotesCaptureesignPut()`

```php
secureEpfQuotesCaptureesignPut($xApiKey, $xAppKey, $xVersion, $origin, $pFQuoteEsignRequest)
```

This API will eSign the pfa with insured name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFQuoteEsignRequest = new \OpenAPI\Client\Model\PFQuoteEsignRequest(); // \OpenAPI\Client\Model\PFQuoteEsignRequest | PFQuote Request

try {
    $apiInstance->secureEpfQuotesCaptureesignPut($xApiKey, $xAppKey, $xVersion, $origin, $pFQuoteEsignRequest);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceApi->secureEpfQuotesCaptureesignPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFQuoteEsignRequest** | [**\OpenAPI\Client\Model\PFQuoteEsignRequest**](../Model/PFQuoteEsignRequest.md)| PFQuote Request | [optional] |

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

## `secureEpfQuotesGeneratePost()`

```php
secureEpfQuotesGeneratePost($xApiKey, $xAppKey, $xVersion, $origin, $quoteRequest): \OpenAPI\Client\Model\PFGenerateQuoteResponse[]
```

This API is used to Generate Quotes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$quoteRequest = new \OpenAPI\Client\Model\QuoteRequest(); // \OpenAPI\Client\Model\QuoteRequest | Quote Request

try {
    $result = $apiInstance->secureEpfQuotesGeneratePost($xApiKey, $xAppKey, $xVersion, $origin, $quoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceApi->secureEpfQuotesGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **quoteRequest** | [**\OpenAPI\Client\Model\QuoteRequest**](../Model/QuoteRequest.md)| Quote Request | [optional] |

### Return type

[**\OpenAPI\Client\Model\PFGenerateQuoteResponse[]**](../Model/PFGenerateQuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureEpfQuotesIntentPost()`

```php
secureEpfQuotesIntentPost($xApiKey, $xAppKey, $xVersion, $origin, $getQuoteRequest): \OpenAPI\Client\Model\QuoteResponse[]
```

This API will return quotes created againsts a payment intent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$getQuoteRequest = new \OpenAPI\Client\Model\GetQuoteRequest(); // \OpenAPI\Client\Model\GetQuoteRequest | Signature Request details

try {
    $result = $apiInstance->secureEpfQuotesIntentPost($xApiKey, $xAppKey, $xVersion, $origin, $getQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceApi->secureEpfQuotesIntentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **getQuoteRequest** | [**\OpenAPI\Client\Model\GetQuoteRequest**](../Model/GetQuoteRequest.md)| Signature Request details | [optional] |

### Return type

[**\OpenAPI\Client\Model\QuoteResponse[]**](../Model/QuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureEpfQuotesPost()`

```php
secureEpfQuotesPost($xApiKey, $xAppKey, $xVersion, $origin, $getQuoteKeyRequest): \OpenAPI\Client\Model\QuoteResponse
```

This API will return quote by QuoteKey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$getQuoteKeyRequest = new \OpenAPI\Client\Model\GetQuoteKeyRequest(); // \OpenAPI\Client\Model\GetQuoteKeyRequest | Signature Request details

try {
    $result = $apiInstance->secureEpfQuotesPost($xApiKey, $xAppKey, $xVersion, $origin, $getQuoteKeyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceApi->secureEpfQuotesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **getQuoteKeyRequest** | [**\OpenAPI\Client\Model\GetQuoteKeyRequest**](../Model/GetQuoteKeyRequest.md)| Signature Request details | [optional] |

### Return type

[**\OpenAPI\Client\Model\QuoteResponse**](../Model/QuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureEpfRetrievepfaPost()`

```php
secureEpfRetrievepfaPost($xApiKey, $xAppKey, $xVersion, $origin, $pFRetrievePFARequestDTO): string
```

This API will return PFA for given quoteKey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFRetrievePFARequestDTO = new \OpenAPI\Client\Model\PFRetrievePFARequestDTO(); // \OpenAPI\Client\Model\PFRetrievePFARequestDTO | PFRetrieve PFA Request

try {
    $result = $apiInstance->secureEpfRetrievepfaPost($xApiKey, $xAppKey, $xVersion, $origin, $pFRetrievePFARequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceApi->secureEpfRetrievepfaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFRetrievePFARequestDTO** | [**\OpenAPI\Client\Model\PFRetrievePFARequestDTO**](../Model/PFRetrievePFARequestDTO.md)| PFRetrieve PFA Request | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
