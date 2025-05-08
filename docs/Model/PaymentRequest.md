# # PaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** |  | [optional]
**type** | **string** |  |
**transactionCode** | **string** |  |
**billingContact** | [**\OpenAPI\Client\Model\TransactionPaymentResponseBillingContact**](TransactionPaymentResponseBillingContact.md) |  | [optional]
**phoneCountryCode** | **string** |  | [optional]
**channelType** | **string** |  |
**processMethod** | **string** |  | [optional]
**tenderInfo** | [**\OpenAPI\Client\Model\PaymentRequestTenderInfo**](PaymentRequestTenderInfo.md) |  |
**invoiceNo** | **string** |  | [optional]
**referenceNo** | **string** |  | [optional]
**paymentReference** | **string** |  | [optional]
**remarks** | **string** |  | [optional]
**saveCustomer** | **bool** |  | [optional]
**captchaToken** | **string** |  | [optional]
**actionName** | **string** |  | [optional]
**additionalFields** | **array<string,string>** |  | [optional]
**issuer** | **string** |  | [optional]
**splits** | [**\OpenAPI\Client\Model\PaymentIntentRequestSplitsInner[]**](PaymentIntentRequestSplitsInner.md) |  | [optional]
**operationType** | **string** |  | [optional]
**suppressTechnologyFee** | **bool** |  | [optional]
**overrideTechnologyFee** | **float** |  | [optional]
**isPremiumFinancier** | **bool** |  | [optional]
**pfr** | [**\OpenAPI\Client\Model\PaymentIntentRequestPfr**](PaymentIntentRequestPfr.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
