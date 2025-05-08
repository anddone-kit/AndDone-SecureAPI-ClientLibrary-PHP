# OpenAPI\Client\SecureTokenLinksApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureTokenlinksDetailsPost()**](SecureTokenLinksApi.md#secureTokenlinksDetailsPost) | **POST** /secure/tokenlinks/details | This API is used for getting Token Links by TokenLink ID |
| [**secureTokenlinksExpirationsPost()**](SecureTokenLinksApi.md#secureTokenlinksExpirationsPost) | **POST** /secure/tokenlinks/expirations | This API expires the token link. |
| [**secureTokenlinksListPost()**](SecureTokenLinksApi.md#secureTokenlinksListPost) | **POST** /secure/tokenlinks/list | This API is used for getting all Token Links for Merchant |
| [**secureTokenlinksPost()**](SecureTokenLinksApi.md#secureTokenlinksPost) | **POST** /secure/tokenlinks | This API is use to create Secure Token Links |
| [**secureTokenlinksPut()**](SecureTokenLinksApi.md#secureTokenlinksPut) | **PUT** /secure/tokenlinks | This API will update the expireIn and paymentType of Token Link. |


## `secureTokenlinksDetailsPost()`

```php
secureTokenlinksDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTokenLinkRequest): \OpenAPI\Client\Model\SecureTokenLinkByIdResponse
```

This API is used for getting Token Links by TokenLink ID

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


$apiInstance = new OpenAPI\Client\Api\SecureTokenLinksApi(
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
    $result = $apiInstance->secureTokenlinksDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTokenLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureTokenLinksApi->secureTokenlinksDetailsPost: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SecureTokenLinkByIdResponse**](../Model/SecureTokenLinkByIdResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureTokenlinksExpirationsPost()`

```php
secureTokenlinksExpirationsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTokenLinkRequest): \OpenAPI\Client\Model\SecureTokenLinkExpiredResponse
```

This API expires the token link.

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


$apiInstance = new OpenAPI\Client\Api\SecureTokenLinksApi(
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
    $result = $apiInstance->secureTokenlinksExpirationsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureTokenLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureTokenLinksApi->secureTokenlinksExpirationsPost: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SecureTokenLinkExpiredResponse**](../Model/SecureTokenLinkExpiredResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureTokenlinksListPost()`

```php
secureTokenlinksListPost($xApiKey, $xAppKey, $xVersion, $origin, $email, $status, $phone, $statuses, $title, $paymentDescription, $invoiceNumber, $expiryDate, $fromExpiryDate, $freeTextSearch, $tokenLinkId, $toExpiryDate, $fromDate, $toDate, $startRow, $pageSize, $sortField, $asc): \OpenAPI\Client\Model\TokenLinkResponse
```

This API is used for getting all Token Links for Merchant

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


$apiInstance = new OpenAPI\Client\Api\SecureTokenLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$email = 'email_example'; // string | email
$status = 'status_example'; // string | status
$phone = 'phone_example'; // string | phone
$statuses = 'statuses_example'; // string | statuses
$title = 'title_example'; // string | title
$paymentDescription = 'paymentDescription_example'; // string | paymentDescription
$invoiceNumber = 'invoiceNumber_example'; // string | invoiceNumber
$expiryDate = 'expiryDate_example'; // string | expiryDate
$fromExpiryDate = 'fromExpiryDate_example'; // string | fromExpiryDate
$freeTextSearch = 'freeTextSearch_example'; // string | freeTextSearch
$tokenLinkId = 'tokenLinkId_example'; // string | tokenLinkId
$toExpiryDate = 'toExpiryDate_example'; // string | toExpiryDate
$fromDate = 'fromDate_example'; // string | fromDate
$toDate = 'toDate_example'; // string | toDate
$startRow = 3.4; // float | Set StartRow
$pageSize = 3.4; // float | Set PageSize
$sortField = 'sortField_example'; // string | Set SortField
$asc = True; // bool | Set Asc

try {
    $result = $apiInstance->secureTokenlinksListPost($xApiKey, $xAppKey, $xVersion, $origin, $email, $status, $phone, $statuses, $title, $paymentDescription, $invoiceNumber, $expiryDate, $fromExpiryDate, $freeTextSearch, $tokenLinkId, $toExpiryDate, $fromDate, $toDate, $startRow, $pageSize, $sortField, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureTokenLinksApi->secureTokenlinksListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **email** | **string**| email | [optional] |
| **status** | **string**| status | [optional] |
| **phone** | **string**| phone | [optional] |
| **statuses** | **string**| statuses | [optional] |
| **title** | **string**| title | [optional] |
| **paymentDescription** | **string**| paymentDescription | [optional] |
| **invoiceNumber** | **string**| invoiceNumber | [optional] |
| **expiryDate** | **string**| expiryDate | [optional] |
| **fromExpiryDate** | **string**| fromExpiryDate | [optional] |
| **freeTextSearch** | **string**| freeTextSearch | [optional] |
| **tokenLinkId** | **string**| tokenLinkId | [optional] |
| **toExpiryDate** | **string**| toExpiryDate | [optional] |
| **fromDate** | **string**| fromDate | [optional] |
| **toDate** | **string**| toDate | [optional] |
| **startRow** | **float**| Set StartRow | [optional] |
| **pageSize** | **float**| Set PageSize | [optional] |
| **sortField** | **string**| Set SortField | [optional] |
| **asc** | **bool**| Set Asc | [optional] |

### Return type

[**\OpenAPI\Client\Model\TokenLinkResponse**](../Model/TokenLinkResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureTokenlinksPost()`

```php
secureTokenlinksPost($xApiKey, $xAppKey, $xVersion, $origin, $tokenLinkSecureRequest): \OpenAPI\Client\Model\SecureTokenLinkResponse
```

This API is use to create Secure Token Links

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


$apiInstance = new OpenAPI\Client\Api\SecureTokenLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$tokenLinkSecureRequest = new \OpenAPI\Client\Model\TokenLinkSecureRequest(); // \OpenAPI\Client\Model\TokenLinkSecureRequest | Secure Token Link Request

try {
    $result = $apiInstance->secureTokenlinksPost($xApiKey, $xAppKey, $xVersion, $origin, $tokenLinkSecureRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureTokenLinksApi->secureTokenlinksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **tokenLinkSecureRequest** | [**\OpenAPI\Client\Model\TokenLinkSecureRequest**](../Model/TokenLinkSecureRequest.md)| Secure Token Link Request | |

### Return type

[**\OpenAPI\Client\Model\SecureTokenLinkResponse**](../Model/SecureTokenLinkResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `secureTokenlinksPut()`

```php
secureTokenlinksPut($xApiKey, $xAppKey, $xVersion, $origin, $secureTokenLinkUpdateRequest)
```

This API will update the expireIn and paymentType of Token Link.

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


$apiInstance = new OpenAPI\Client\Api\SecureTokenLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureTokenLinkUpdateRequest = new \OpenAPI\Client\Model\SecureTokenLinkUpdateRequest(); // \OpenAPI\Client\Model\SecureTokenLinkUpdateRequest | Secure Token Link Update Request

try {
    $apiInstance->secureTokenlinksPut($xApiKey, $xAppKey, $xVersion, $origin, $secureTokenLinkUpdateRequest);
} catch (Exception $e) {
    echo 'Exception when calling SecureTokenLinksApi->secureTokenlinksPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureTokenLinkUpdateRequest** | [**\OpenAPI\Client\Model\SecureTokenLinkUpdateRequest**](../Model/SecureTokenLinkUpdateRequest.md)| Secure Token Link Update Request | |

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
