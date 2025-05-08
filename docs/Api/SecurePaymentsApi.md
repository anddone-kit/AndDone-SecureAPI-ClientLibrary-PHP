# OpenAPI\Client\SecurePaymentsApi

All URIs are relative to https://api.uat.anddone.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**securePaymentsExportPost()**](SecurePaymentsApi.md#securePaymentsExportPost) | **POST** /secure/payments/export | This API gets Secure payment by search criteria for the merchant. |
| [**securePaymentsPost()**](SecurePaymentsApi.md#securePaymentsPost) | **POST** /secure/payments | This API posts new Secure payment request for the merchant. |
| [**securePaymentsSearchPost()**](SecurePaymentsApi.md#securePaymentsSearchPost) | **POST** /secure/payments/search | This API gets Secure payment by search criteria for the merchant. |
| [**securePaymentsdetailsPost()**](SecurePaymentsApi.md#securePaymentsdetailsPost) | **POST** /secure/paymentsdetails | This API is used for getting details of Payments |


## `securePaymentsExportPost()`

```php
securePaymentsExportPost($xApiKey, $xAppKey, $xVersion, $origin, $startDate, $endDate, $transactionIds, $referenceTransactionId, $transactionStatuses, $customerIds, $transactionType, $authCode, $cardHolderName, $shopperName, $amount, $fromAmount, $toAmount, $channelTypes, $maskAccount, $customerName, $recurringId, $referenceNo, $exportToCsv, $exportToPDF, $transactionOrigins, $transactionSourceType, $sourceId, $traceNumbers, $binNumber, $processMethod, $searchText, $merchantReference, $additionalFields, $additionalFieldValue, $paymentMethod, $accountAlias, $isPaid, $paymentTypes, $merchantId, $paymentCategories, $suppressTechnologyFee, $batchId, $sortField, $startRow, $pageSize, $asc)
```

This API gets Secure payment by search criteria for the merchant.

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


$apiInstance = new OpenAPI\Client\Api\SecurePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$startDate = 'startDate_example'; // string | Start date for the transaction search
$endDate = 'endDate_example'; // string | End date for the transaction search
$transactionIds = 'transactionIds_example'; // string | Transaction identifier
$referenceTransactionId = 'referenceTransactionId_example'; // string | Reference transaction identifier
$transactionStatuses = 'transactionStatuses_example'; // string | Status of the transaction
$customerIds = 'customerIds_example'; // string | Customer IDs associated with the transaction
$transactionType = 'transactionType_example'; // string | Type of the transaction
$authCode = 'authCode_example'; // string | Authorization code of the transaction
$cardHolderName = 'cardHolderName_example'; // string | Name of the cardholder
$shopperName = 'shopperName_example'; // string | ShopperName of the cardholder
$amount = 3.4; // float | Transaction amount
$fromAmount = 3.4; // float | Minimum transaction amount
$toAmount = 3.4; // float | Maximum transaction amount
$channelTypes = 'channelTypes_example'; // string | Channel types used for the transaction
$maskAccount = 'maskAccount_example'; // string | Masked account number
$customerName = 'customerName_example'; // string | Name of the customer
$recurringId = 'recurringId_example'; // string | Recurring payment ID
$referenceNo = 'referenceNo_example'; // string | Reference number
$exportToCsv = True; // bool | Export To Csv
$exportToPDF = True; // bool | Export To PDF
$transactionOrigins = 'transactionOrigins_example'; // string | Type of origin used in the transaction
$transactionSourceType = 'transactionSourceType_example'; // string | Transaction source type of the transaction
$sourceId = 3.4; // float | Set SourceId
$traceNumbers = 'traceNumbers_example'; // string | TraceNumbers associated with the transaction
$binNumber = 'binNumber_example'; // string | BinNumber
$processMethod = 'processMethod_example'; // string | Process Method used for the transaction
$searchText = 'searchText_example'; // string | SearchText of the transaction
$merchantReference = 'merchantReference_example'; // string | Merchant Reference of the transaction
$additionalFields = 'additionalFields_example'; // string | Additional Fields
$additionalFieldValue = 'additionalFieldValue_example'; // string | AdditionalFieldValue
$paymentMethod = 'paymentMethod_example'; // string | Payment Method
$accountAlias = 'accountAlias_example'; // string | Set AccountAlias
$isPaid = True; // bool | Set IsPaid
$paymentTypes = 'paymentTypes_example'; // string | Type of payment used in the transaction
$merchantId = 'merchantId_example'; // string | Search with Merchant Id
$paymentCategories = 'paymentCategories_example'; // string | Set PaymentCategories
$suppressTechnologyFee = True; // bool | SuppressTechnologyFee
$batchId = 'batchId_example'; // string | BatchId
$sortField = 'sortField_example'; // string | SortField
$startRow = 56; // int | Set StartRow
$pageSize = 3.4; // float | Set PageSize
$asc = True; // bool | Set Asc

try {
    $apiInstance->securePaymentsExportPost($xApiKey, $xAppKey, $xVersion, $origin, $startDate, $endDate, $transactionIds, $referenceTransactionId, $transactionStatuses, $customerIds, $transactionType, $authCode, $cardHolderName, $shopperName, $amount, $fromAmount, $toAmount, $channelTypes, $maskAccount, $customerName, $recurringId, $referenceNo, $exportToCsv, $exportToPDF, $transactionOrigins, $transactionSourceType, $sourceId, $traceNumbers, $binNumber, $processMethod, $searchText, $merchantReference, $additionalFields, $additionalFieldValue, $paymentMethod, $accountAlias, $isPaid, $paymentTypes, $merchantId, $paymentCategories, $suppressTechnologyFee, $batchId, $sortField, $startRow, $pageSize, $asc);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentsApi->securePaymentsExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **startDate** | **string**| Start date for the transaction search | [optional] |
| **endDate** | **string**| End date for the transaction search | [optional] |
| **transactionIds** | **string**| Transaction identifier | [optional] |
| **referenceTransactionId** | **string**| Reference transaction identifier | [optional] |
| **transactionStatuses** | **string**| Status of the transaction | [optional] |
| **customerIds** | **string**| Customer IDs associated with the transaction | [optional] |
| **transactionType** | **string**| Type of the transaction | [optional] |
| **authCode** | **string**| Authorization code of the transaction | [optional] |
| **cardHolderName** | **string**| Name of the cardholder | [optional] |
| **shopperName** | **string**| ShopperName of the cardholder | [optional] |
| **amount** | **float**| Transaction amount | [optional] |
| **fromAmount** | **float**| Minimum transaction amount | [optional] |
| **toAmount** | **float**| Maximum transaction amount | [optional] |
| **channelTypes** | **string**| Channel types used for the transaction | [optional] |
| **maskAccount** | **string**| Masked account number | [optional] |
| **customerName** | **string**| Name of the customer | [optional] |
| **recurringId** | **string**| Recurring payment ID | [optional] |
| **referenceNo** | **string**| Reference number | [optional] |
| **exportToCsv** | **bool**| Export To Csv | [optional] |
| **exportToPDF** | **bool**| Export To PDF | [optional] |
| **transactionOrigins** | **string**| Type of origin used in the transaction | [optional] |
| **transactionSourceType** | **string**| Transaction source type of the transaction | [optional] |
| **sourceId** | **float**| Set SourceId | [optional] |
| **traceNumbers** | **string**| TraceNumbers associated with the transaction | [optional] |
| **binNumber** | **string**| BinNumber | [optional] |
| **processMethod** | **string**| Process Method used for the transaction | [optional] |
| **searchText** | **string**| SearchText of the transaction | [optional] |
| **merchantReference** | **string**| Merchant Reference of the transaction | [optional] |
| **additionalFields** | **string**| Additional Fields | [optional] |
| **additionalFieldValue** | **string**| AdditionalFieldValue | [optional] |
| **paymentMethod** | **string**| Payment Method | [optional] |
| **accountAlias** | **string**| Set AccountAlias | [optional] |
| **isPaid** | **bool**| Set IsPaid | [optional] |
| **paymentTypes** | **string**| Type of payment used in the transaction | [optional] |
| **merchantId** | **string**| Search with Merchant Id | [optional] |
| **paymentCategories** | **string**| Set PaymentCategories | [optional] |
| **suppressTechnologyFee** | **bool**| SuppressTechnologyFee | [optional] |
| **batchId** | **string**| BatchId | [optional] |
| **sortField** | **string**| SortField | [optional] |
| **startRow** | **int**| Set StartRow | [optional] |
| **pageSize** | **float**| Set PageSize | [optional] |
| **asc** | **bool**| Set Asc | [optional] |

### Return type

void (empty response body)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securePaymentsPost()`

```php
securePaymentsPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentRequest): \OpenAPI\Client\Model\TransactionDetailResponse
```

This API posts new Secure payment request for the merchant.

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


$apiInstance = new OpenAPI\Client\Api\SecurePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$paymentRequest = new \OpenAPI\Client\Model\PaymentRequest(); // \OpenAPI\Client\Model\PaymentRequest | Payment Detail

try {
    $result = $apiInstance->securePaymentsPost($xApiKey, $xAppKey, $xVersion, $origin, $paymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentsApi->securePaymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **paymentRequest** | [**\OpenAPI\Client\Model\PaymentRequest**](../Model/PaymentRequest.md)| Payment Detail | |

### Return type

[**\OpenAPI\Client\Model\TransactionDetailResponse**](../Model/TransactionDetailResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securePaymentsSearchPost()`

```php
securePaymentsSearchPost($xApiKey, $xAppKey, $xVersion, $origin, $startDate, $endDate, $transactionIds, $referenceTransactionId, $transactionStatuses, $customerIds, $transactionType, $authCode, $cardHolderName, $shopperName, $amount, $fromAmount, $toAmount, $channelTypes, $maskAccount, $customerName, $recurringId, $referenceNo, $exportToCsv, $exportToPDF, $transactionOrigins, $transactionSourceType, $sourceId, $traceNumbers, $binNumber, $processMethod, $searchText, $merchantReference, $additionalFields, $additionalFieldValue, $paymentMethod, $accountAlias, $isPaid, $paymentTypes, $merchantId, $paymentCategories, $suppressTechnologyFee, $batchId, $sortField, $startRow, $pageSize, $asc): \OpenAPI\Client\Model\MerchantTransactionEntityResponse
```

This API gets Secure payment by search criteria for the merchant.

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


$apiInstance = new OpenAPI\Client\Api\SecurePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$startDate = 'startDate_example'; // string | Start date for the transaction search
$endDate = 'endDate_example'; // string | End date for the transaction search
$transactionIds = 'transactionIds_example'; // string | Transaction identifier
$referenceTransactionId = 'referenceTransactionId_example'; // string | Reference transaction identifier
$transactionStatuses = 'transactionStatuses_example'; // string | Status of the transaction
$customerIds = 'customerIds_example'; // string | Customer IDs associated with the transaction
$transactionType = 'transactionType_example'; // string | Type of the transaction
$authCode = 'authCode_example'; // string | Authorization code of the transaction
$cardHolderName = 'cardHolderName_example'; // string | Name of the cardholder
$shopperName = 'shopperName_example'; // string | ShopperName of the cardholder
$amount = 3.4; // float | Transaction amount
$fromAmount = 3.4; // float | Minimum transaction amount
$toAmount = 3.4; // float | Maximum transaction amount
$channelTypes = 'channelTypes_example'; // string | Channel types used for the transaction
$maskAccount = 'maskAccount_example'; // string | Masked account number
$customerName = 'customerName_example'; // string | Name of the customer
$recurringId = 'recurringId_example'; // string | Recurring payment ID
$referenceNo = 'referenceNo_example'; // string | Reference number
$exportToCsv = True; // bool | Export To Csv
$exportToPDF = True; // bool | Export To PDF
$transactionOrigins = 'transactionOrigins_example'; // string | Type of origin used in the transaction
$transactionSourceType = 'transactionSourceType_example'; // string | Transaction source type of the transaction
$sourceId = 3.4; // float | Set SourceId
$traceNumbers = 'traceNumbers_example'; // string | TraceNumbers associated with the transaction
$binNumber = 'binNumber_example'; // string | BinNumber
$processMethod = 'processMethod_example'; // string | Process Method used for the transaction
$searchText = 'searchText_example'; // string | SearchText of the transaction
$merchantReference = 'merchantReference_example'; // string | Merchant Reference of the transaction
$additionalFields = 'additionalFields_example'; // string | Additional Fields
$additionalFieldValue = 'additionalFieldValue_example'; // string | AdditionalFieldValue
$paymentMethod = 'paymentMethod_example'; // string | Payment Method
$accountAlias = 'accountAlias_example'; // string | Set AccountAlias
$isPaid = True; // bool | Set IsPaid
$paymentTypes = 'paymentTypes_example'; // string | Type of payment used in the transaction
$merchantId = 'merchantId_example'; // string | Search with Merchant Id
$paymentCategories = 'paymentCategories_example'; // string | Set PaymentCategories
$suppressTechnologyFee = True; // bool | SuppressTechnologyFee
$batchId = 'batchId_example'; // string | BatchId
$sortField = 'sortField_example'; // string | SortField
$startRow = 56; // int | Set StartRow
$pageSize = 3.4; // float | Set PageSize
$asc = True; // bool | Set Asc

try {
    $result = $apiInstance->securePaymentsSearchPost($xApiKey, $xAppKey, $xVersion, $origin, $startDate, $endDate, $transactionIds, $referenceTransactionId, $transactionStatuses, $customerIds, $transactionType, $authCode, $cardHolderName, $shopperName, $amount, $fromAmount, $toAmount, $channelTypes, $maskAccount, $customerName, $recurringId, $referenceNo, $exportToCsv, $exportToPDF, $transactionOrigins, $transactionSourceType, $sourceId, $traceNumbers, $binNumber, $processMethod, $searchText, $merchantReference, $additionalFields, $additionalFieldValue, $paymentMethod, $accountAlias, $isPaid, $paymentTypes, $merchantId, $paymentCategories, $suppressTechnologyFee, $batchId, $sortField, $startRow, $pageSize, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentsApi->securePaymentsSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **startDate** | **string**| Start date for the transaction search | [optional] |
| **endDate** | **string**| End date for the transaction search | [optional] |
| **transactionIds** | **string**| Transaction identifier | [optional] |
| **referenceTransactionId** | **string**| Reference transaction identifier | [optional] |
| **transactionStatuses** | **string**| Status of the transaction | [optional] |
| **customerIds** | **string**| Customer IDs associated with the transaction | [optional] |
| **transactionType** | **string**| Type of the transaction | [optional] |
| **authCode** | **string**| Authorization code of the transaction | [optional] |
| **cardHolderName** | **string**| Name of the cardholder | [optional] |
| **shopperName** | **string**| ShopperName of the cardholder | [optional] |
| **amount** | **float**| Transaction amount | [optional] |
| **fromAmount** | **float**| Minimum transaction amount | [optional] |
| **toAmount** | **float**| Maximum transaction amount | [optional] |
| **channelTypes** | **string**| Channel types used for the transaction | [optional] |
| **maskAccount** | **string**| Masked account number | [optional] |
| **customerName** | **string**| Name of the customer | [optional] |
| **recurringId** | **string**| Recurring payment ID | [optional] |
| **referenceNo** | **string**| Reference number | [optional] |
| **exportToCsv** | **bool**| Export To Csv | [optional] |
| **exportToPDF** | **bool**| Export To PDF | [optional] |
| **transactionOrigins** | **string**| Type of origin used in the transaction | [optional] |
| **transactionSourceType** | **string**| Transaction source type of the transaction | [optional] |
| **sourceId** | **float**| Set SourceId | [optional] |
| **traceNumbers** | **string**| TraceNumbers associated with the transaction | [optional] |
| **binNumber** | **string**| BinNumber | [optional] |
| **processMethod** | **string**| Process Method used for the transaction | [optional] |
| **searchText** | **string**| SearchText of the transaction | [optional] |
| **merchantReference** | **string**| Merchant Reference of the transaction | [optional] |
| **additionalFields** | **string**| Additional Fields | [optional] |
| **additionalFieldValue** | **string**| AdditionalFieldValue | [optional] |
| **paymentMethod** | **string**| Payment Method | [optional] |
| **accountAlias** | **string**| Set AccountAlias | [optional] |
| **isPaid** | **bool**| Set IsPaid | [optional] |
| **paymentTypes** | **string**| Type of payment used in the transaction | [optional] |
| **merchantId** | **string**| Search with Merchant Id | [optional] |
| **paymentCategories** | **string**| Set PaymentCategories | [optional] |
| **suppressTechnologyFee** | **bool**| SuppressTechnologyFee | [optional] |
| **batchId** | **string**| BatchId | [optional] |
| **sortField** | **string**| SortField | [optional] |
| **startRow** | **int**| Set StartRow | [optional] |
| **pageSize** | **float**| Set PageSize | [optional] |
| **asc** | **bool**| Set Asc | [optional] |

### Return type

[**\OpenAPI\Client\Model\MerchantTransactionEntityResponse**](../Model/MerchantTransactionEntityResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securePaymentsdetailsPost()`

```php
securePaymentsdetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentDetailsRequest): \OpenAPI\Client\Model\TransactionPaymentResponse
```

This API is used for getting details of Payments

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


$apiInstance = new OpenAPI\Client\Api\SecurePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$securePaymentDetailsRequest = new \OpenAPI\Client\Model\SecurePaymentDetailsRequest(); // \OpenAPI\Client\Model\SecurePaymentDetailsRequest | Payment Details Request

try {
    $result = $apiInstance->securePaymentsdetailsPost($xApiKey, $xAppKey, $xVersion, $origin, $securePaymentDetailsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurePaymentsApi->securePaymentsdetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xApiKey** | **string**| an authorization header | |
| **xAppKey** | **string**| an authorization header | |
| **xVersion** | **float**| x-version | |
| **origin** | **string**| origin | |
| **securePaymentDetailsRequest** | [**\OpenAPI\Client\Model\SecurePaymentDetailsRequest**](../Model/SecurePaymentDetailsRequest.md)| Payment Details Request | |

### Return type

[**\OpenAPI\Client\Model\TransactionPaymentResponse**](../Model/TransactionPaymentResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-app-key](../../README.md#x-app-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
