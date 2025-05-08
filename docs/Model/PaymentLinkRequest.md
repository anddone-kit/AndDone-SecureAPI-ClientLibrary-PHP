# # PaymentLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** |  |
**title** | **string** |  |
**amount** | **float** |  |
**paymentDescription** | **string** |  | [optional]
**customers** | [**\OpenAPI\Client\Model\PaymentLinkResponseCustomersInner[]**](PaymentLinkResponseCustomersInner.md) |  | [optional]
**invoiceNumber** | **string** |  | [optional]
**expireBy** | **float** |  | [optional]
**expireIn** | **int** |  |
**expireInUnit** | **string** |  |
**expireOn** | **string** |  | [optional]
**lineItems** | [**\OpenAPI\Client\Model\PaymentLinkResponseLineItemsInner[]**](PaymentLinkResponseLineItemsInner.md) |  | [optional]
**shortDescription** | **string** |  | [optional]
**responseType** | **string** |  | [optional]
**callbackParameters** | [**\OpenAPI\Client\Model\PaymentLinkResponseCallbackParameters**](PaymentLinkResponseCallbackParameters.md) |  | [optional]
**settings** | [**\OpenAPI\Client\Model\PaymentLinkRequestSettings**](PaymentLinkRequestSettings.md) |  |
**paymentLinkType** | **string** |  | [optional]
**saveForFuture** | **bool** |  | [optional]
**splits** | [**\OpenAPI\Client\Model\PaymentIntentRequestSplitsInner[]**](PaymentIntentRequestSplitsInner.md) |  | [optional]
**quoteKey** | **string** |  | [optional]
**accountNumber** | **string** |  | [optional]
**referenceType** | **string** |  | [optional]
**referenceNumber** | **string** |  | [optional]
**referenceKey** | **string** |  | [optional]
**referenceDataList** | [**\OpenAPI\Client\Model\PaymentLinkResponseReferenceDataListInner[]**](PaymentLinkResponseReferenceDataListInner.md) |  |
**enablePremiumFinance** | **bool** |  | [optional]
**suppressTechnologyFee** | **bool** |  | [optional]
**overrideTechnologyFee** | **float** |  | [optional]
**platformSettlementStatus** | **string** |  | [optional]
**isPayInFull** | **bool** |  | [optional]
**isPremiumFinancier** | **bool** |  | [optional]
**pfr** | [**\OpenAPI\Client\Model\PaymentIntentRequestPfr**](PaymentIntentRequestPfr.md) |  | [optional]
**pfType** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
