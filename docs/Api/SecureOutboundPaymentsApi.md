# OpenAPI\Client\SecureOutboundPaymentsApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vendorapiSecureOutboundPaymentsTimelinesPost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundPaymentsTimelinesPost) | **POST** /vendorapi/secure/outboundPayments/timelines | This API gets outbound payment timelines |
| [**vendorapiSecureOutboundpaymentsCancelPost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundpaymentsCancelPost) | **POST** /vendorapi/secure/outboundpayments/cancel | This API cancel outbound payment request |
| [**vendorapiSecureOutboundpaymentsDetailPost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundpaymentsDetailPost) | **POST** /vendorapi/secure/outboundpayments/detail | This API fetch outbound payment by paymentId |
| [**vendorapiSecureOutboundpaymentsPost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundpaymentsPost) | **POST** /vendorapi/secure/outboundpayments | This API creates outbound payment request |
| [**vendorapiSecureOutboundpaymentsSearchPost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundpaymentsSearchPost) | **POST** /vendorapi/secure/outboundpayments/search | This API gets all outbound payment |


## `vendorapiSecureOutboundPaymentsTimelinesPost()`

```php
vendorapiSecureOutboundPaymentsTimelinesPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentTimeLineRequestDto): \OpenAPI\Client\Model\OutboundPaymentTimelineResponseDTOInner[]
```

This API gets outbound payment timelines

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


$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentTimeLineRequestDto = new \OpenAPI\Client\Model\PaymentTimeLineRequestDto(); // \OpenAPI\Client\Model\PaymentTimeLineRequestDto | PaymentTimeLineRequestDto

try {
    $result = $apiInstance->vendorapiSecureOutboundPaymentsTimelinesPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentTimeLineRequestDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureOutboundPaymentsApi->vendorapiSecureOutboundPaymentsTimelinesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentTimeLineRequestDto** | [**\OpenAPI\Client\Model\PaymentTimeLineRequestDto**](../Model/PaymentTimeLineRequestDto.md)| PaymentTimeLineRequestDto | |

### Return type

[**\OpenAPI\Client\Model\OutboundPaymentTimelineResponseDTOInner[]**](../Model/OutboundPaymentTimelineResponseDTOInner.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureOutboundpaymentsCancelPost()`

```php
vendorapiSecureOutboundpaymentsCancelPost($xApiKey, $xAppKey, $xVersion, $origin, $cancelPaymentRequestDTO)
```

This API cancel outbound payment request

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


$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$cancelPaymentRequestDTO = new \OpenAPI\Client\Model\CancelPaymentRequestDTO(); // \OpenAPI\Client\Model\CancelPaymentRequestDTO | CancelPaymentRequestDTO

try {
    $apiInstance->vendorapiSecureOutboundpaymentsCancelPost($xApiKey, $xAppKey, $xVersion, $origin, $cancelPaymentRequestDTO);
} catch (Exception $e) {
    echo 'Exception when calling SecureOutboundPaymentsApi->vendorapiSecureOutboundpaymentsCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **cancelPaymentRequestDTO** | [**\OpenAPI\Client\Model\CancelPaymentRequestDTO**](../Model/CancelPaymentRequestDTO.md)| CancelPaymentRequestDTO | |

### Return type

void (empty response body)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureOutboundpaymentsDetailPost()`

```php
vendorapiSecureOutboundpaymentsDetailPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentRequestDetailDTO): \OpenAPI\Client\Model\PaymentDetailResponseDTO
```

This API fetch outbound payment by paymentId

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


$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentRequestDetailDTO = new \OpenAPI\Client\Model\PaymentRequestDetailDTO(); // \OpenAPI\Client\Model\PaymentRequestDetailDTO | PaymentRequestDetailDTO

try {
    $result = $apiInstance->vendorapiSecureOutboundpaymentsDetailPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentRequestDetailDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureOutboundPaymentsApi->vendorapiSecureOutboundpaymentsDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentRequestDetailDTO** | [**\OpenAPI\Client\Model\PaymentRequestDetailDTO**](../Model/PaymentRequestDetailDTO.md)| PaymentRequestDetailDTO | |

### Return type

[**\OpenAPI\Client\Model\PaymentDetailResponseDTO**](../Model/PaymentDetailResponseDTO.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureOutboundpaymentsPost()`

```php
vendorapiSecureOutboundpaymentsPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentRequestDto): \OpenAPI\Client\Model\PaymentResponseDto
```

This API creates outbound payment request

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


$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentRequestDto = new \OpenAPI\Client\Model\PaymentRequestDto(); // \OpenAPI\Client\Model\PaymentRequestDto | PaymentRequestDto

try {
    $result = $apiInstance->vendorapiSecureOutboundpaymentsPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentRequestDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureOutboundPaymentsApi->vendorapiSecureOutboundpaymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentRequestDto** | [**\OpenAPI\Client\Model\PaymentRequestDto**](../Model/PaymentRequestDto.md)| PaymentRequestDto | |

### Return type

[**\OpenAPI\Client\Model\PaymentResponseDto**](../Model/PaymentResponseDto.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureOutboundpaymentsSearchPost()`

```php
vendorapiSecureOutboundpaymentsSearchPost($xApiKey, $xAppKey, $xVersion, $origin, $vendorId, $paymentBasedId, $paymentId, $vendorName, $paymentMethodType, $paymentMethodStatus, $amount, $fromAmount, $toAmount, $startDate, $endDate, $searchText, $sortField): \OpenAPI\Client\Model\PagePaymentListResponseDTO
```

This API gets all outbound payment

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


$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$vendorId = 'vendorId_example'; // string | sets vendorId
$paymentBasedId = 'paymentBasedId_example'; // string | sets paymentBasedId
$paymentId = 'paymentId_example'; // string | sets paymentId
$vendorName = 'vendorName_example'; // string | sets vendorName
$paymentMethodType = 'paymentMethodType_example'; // string | sets paymentMethodType
$paymentMethodStatus = 'paymentMethodStatus_example'; // string | sets paymentMethodStatus
$amount = 3.4; // float | sets amount
$fromAmount = 3.4; // float | sets fromAmount
$toAmount = 3.4; // float | sets toAmount
$startDate = 'startDate_example'; // string | sets startDate
$endDate = 'endDate_example'; // string | sets endDate
$searchText = 'searchText_example'; // string | sets searchText
$sortField = 'sortField_example'; // string | sets sortField

try {
    $result = $apiInstance->vendorapiSecureOutboundpaymentsSearchPost($xApiKey, $xAppKey, $xVersion, $origin, $vendorId, $paymentBasedId, $paymentId, $vendorName, $paymentMethodType, $paymentMethodStatus, $amount, $fromAmount, $toAmount, $startDate, $endDate, $searchText, $sortField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureOutboundPaymentsApi->vendorapiSecureOutboundpaymentsSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **vendorId** | **string**| sets vendorId | [optional] |
| **paymentBasedId** | **string**| sets paymentBasedId | [optional] |
| **paymentId** | **string**| sets paymentId | [optional] |
| **vendorName** | **string**| sets vendorName | [optional] |
| **paymentMethodType** | **string**| sets paymentMethodType | [optional] |
| **paymentMethodStatus** | **string**| sets paymentMethodStatus | [optional] |
| **amount** | **float**| sets amount | [optional] |
| **fromAmount** | **float**| sets fromAmount | [optional] |
| **toAmount** | **float**| sets toAmount | [optional] |
| **startDate** | **string**| sets startDate | [optional] |
| **endDate** | **string**| sets endDate | [optional] |
| **searchText** | **string**| sets searchText | [optional] |
| **sortField** | **string**| sets sortField | [optional] |

### Return type

[**\OpenAPI\Client\Model\PagePaymentListResponseDTO**](../Model/PagePaymentListResponseDTO.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
