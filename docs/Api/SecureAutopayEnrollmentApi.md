# OpenAPI\Client\SecureAutopayEnrollmentApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureAutopayenrollmentPost()**](SecureAutopayEnrollmentApi.md#secureAutopayenrollmentPost) | **POST** /secure/autopayenrollment | This API is used for Autopay Enrollment. |


## `secureAutopayenrollmentPost()`

```php
secureAutopayenrollmentPost($xApiKey, $xAppKey, $xVersion, $origin, $autoPayEnrollmentRequest): \OpenAPI\Client\Model\AutoPayEnrollmentResponse
```

This API is used for Autopay Enrollment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureAutopayEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$autoPayEnrollmentRequest = new \OpenAPI\Client\Model\AutoPayEnrollmentRequest(); // \OpenAPI\Client\Model\AutoPayEnrollmentRequest | Autopay Enrollment Detail

try {
    $result = $apiInstance->secureAutopayenrollmentPost($xApiKey, $xAppKey, $xVersion, $origin, $autoPayEnrollmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureAutopayEnrollmentApi->secureAutopayenrollmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **autoPayEnrollmentRequest** | [**\OpenAPI\Client\Model\AutoPayEnrollmentRequest**](../Model/AutoPayEnrollmentRequest.md)| Autopay Enrollment Detail | |

### Return type

[**\OpenAPI\Client\Model\AutoPayEnrollmentResponse**](../Model/AutoPayEnrollmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
