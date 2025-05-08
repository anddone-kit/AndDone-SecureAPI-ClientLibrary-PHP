# OpenAPI\Client\SecureOrumApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureBankaccountsDetailsPost()**](SecureOrumApi.md#secureBankaccountsDetailsPost) | **POST** /secure/bankaccounts/details | This API will request for verified bank account. |
| [**secureBankaccountsVerifyPost()**](SecureOrumApi.md#secureBankaccountsVerifyPost) | **POST** /secure/bankaccounts/verify | This API will request for account verification. |


## `secureBankaccountsDetailsPost()`

```php
secureBankaccountsDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $id, $type, $verificationEntityRequest): \OpenAPI\Client\Model\VerifyBankAccountResponse
```

This API will request for verified bank account.

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


$apiInstance = new OpenAPI\Client\Api\SecureOrumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$id = 'id_example'; // string | The Bank Account Entity Id
$type = 'type_example'; // string | Set Type
$verificationEntityRequest = new \OpenAPI\Client\Model\VerificationEntityRequest(); // \OpenAPI\Client\Model\VerificationEntityRequest | Verification Entity

try {
    $result = $apiInstance->secureBankaccountsDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $id, $type, $verificationEntityRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureOrumApi->secureBankaccountsDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **id** | **string**| The Bank Account Entity Id | [optional] |
| **type** | **string**| Set Type | [optional] |
| **verificationEntityRequest** | [**\OpenAPI\Client\Model\VerificationEntityRequest**](../Model/VerificationEntityRequest.md)| Verification Entity | [optional] |

### Return type

[**\OpenAPI\Client\Model\VerifyBankAccountResponse**](../Model/VerifyBankAccountResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureBankaccountsVerifyPost()`

```php
secureBankaccountsVerifyPost($xApiKey, $xAppKey, $xVersion, $origin, $verifyBankAccountRequest): \OpenAPI\Client\Model\VerifyBankAccountResponse
```

This API will request for account verification.

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


$apiInstance = new OpenAPI\Client\Api\SecureOrumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$verifyBankAccountRequest = new \OpenAPI\Client\Model\VerifyBankAccountRequest(); // \OpenAPI\Client\Model\VerifyBankAccountRequest | Bank Accout detals

try {
    $result = $apiInstance->secureBankaccountsVerifyPost($xApiKey, $xAppKey, $xVersion, $origin, $verifyBankAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureOrumApi->secureBankaccountsVerifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **verifyBankAccountRequest** | [**\OpenAPI\Client\Model\VerifyBankAccountRequest**](../Model/VerifyBankAccountRequest.md)| Bank Accout detals | [optional] |

### Return type

[**\OpenAPI\Client\Model\VerifyBankAccountResponse**](../Model/VerifyBankAccountResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
