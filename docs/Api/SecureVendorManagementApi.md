# OpenAPI\Client\SecureVendorManagementApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vendorapiSecureMerchantsVendorsDeletePost()**](SecureVendorManagementApi.md#vendorapiSecureMerchantsVendorsDeletePost) | **POST** /vendorapi/secure/merchants/vendors/delete | This API deletes vendor into system |
| [**vendorapiSecureMerchantsVendorsDetailsPost()**](SecureVendorManagementApi.md#vendorapiSecureMerchantsVendorsDetailsPost) | **POST** /vendorapi/secure/merchants/vendors/details | This API gets details of particular vendor |
| [**vendorapiSecureMerchantsVendorsEditPost()**](SecureVendorManagementApi.md#vendorapiSecureMerchantsVendorsEditPost) | **POST** /vendorapi/secure/merchants/vendors/edit | This API Updates the existing vendor |
| [**vendorapiSecureMerchantsVendorsPost()**](SecureVendorManagementApi.md#vendorapiSecureMerchantsVendorsPost) | **POST** /vendorapi/secure/merchants/vendors | This API creates vendor into system |
| [**vendorapiSecureMerchantsVendorsSearchPost()**](SecureVendorManagementApi.md#vendorapiSecureMerchantsVendorsSearchPost) | **POST** /vendorapi/secure/merchants/vendors/search | This API returns list of all the Vendors of Merchant |
| [**vendorapiSecureMerchantsVendorsSuspendPost()**](SecureVendorManagementApi.md#vendorapiSecureMerchantsVendorsSuspendPost) | **POST** /vendorapi/secure/merchants/vendors/suspend | This API suspends vendor into system |
| [**vendorapiSecureMerchantsVendorsTimelinePost()**](SecureVendorManagementApi.md#vendorapiSecureMerchantsVendorsTimelinePost) | **POST** /vendorapi/secure/merchants/vendors/timeline | This API gets timeline of particular vendor |
| [**vendorapiSecureMerchantsVendorsUnsuspendPost()**](SecureVendorManagementApi.md#vendorapiSecureMerchantsVendorsUnsuspendPost) | **POST** /vendorapi/secure/merchants/vendors/unsuspend | This API unsuspends vendor into system |


## `vendorapiSecureMerchantsVendorsDeletePost()`

```php
vendorapiSecureMerchantsVendorsDeletePost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorStatusRequestDTO)
```

This API deletes vendor into system

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


$apiInstance = new OpenAPI\Client\Api\SecureVendorManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureVendorStatusRequestDTO = new \OpenAPI\Client\Model\SecureVendorStatusRequestDTO(); // \OpenAPI\Client\Model\SecureVendorStatusRequestDTO | SecureVendorStatusRequestDTO

try {
    $apiInstance->vendorapiSecureMerchantsVendorsDeletePost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorStatusRequestDTO);
} catch (Exception $e) {
    echo 'Exception when calling SecureVendorManagementApi->vendorapiSecureMerchantsVendorsDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureVendorStatusRequestDTO** | [**\OpenAPI\Client\Model\SecureVendorStatusRequestDTO**](../Model/SecureVendorStatusRequestDTO.md)| SecureVendorStatusRequestDTO | |

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

## `vendorapiSecureMerchantsVendorsDetailsPost()`

```php
vendorapiSecureMerchantsVendorsDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorRequestDTO): \OpenAPI\Client\Model\VendorResponseDTO
```

This API gets details of particular vendor

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


$apiInstance = new OpenAPI\Client\Api\SecureVendorManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureVendorRequestDTO = new \OpenAPI\Client\Model\SecureVendorRequestDTO(); // \OpenAPI\Client\Model\SecureVendorRequestDTO | SecureVendorRequestDTO

try {
    $result = $apiInstance->vendorapiSecureMerchantsVendorsDetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureVendorManagementApi->vendorapiSecureMerchantsVendorsDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureVendorRequestDTO** | [**\OpenAPI\Client\Model\SecureVendorRequestDTO**](../Model/SecureVendorRequestDTO.md)| SecureVendorRequestDTO | |

### Return type

[**\OpenAPI\Client\Model\VendorResponseDTO**](../Model/VendorResponseDTO.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureMerchantsVendorsEditPost()`

```php
vendorapiSecureMerchantsVendorsEditPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorUpdateRequestDTO): \OpenAPI\Client\Model\SecureVendorResponseDTO
```

This API Updates the existing vendor

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


$apiInstance = new OpenAPI\Client\Api\SecureVendorManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureVendorUpdateRequestDTO = new \OpenAPI\Client\Model\SecureVendorUpdateRequestDTO(); // \OpenAPI\Client\Model\SecureVendorUpdateRequestDTO | SecureVendorUpdateRequestDTO

try {
    $result = $apiInstance->vendorapiSecureMerchantsVendorsEditPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorUpdateRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureVendorManagementApi->vendorapiSecureMerchantsVendorsEditPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureVendorUpdateRequestDTO** | [**\OpenAPI\Client\Model\SecureVendorUpdateRequestDTO**](../Model/SecureVendorUpdateRequestDTO.md)| SecureVendorUpdateRequestDTO | |

### Return type

[**\OpenAPI\Client\Model\SecureVendorResponseDTO**](../Model/SecureVendorResponseDTO.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureMerchantsVendorsPost()`

```php
vendorapiSecureMerchantsVendorsPost($xApiKey, $xAppKey, $xVersion, $origin, $vendorRequestDTO): \OpenAPI\Client\Model\SecureVendorResponseDTO
```

This API creates vendor into system

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


$apiInstance = new OpenAPI\Client\Api\SecureVendorManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$vendorRequestDTO = new \OpenAPI\Client\Model\VendorRequestDTO(); // \OpenAPI\Client\Model\VendorRequestDTO | VendorRequestDTO

try {
    $result = $apiInstance->vendorapiSecureMerchantsVendorsPost($xApiKey, $xAppKey, $xVersion, $origin, $vendorRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureVendorManagementApi->vendorapiSecureMerchantsVendorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **vendorRequestDTO** | [**\OpenAPI\Client\Model\VendorRequestDTO**](../Model/VendorRequestDTO.md)| VendorRequestDTO | |

### Return type

[**\OpenAPI\Client\Model\SecureVendorResponseDTO**](../Model/SecureVendorResponseDTO.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureMerchantsVendorsSearchPost()`

```php
vendorapiSecureMerchantsVendorsSearchPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentMethodType, $attention, $vendorId, $vendorName, $vendorStatus, $createdBy, $startDate, $endDate, $pageSize, $searchText, $sortField, $startRow, $asc): \OpenAPI\Client\Model\PageVendorResponseDTO
```

This API returns list of all the Vendors of Merchant

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


$apiInstance = new OpenAPI\Client\Api\SecureVendorManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentMethodType = 'paymentMethodType_example'; // string | Set paymentMethodType
$attention = 'attention_example'; // string | Set attention
$vendorId = 'vendorId_example'; // string | Set vendorId
$vendorName = 'vendorName_example'; // string | Set vendorName
$vendorStatus = 'vendorStatus_example'; // string | Set vendorStatus
$createdBy = 'createdBy_example'; // string | Set createdBy
$startDate = 'startDate_example'; // string | set start Date
$endDate = 'endDate_example'; // string | set end Date
$pageSize = 3.4; // float | Set PageSize
$searchText = 'searchText_example'; // string | search Text
$sortField = 'sortField_example'; // string | Set SortField
$startRow = 'startRow_example'; // string | Set StartRow
$asc = True; // bool | Set Asc

try {
    $result = $apiInstance->vendorapiSecureMerchantsVendorsSearchPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentMethodType, $attention, $vendorId, $vendorName, $vendorStatus, $createdBy, $startDate, $endDate, $pageSize, $searchText, $sortField, $startRow, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureVendorManagementApi->vendorapiSecureMerchantsVendorsSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentMethodType** | **string**| Set paymentMethodType | [optional] |
| **attention** | **string**| Set attention | [optional] |
| **vendorId** | **string**| Set vendorId | [optional] |
| **vendorName** | **string**| Set vendorName | [optional] |
| **vendorStatus** | **string**| Set vendorStatus | [optional] |
| **createdBy** | **string**| Set createdBy | [optional] |
| **startDate** | **string**| set start Date | [optional] |
| **endDate** | **string**| set end Date | [optional] |
| **pageSize** | **float**| Set PageSize | [optional] |
| **searchText** | **string**| search Text | [optional] |
| **sortField** | **string**| Set SortField | [optional] |
| **startRow** | **string**| Set StartRow | [optional] |
| **asc** | **bool**| Set Asc | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageVendorResponseDTO**](../Model/PageVendorResponseDTO.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureMerchantsVendorsSuspendPost()`

```php
vendorapiSecureMerchantsVendorsSuspendPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorStatusRequestDTO)
```

This API suspends vendor into system

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


$apiInstance = new OpenAPI\Client\Api\SecureVendorManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureVendorStatusRequestDTO = new \OpenAPI\Client\Model\SecureVendorStatusRequestDTO(); // \OpenAPI\Client\Model\SecureVendorStatusRequestDTO | SecureVendorStatusRequestDTO

try {
    $apiInstance->vendorapiSecureMerchantsVendorsSuspendPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorStatusRequestDTO);
} catch (Exception $e) {
    echo 'Exception when calling SecureVendorManagementApi->vendorapiSecureMerchantsVendorsSuspendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureVendorStatusRequestDTO** | [**\OpenAPI\Client\Model\SecureVendorStatusRequestDTO**](../Model/SecureVendorStatusRequestDTO.md)| SecureVendorStatusRequestDTO | |

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

## `vendorapiSecureMerchantsVendorsTimelinePost()`

```php
vendorapiSecureMerchantsVendorsTimelinePost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorTimelineRequestDTO): \OpenAPI\Client\Model\VendorTimelineResponseListInner[]
```

This API gets timeline of particular vendor

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


$apiInstance = new OpenAPI\Client\Api\SecureVendorManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureVendorTimelineRequestDTO = new \OpenAPI\Client\Model\SecureVendorTimelineRequestDTO(); // \OpenAPI\Client\Model\SecureVendorTimelineRequestDTO | SecureVendorTimelineRequestDTO

try {
    $result = $apiInstance->vendorapiSecureMerchantsVendorsTimelinePost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorTimelineRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureVendorManagementApi->vendorapiSecureMerchantsVendorsTimelinePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureVendorTimelineRequestDTO** | [**\OpenAPI\Client\Model\SecureVendorTimelineRequestDTO**](../Model/SecureVendorTimelineRequestDTO.md)| SecureVendorTimelineRequestDTO | |

### Return type

[**\OpenAPI\Client\Model\VendorTimelineResponseListInner[]**](../Model/VendorTimelineResponseListInner.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorapiSecureMerchantsVendorsUnsuspendPost()`

```php
vendorapiSecureMerchantsVendorsUnsuspendPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorStatusRequestDTO)
```

This API unsuspends vendor into system

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


$apiInstance = new OpenAPI\Client\Api\SecureVendorManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$secureVendorStatusRequestDTO = new \OpenAPI\Client\Model\SecureVendorStatusRequestDTO(); // \OpenAPI\Client\Model\SecureVendorStatusRequestDTO | SecureVendorStatusRequestDTO

try {
    $apiInstance->vendorapiSecureMerchantsVendorsUnsuspendPost($xApiKey, $xAppKey, $xVersion, $origin, $secureVendorStatusRequestDTO);
} catch (Exception $e) {
    echo 'Exception when calling SecureVendorManagementApi->vendorapiSecureMerchantsVendorsUnsuspendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **secureVendorStatusRequestDTO** | [**\OpenAPI\Client\Model\SecureVendorStatusRequestDTO**](../Model/SecureVendorStatusRequestDTO.md)| SecureVendorStatusRequestDTO | |

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
