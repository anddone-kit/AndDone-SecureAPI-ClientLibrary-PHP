# # SecureUpdatePaymentLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** |  | [optional]
**title** | **string** |  | [optional]
**paymentDescription** | **string** |  | [optional]
**customers** | [**\OpenAPI\Client\Model\PaymentLinkResponseCustomersInner[]**](PaymentLinkResponseCustomersInner.md) |  | [optional]
**invoiceNumber** | **string** |  | [optional]
**expireBy** | **float** |  | [optional]
**expireOn** | **string** |  | [optional]
**lineItems** | [**\OpenAPI\Client\Model\PaymentLinkResponseLineItemsInner[]**](PaymentLinkResponseLineItemsInner.md) |  | [optional]
**shortDescription** | **string** |  | [optional]
**responseType** | **string** |  | [optional]
**callbackParameters** | [**\OpenAPI\Client\Model\PaymentLinkResponseCallbackParameters**](PaymentLinkResponseCallbackParameters.md) |  | [optional]
**paymentLinkType** | **string** |  | [optional]
**saveForFuture** | **bool** |  | [optional]
**splits** | [**\OpenAPI\Client\Model\PaymentIntentRequestSplitsInner[]**](PaymentIntentRequestSplitsInner.md) |  | [optional]
**quoteKey** | **string** |  | [optional]
**accountNumber** | **string** |  | [optional]
**referenceType** | **string** |  | [optional]
**referenceNumber** | **string** |  | [optional]
**referenceKey** | **string** |  | [optional]
**referenceDataList** | [**\OpenAPI\Client\Model\PaymentLinkResponseReferenceDataListInner[]**](PaymentLinkResponseReferenceDataListInner.md) |  | [optional]
**platformSettlementStatus** | **string** |  | [optional]
**isPayInFull** | **bool** |  | [optional]
**isPremiumFinancier** | **bool** |  | [optional]
**pfr** | [**\OpenAPI\Client\Model\PaymentIntentRequestPfr**](PaymentIntentRequestPfr.md) |  | [optional]
**pfType** | **string** |  | [optional]
**amount** | **float** |  | [optional]
**enablePremiumFinance** | **bool** |  | [optional]
**expireIn** | **int** |  | [optional]
**expireInUnit** | **string** |  | [optional]
**settings** | [**\OpenAPI\Client\Model\SecureUpdatePaymentLinkRequestSettings**](SecureUpdatePaymentLinkRequestSettings.md) |  | [optional]
**suppressTechnologyFee** | **bool** |  | [optional]
**overrideTechnologyFee** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
