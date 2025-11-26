# OpenAPI\Client\SecureOutboundPaymentsApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vendorapiSecureOutboundPaymentsTimelinesPost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundPaymentsTimelinesPost) | **POST** /vendorapi/secure/outboundPayments/timelines | This API gets outbound payment timelines |
| [**vendorapiSecureOutboundpaymentsCancelPost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundpaymentsCancelPost) | **POST** /vendorapi/secure/outboundpayments/cancel | This API cancel outbound payment request |
| [**vendorapiSecureOutboundpaymentsDetailPost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundpaymentsDetailPost) | **POST** /vendorapi/secure/outboundpayments/detail | This API fetch outbound payment by paymentId |
| [**vendorapiSecureOutboundpaymentsImagePost()**](SecureOutboundPaymentsApi.md#vendorapiSecureOutboundpaymentsImagePost) | **POST** /vendorapi/secure/outboundpayments/image | This API gets outbound payment JPG image in Base64 string format |
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



$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureOutboundpaymentsImagePost()`

```php
vendorapiSecureOutboundpaymentsImagePost($xApiKey, $xAppKey, $xVersion, $origin, $paymentTimeLineRequestDto): \OpenAPI\Client\Model\OutboundPaymentImageResponseDTO
```

This API gets outbound payment JPG image in Base64 string format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentTimeLineRequestDto = new \OpenAPI\Client\Model\PaymentTimeLineRequestDto(); // \OpenAPI\Client\Model\PaymentTimeLineRequestDto | OutboundPaymentImageRequestDto

try {
    $result = $apiInstance->vendorapiSecureOutboundpaymentsImagePost($xApiKey, $xAppKey, $xVersion, $origin, $paymentTimeLineRequestDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureOutboundPaymentsApi->vendorapiSecureOutboundpaymentsImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentTimeLineRequestDto** | [**\OpenAPI\Client\Model\PaymentTimeLineRequestDto**](../Model/PaymentTimeLineRequestDto.md)| OutboundPaymentImageRequestDto | |

### Return type

[**\OpenAPI\Client\Model\OutboundPaymentImageResponseDTO**](../Model/OutboundPaymentImageResponseDTO.md)

### Authorization

No authorization required

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



$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureOutboundpaymentsSearchPost()`

```php
vendorapiSecureOutboundpaymentsSearchPost($xApiKey, $xAppKey, $xVersion, $origin, $vendorId, $paymentBasedId, $paymentId, $vendorName, $paymentMethodType, $paymentMethodStatus, $amount, $fromAmount, $toAmount, $startDate, $endDate, $searchText, $startRow, $pageSize, $sortField, $asc): \OpenAPI\Client\Model\PagePaymentListResponseDTO
```

This API gets all outbound payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureOutboundPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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
$startRow = 56; // int | sets startRow
$pageSize = 56; // int | sets pageSize
$sortField = 'sortField_example'; // string | sets sortField
$asc = True; // bool | Set Asc

try {
    $result = $apiInstance->vendorapiSecureOutboundpaymentsSearchPost($xApiKey, $xAppKey, $xVersion, $origin, $vendorId, $paymentBasedId, $paymentId, $vendorName, $paymentMethodType, $paymentMethodStatus, $amount, $fromAmount, $toAmount, $startDate, $endDate, $searchText, $startRow, $pageSize, $sortField, $asc);
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
| **startRow** | **int**| sets startRow | [optional] |
| **pageSize** | **int**| sets pageSize | [optional] |
| **sortField** | **string**| sets sortField | [optional] |
| **asc** | **bool**| Set Asc | [optional] |

### Return type

[**\OpenAPI\Client\Model\PagePaymentListResponseDTO**](../Model/PagePaymentListResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
