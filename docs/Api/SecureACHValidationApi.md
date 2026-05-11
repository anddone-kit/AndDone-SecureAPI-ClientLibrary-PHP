# OpenAPI\Client\SecureACHValidationApi

All URIs are relative to https://api.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**utilityapiSecureVerifybankaccountsPost()**](SecureACHValidationApi.md#utilityapiSecureVerifybankaccountsPost) | **POST** /utilityapi/secure/verifybankaccounts | This API verifies bank account using secure ACH validation |


## `utilityapiSecureVerifybankaccountsPost()`

```php
utilityapiSecureVerifybankaccountsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVerifyBankAccountRequestDTO): \OpenAPI\Client\Model\VerifyBankAccountResponse
```

This API verifies bank account using secure ACH validation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureACHValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureVerifyBankAccountRequestDTO = new \OpenAPI\Client\Model\SecureVerifyBankAccountRequestDTO(); // \OpenAPI\Client\Model\SecureVerifyBankAccountRequestDTO | SecureVerifyBankAccountRequestDTO

try {
    $result = $apiInstance->utilityapiSecureVerifybankaccountsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVerifyBankAccountRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureACHValidationApi->utilityapiSecureVerifybankaccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureVerifyBankAccountRequestDTO** | [**\OpenAPI\Client\Model\SecureVerifyBankAccountRequestDTO**](../Model/SecureVerifyBankAccountRequestDTO.md)| SecureVerifyBankAccountRequestDTO | |

### Return type

[**\OpenAPI\Client\Model\VerifyBankAccountResponse**](../Model/VerifyBankAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
