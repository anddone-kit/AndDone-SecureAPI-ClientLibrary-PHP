# # TransactionPaymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionId** | **string** |  | [optional]
**transactionCode** | **string** |  | [optional]
**billingContact** | [**\OpenAPI\Client\Model\TransactionPaymentResponseBillingContact**](TransactionPaymentResponseBillingContact.md) |  | [optional]
**transactionDate** | **string** |  | [optional]
**merchantId** | **string** |  | [optional]
**ipAddress** | **string** |  | [optional]
**channelType** | **string** |  | [optional]
**processMethod** | **string** |  | [optional]
**processorName** | **string** |  | [optional]
**transactionOrigin** | **string** |  | [optional]
**refundOrigin** | **int** |  | [optional]
**achTenderInfo** | [**\OpenAPI\Client\Model\TransactionPaymentResponseAchTenderInfo**](TransactionPaymentResponseAchTenderInfo.md) |  | [optional]
**ccTenderInfo** | [**\OpenAPI\Client\Model\TransactionPaymentResponseCcTenderInfo**](TransactionPaymentResponseCcTenderInfo.md) |  | [optional]
**debitCardTenderInfo** | [**\OpenAPI\Client\Model\TransactionPaymentResponseCcTenderInfo**](TransactionPaymentResponseCcTenderInfo.md) |  | [optional]
**referenceCustomerId** | **string** |  | [optional]
**invoiceNo** | **string** |  | [optional]
**referenceNo** | **string** |  | [optional]
**remarks** | **string** |  | [optional]
**terminalId** | **string** |  | [optional]
**transactionStatus** | **string** |  | [optional]
**transactionResult** | [**\OpenAPI\Client\Model\TransactionPaymentResponseTransactionResult**](TransactionPaymentResponseTransactionResult.md) |  | [optional]
**invoiceId** | **string** |  | [optional]
**paymentLinkId** | **string** |  | [optional]
**additionalFields** | **string** |  | [optional]
**settlementDate** | **string** |  | [optional]
**issuer** | **string** |  | [optional]
**paymentType** | **string** |  | [optional]
**paymentCategory** | **string** |  | [optional]
**transactionEntitySplitResponses** | [**\OpenAPI\Client\Model\TransactionPaymentResponseTransactionEntitySplitResponsesInner[]**](TransactionPaymentResponseTransactionEntitySplitResponsesInner.md) |  | [optional]
**paymentDescription** | **string** |  | [optional]
**refundTransactions** | [**\OpenAPI\Client\Model\TransactionPaymentResponseRefundTransactions**](TransactionPaymentResponseRefundTransactions.md) |  | [optional]
**chargebackTargetAccount** | **string** |  | [optional]
**userId** | **string** |  | [optional]
**userName** | **string** |  | [optional]
**chargeBackAmount** | **float** |  | [optional]
**suppressTechnologyFee** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
