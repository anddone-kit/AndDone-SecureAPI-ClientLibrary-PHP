# # PaymentIntentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  |
**amount** | **float** |  |
**invoiceNumber** | **string** |  | [optional]
**expiresIn** | **string** |  | [optional]
**shortDescription** | **string** |  | [optional]
**paymentDescription** | **string** |  | [optional]
**merchantToken** | **string** |  | [optional]
**intent** | [**\OpenAPI\Client\Model\PaymentIntentRequestIntent**](PaymentIntentRequestIntent.md) |  |
**saveForFuture** | **bool** |  | [optional]
**enablePremiumFinance** | **bool** |  | [optional]
**splits** | [**\OpenAPI\Client\Model\PaymentIntentRequestSplitsInner[]**](PaymentIntentRequestSplitsInner.md) |  | [optional]
**quoteKey** | **string** |  | [optional]
**accountNumber** | **string** |  | [optional]
**suppressTechnologyFee** | **bool** |  | [optional]
**overrideTechnologyFee** | **float** |  | [optional]
**isPremiumFinancier** | **bool** |  | [optional]
**pfr** | [**\OpenAPI\Client\Model\PaymentIntentRequestPfr**](PaymentIntentRequestPfr.md) |  | [optional]
**saveCustomer** | **bool** |  | [optional]
**customers** | [**\OpenAPI\Client\Model\PaymentIntentRequestCustomersInner[]**](PaymentIntentRequestCustomersInner.md) |  | [optional]
**additionalDetailsPreference** | **string** |  |
**selectedCustomerFields** | **string** |  | [optional]
**referenceType** | **string** |  | [optional]
**referenceNumber** | **string** |  | [optional]
**referenceKey** | **string** |  | [optional]
**referenceDataList** | [**\OpenAPI\Client\Model\PaymentIntentRequestReferenceDataListInner[]**](PaymentIntentRequestReferenceDataListInner.md) |  | [optional]
**displayMode** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
