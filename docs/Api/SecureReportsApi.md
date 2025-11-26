# OpenAPI\Client\SecureReportsApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**secureReportsDownloadsPost()**](SecureReportsApi.md#secureReportsDownloadsPost) | **POST** /secure/reports/downloads | This API will add system report. |


## `secureReportsDownloadsPost()`

```php
secureReportsDownloadsPost($xApiKey, $xAppKey, $xVersion, $origin, $reportDownloadRequest)
```

This API will add system report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$reportDownloadRequest = new \OpenAPI\Client\Model\ReportDownloadRequest(); // \OpenAPI\Client\Model\ReportDownloadRequest | ReportDownloadRequest

try {
    $apiInstance->secureReportsDownloadsPost($xApiKey, $xAppKey, $xVersion, $origin, $reportDownloadRequest);
} catch (Exception $e) {
    echo 'Exception when calling SecureReportsApi->secureReportsDownloadsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **reportDownloadRequest** | [**\OpenAPI\Client\Model\ReportDownloadRequest**](../Model/ReportDownloadRequest.md)| ReportDownloadRequest | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
