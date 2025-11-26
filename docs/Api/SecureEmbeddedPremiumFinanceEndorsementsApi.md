# OpenAPI\Client\SecureEmbeddedPremiumFinanceEndorsementsApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureEpfEndorsementsPost()**](SecureEmbeddedPremiumFinanceEndorsementsApi.md#secureEpfEndorsementsPost) | **POST** /secure/epf/endorsements | This API will do a check of eligibility of account |
| [**secureEpfQuoteEndorsementBookingPut()**](SecureEmbeddedPremiumFinanceEndorsementsApi.md#secureEpfQuoteEndorsementBookingPut) | **PUT** /secure/epf/quote/endorsement/booking | This API will update PFA to book a endorsement quote. |
| [**secureEpfQuoteEndorsementPost()**](SecureEmbeddedPremiumFinanceEndorsementsApi.md#secureEpfQuoteEndorsementPost) | **POST** /secure/epf/quote/endorsement | This API will do return a quote for an existing policy or new policy for an existing account |


## `secureEpfEndorsementsPost()`

```php
secureEpfEndorsementsPost($xApiKey, $xAppKey, $xVersion, $origin, $pFCheckEndorsementsRequest): \OpenAPI\Client\Model\PFCheckEndorsementsResponse
```

This API will do a check of eligibility of account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceEndorsementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFCheckEndorsementsRequest = new \OpenAPI\Client\Model\PFCheckEndorsementsRequest(); // \OpenAPI\Client\Model\PFCheckEndorsementsRequest | PF Check Endorsement Request details

try {
    $result = $apiInstance->secureEpfEndorsementsPost($xApiKey, $xAppKey, $xVersion, $origin, $pFCheckEndorsementsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceEndorsementsApi->secureEpfEndorsementsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFCheckEndorsementsRequest** | [**\OpenAPI\Client\Model\PFCheckEndorsementsRequest**](../Model/PFCheckEndorsementsRequest.md)| PF Check Endorsement Request details | |

### Return type

[**\OpenAPI\Client\Model\PFCheckEndorsementsResponse**](../Model/PFCheckEndorsementsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureEpfQuoteEndorsementBookingPut()`

```php
secureEpfQuoteEndorsementBookingPut($xApiKey, $xAppKey, $xVersion, $origin, $securePFQuoteBookingRequest): \OpenAPI\Client\Model\PFUpdatePFAResponse
```

This API will update PFA to book a endorsement quote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceEndorsementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$securePFQuoteBookingRequest = new \OpenAPI\Client\Model\SecurePFQuoteBookingRequest(); // \OpenAPI\Client\Model\SecurePFQuoteBookingRequest | PFQuoteBooking Request details

try {
    $result = $apiInstance->secureEpfQuoteEndorsementBookingPut($xApiKey, $xAppKey, $xVersion, $origin, $securePFQuoteBookingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceEndorsementsApi->secureEpfQuoteEndorsementBookingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **securePFQuoteBookingRequest** | [**\OpenAPI\Client\Model\SecurePFQuoteBookingRequest**](../Model/SecurePFQuoteBookingRequest.md)| PFQuoteBooking Request details | |

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

## `secureEpfQuoteEndorsementPost()`

```php
secureEpfQuoteEndorsementPost($xApiKey, $xAppKey, $xVersion, $origin, $pFEndorsementRequest): \OpenAPI\Client\Model\PFEndorsementResponse
```

This API will do return a quote for an existing policy or new policy for an existing account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceEndorsementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$pFEndorsementRequest = new \OpenAPI\Client\Model\PFEndorsementRequest(); // \OpenAPI\Client\Model\PFEndorsementRequest | PF Endorsement Request details

try {
    $result = $apiInstance->secureEpfQuoteEndorsementPost($xApiKey, $xAppKey, $xVersion, $origin, $pFEndorsementRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureEmbeddedPremiumFinanceEndorsementsApi->secureEpfQuoteEndorsementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **pFEndorsementRequest** | [**\OpenAPI\Client\Model\PFEndorsementRequest**](../Model/PFEndorsementRequest.md)| PF Endorsement Request details | |

### Return type

[**\OpenAPI\Client\Model\PFEndorsementResponse**](../Model/PFEndorsementResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
