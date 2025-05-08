# OpenAPI\Client\SecureTokenManagementApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureTokensActivationsDelete()**](SecureTokenManagementApi.md#secureTokensActivationsDelete) | **DELETE** /secure/tokens/activations | This API is used for deactivating merchant token securely |
| [**secureTokensDetailsPost()**](SecureTokenManagementApi.md#secureTokensDetailsPost) | **POST** /secure/tokens/details | This API is used for getting details of Merchant Token by Token link. |


## `secureTokensActivationsDelete()`

```php
secureTokensActivationsDelete($xApiKey, $xAppKey, $xVersion, $origin, $tokenRequest)
```

This API is used for deactivating merchant token securely

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


$apiInstance = new OpenAPI\Client\Api\SecureTokenManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$tokenRequest = new \OpenAPI\Client\Model\TokenRequest(); // \OpenAPI\Client\Model\TokenRequest | secure merchant token request

try {
    $apiInstance->secureTokensActivationsDelete($xApiKey, $xAppKey, $xVersion, $origin, $tokenRequest);
} catch (Exception $e) {
    echo 'Exception when calling SecureTokenManagementApi->secureTokensActivationsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **tokenRequest** | [**\OpenAPI\Client\Model\TokenRequest**](../Model/TokenRequest.md)| secure merchant token request | |

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

## `secureTokensDetailsPost()`

```php
secureTokensDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTokenLinkRequest): \OpenAPI\Client\Model\SecureMerchantTokenShortResponse
```

This API is used for getting details of Merchant Token by Token link.

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


$apiInstance = new OpenAPI\Client\Api\SecureTokenManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureTokenLinkRequest = new \OpenAPI\Client\Model\SecureTokenLinkRequest(); // \OpenAPI\Client\Model\SecureTokenLinkRequest | Secure Token Link Id Request

try {
    $result = $apiInstance->secureTokensDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTokenLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureTokenManagementApi->secureTokensDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureTokenLinkRequest** | [**\OpenAPI\Client\Model\SecureTokenLinkRequest**](../Model/SecureTokenLinkRequest.md)| Secure Token Link Id Request | |

### Return type

[**\OpenAPI\Client\Model\SecureMerchantTokenShortResponse**](../Model/SecureMerchantTokenShortResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
