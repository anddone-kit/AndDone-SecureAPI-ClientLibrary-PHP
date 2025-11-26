# OpenAPIClient-php

Secure API


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\SecureAutopayEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xApiKey = 'xApiKey_example'; // string | an authorization header
$xAppKey = 'xAppKey_example'; // string | an authorization header
$xVersion = 3.4; // float | x-version
$origin = 'origin_example'; // string | origin
$autoPayEnrollmentRequest = new \OpenAPI\Client\Model\AutoPayEnrollmentRequest(); // \OpenAPI\Client\Model\AutoPayEnrollmentRequest | Autopay Enrollment Detail

try {
    $result = $apiInstance->secureAutopayenrollmentPost($xApiKey, $xAppKey, $xVersion, $origin, $autoPayEnrollmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureAutopayEnrollmentApi->secureAutopayenrollmentPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.uat.anddone.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SecureAutopayEnrollmentApi* | [**secureAutopayenrollmentPost**](docs/Api/SecureAutopayEnrollmentApi.md#secureautopayenrollmentpost) | **POST** /secure/autopayenrollment | This API is used for Autopay Enrollment.
*SecureEmbeddedPremiumFinanceApi* | [**secureEpfMerchantsQuotesPolicyPut**](docs/Api/SecureEmbeddedPremiumFinanceApi.md#secureepfmerchantsquotespolicyput) | **PUT** /secure/epf/merchants/quotes/policy | This API is will update the policy number
*SecureEmbeddedPremiumFinanceApi* | [**secureEpfQuotesBookingPut**](docs/Api/SecureEmbeddedPremiumFinanceApi.md#secureepfquotesbookingput) | **PUT** /secure/epf/quotes/booking | This API will update PFA to book a quote.
*SecureEmbeddedPremiumFinanceApi* | [**secureEpfQuotesCaptureesignPut**](docs/Api/SecureEmbeddedPremiumFinanceApi.md#secureepfquotescaptureesignput) | **PUT** /secure/epf/quotes/captureesign | This API will eSign the pfa with insured name.
*SecureEmbeddedPremiumFinanceApi* | [**secureEpfQuotesGeneratePost**](docs/Api/SecureEmbeddedPremiumFinanceApi.md#secureepfquotesgeneratepost) | **POST** /secure/epf/quotes/generate | This API is used to Generate Quotes
*SecureEmbeddedPremiumFinanceApi* | [**secureEpfQuotesIntentPost**](docs/Api/SecureEmbeddedPremiumFinanceApi.md#secureepfquotesintentpost) | **POST** /secure/epf/quotes/intent | This API will return quotes created againsts a payment intent.
*SecureEmbeddedPremiumFinanceApi* | [**secureEpfQuotesPost**](docs/Api/SecureEmbeddedPremiumFinanceApi.md#secureepfquotespost) | **POST** /secure/epf/quotes | This API will return quote by QuoteKey.
*SecureEmbeddedPremiumFinanceApi* | [**secureEpfRetrievepfaPost**](docs/Api/SecureEmbeddedPremiumFinanceApi.md#secureepfretrievepfapost) | **POST** /secure/epf/retrievepfa | This API will return PFA for given quoteKey.
*SecureEmbeddedPremiumFinanceEndorsementsApi* | [**secureEpfEndorsementsPost**](docs/Api/SecureEmbeddedPremiumFinanceEndorsementsApi.md#secureepfendorsementspost) | **POST** /secure/epf/endorsements | This API will do a check of eligibility of account
*SecureEmbeddedPremiumFinanceEndorsementsApi* | [**secureEpfQuoteEndorsementBookingPut**](docs/Api/SecureEmbeddedPremiumFinanceEndorsementsApi.md#secureepfquoteendorsementbookingput) | **PUT** /secure/epf/quote/endorsement/booking | This API will update PFA to book a endorsement quote.
*SecureEmbeddedPremiumFinanceEndorsementsApi* | [**secureEpfQuoteEndorsementPost**](docs/Api/SecureEmbeddedPremiumFinanceEndorsementsApi.md#secureepfquoteendorsementpost) | **POST** /secure/epf/quote/endorsement | This API will do return a quote for an existing policy or new policy for an existing account
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundPaymentsTimelinesPost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentstimelinespost) | **POST** /vendorapi/secure/outboundPayments/timelines | This API gets outbound payment timelines
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundpaymentsCancelPost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentscancelpost) | **POST** /vendorapi/secure/outboundpayments/cancel | This API cancel outbound payment request
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundpaymentsDetailPost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentsdetailpost) | **POST** /vendorapi/secure/outboundpayments/detail | This API fetch outbound payment by paymentId
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundpaymentsImagePost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentsimagepost) | **POST** /vendorapi/secure/outboundpayments/image | This API gets outbound payment JPG image in Base64 string format
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundpaymentsPost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentspost) | **POST** /vendorapi/secure/outboundpayments | This API creates outbound payment request
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundpaymentsSearchPost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentssearchpost) | **POST** /vendorapi/secure/outboundpayments/search | This API gets all outbound payment
*SecurePaymentBatchingApi* | [**secureBatchesDetailsPost**](docs/Api/SecurePaymentBatchingApi.md#securebatchesdetailspost) | **POST** /secure/batches/details | This API is used for getting Secure Payment Batch Details
*SecurePaymentBatchingApi* | [**secureBatchesExecutePost**](docs/Api/SecurePaymentBatchingApi.md#securebatchesexecutepost) | **POST** /secure/batches/execute | This API execute on-demand batch transaction.
*SecurePaymentBatchingApi* | [**secureBatchesPost**](docs/Api/SecurePaymentBatchingApi.md#securebatchespost) | **POST** /secure/batches | This API is used for getting Secure Payment Batches
*SecurePaymentBatchingApi* | [**secureBatchesTimelinesPost**](docs/Api/SecurePaymentBatchingApi.md#securebatchestimelinespost) | **POST** /secure/batches/timelines | This API will returns batch timeline.
*SecurePaymentBatchingApi* | [**secureBatchesTransactionsCancelPost**](docs/Api/SecurePaymentBatchingApi.md#securebatchestransactionscancelpost) | **POST** /secure/batches/transactions/cancel | This API cancels transactions from an active batch.
*SecurePaymentIntentApi* | [**securePaymentintentsExpirationsPost**](docs/Api/SecurePaymentIntentApi.md#securepaymentintentsexpirationspost) | **POST** /secure/paymentintents/expirations | This API expires the payment Intent or link.
*SecurePaymentIntentApi* | [**securePaymentintentsPost**](docs/Api/SecurePaymentIntentApi.md#securepaymentintentspost) | **POST** /secure/paymentintents | This API is use to create Secure payment Intent.
*SecurePaymentLinksApi* | [**securePaymentlinksDetailsPost**](docs/Api/SecurePaymentLinksApi.md#securepaymentlinksdetailspost) | **POST** /secure/paymentlinks/details | This API is used for getting Payment Links by PaymentLink ID
*SecurePaymentLinksApi* | [**securePaymentlinksExpirationsPost**](docs/Api/SecurePaymentLinksApi.md#securepaymentlinksexpirationspost) | **POST** /secure/paymentlinks/expirations | This API is used for to set expired payment link
*SecurePaymentLinksApi* | [**securePaymentlinksIdPut**](docs/Api/SecurePaymentLinksApi.md#securepaymentlinksidput) | **PUT** /secure/paymentlinks/{id} | This API is used to update Payment Links
*SecurePaymentLinksApi* | [**securePaymentlinksPost**](docs/Api/SecurePaymentLinksApi.md#securepaymentlinkspost) | **POST** /secure/paymentlinks | This API is used to create Payment Links
*SecurePaymentsApi* | [**securePaymentsExportPost**](docs/Api/SecurePaymentsApi.md#securepaymentsexportpost) | **POST** /secure/payments/export | This API gets Secure payment by search criteria for the merchant.
*SecurePaymentsApi* | [**securePaymentsPost**](docs/Api/SecurePaymentsApi.md#securepaymentspost) | **POST** /secure/payments | This API posts new Secure payment request for the merchant.
*SecurePaymentsApi* | [**securePaymentsSearchPost**](docs/Api/SecurePaymentsApi.md#securepaymentssearchpost) | **POST** /secure/payments/search | This API gets Secure payment by search criteria for the merchant.
*SecurePaymentsApi* | [**securePaymentsdetailsPost**](docs/Api/SecurePaymentsApi.md#securepaymentsdetailspost) | **POST** /secure/paymentsdetails | This API is used for getting details of Payments
*SecurePremiumFinanceLiteApi* | [**secureEpfliteQuotesGeneratePost**](docs/Api/SecurePremiumFinanceLiteApi.md#secureepflitequotesgeneratepost) | **POST** /secure/epflite/quotes/generate | This API is used to generate the quote from the provider.
*SecurePremiumFinanceLiteApi* | [**secureEpfliteQuotesLinkPost**](docs/Api/SecurePremiumFinanceLiteApi.md#secureepflitequoteslinkpost) | **POST** /secure/epflite/quotes/link | This API will return quotes created againsts a payment link.
*SecurePremiumFinanceLiteApi* | [**secureEpfliteQuotesPaymentlinksPost**](docs/Api/SecurePremiumFinanceLiteApi.md#secureepflitequotespaymentlinkspost) | **POST** /secure/epflite/quotes/paymentlinks | This API is used to create Payment Links
*SecureRefundsApi* | [**secureRefundsEligibilityPost**](docs/Api/SecureRefundsApi.md#securerefundseligibilitypost) | **POST** /secure/refunds/eligibility | This API return refund eligibility of a transaction.
*SecureRefundsApi* | [**secureRefundsPost**](docs/Api/SecureRefundsApi.md#securerefundspost) | **POST** /secure/refunds | This API will refund a transaction which has been settled by the processor.
*SecureReportsApi* | [**secureReportsDownloadsPost**](docs/Api/SecureReportsApi.md#securereportsdownloadspost) | **POST** /secure/reports/downloads | This API will add system report.
*SecureTokenLinksApi* | [**secureTokenlinksDetailsPost**](docs/Api/SecureTokenLinksApi.md#securetokenlinksdetailspost) | **POST** /secure/tokenlinks/details | This API is used for getting Token Links by TokenLink ID
*SecureTokenLinksApi* | [**secureTokenlinksExpirationsPost**](docs/Api/SecureTokenLinksApi.md#securetokenlinksexpirationspost) | **POST** /secure/tokenlinks/expirations | This API expires the token link.
*SecureTokenLinksApi* | [**secureTokenlinksListPost**](docs/Api/SecureTokenLinksApi.md#securetokenlinkslistpost) | **POST** /secure/tokenlinks/list | This API is used for getting all Token Links for Merchant
*SecureTokenLinksApi* | [**secureTokenlinksPost**](docs/Api/SecureTokenLinksApi.md#securetokenlinkspost) | **POST** /secure/tokenlinks | This API is use to create Secure Token Links
*SecureTokenLinksApi* | [**secureTokenlinksPut**](docs/Api/SecureTokenLinksApi.md#securetokenlinksput) | **PUT** /secure/tokenlinks | This API will update the expireIn and paymentType of Token Link.
*SecureTokenManagementApi* | [**secureTokensActivationsDelete**](docs/Api/SecureTokenManagementApi.md#securetokensactivationsdelete) | **DELETE** /secure/tokens/activations | This API is used for deactivating merchant token securely
*SecureTokenManagementApi* | [**secureTokensDetailsPost**](docs/Api/SecureTokenManagementApi.md#securetokensdetailspost) | **POST** /secure/tokens/details | This API is used for getting details of Merchant Token by Token link.
*SecureVendorManagementApi* | [**vendorapiSecureMerchantsVendorsDeletePost**](docs/Api/SecureVendorManagementApi.md#vendorapisecuremerchantsvendorsdeletepost) | **POST** /vendorapi/secure/merchants/vendors/delete | This API deletes vendor into system
*SecureVendorManagementApi* | [**vendorapiSecureMerchantsVendorsDetailsPost**](docs/Api/SecureVendorManagementApi.md#vendorapisecuremerchantsvendorsdetailspost) | **POST** /vendorapi/secure/merchants/vendors/details | This API gets details of particular vendor
*SecureVendorManagementApi* | [**vendorapiSecureMerchantsVendorsEditPost**](docs/Api/SecureVendorManagementApi.md#vendorapisecuremerchantsvendorseditpost) | **POST** /vendorapi/secure/merchants/vendors/edit | This API Updates the existing vendor
*SecureVendorManagementApi* | [**vendorapiSecureMerchantsVendorsPost**](docs/Api/SecureVendorManagementApi.md#vendorapisecuremerchantsvendorspost) | **POST** /vendorapi/secure/merchants/vendors | This API creates vendor into system
*SecureVendorManagementApi* | [**vendorapiSecureMerchantsVendorsSearchPost**](docs/Api/SecureVendorManagementApi.md#vendorapisecuremerchantsvendorssearchpost) | **POST** /vendorapi/secure/merchants/vendors/search | This API returns list of all the Vendors of Merchant
*SecureVendorManagementApi* | [**vendorapiSecureMerchantsVendorsSuspendPost**](docs/Api/SecureVendorManagementApi.md#vendorapisecuremerchantsvendorssuspendpost) | **POST** /vendorapi/secure/merchants/vendors/suspend | This API suspends vendor into system
*SecureVendorManagementApi* | [**vendorapiSecureMerchantsVendorsTimelinePost**](docs/Api/SecureVendorManagementApi.md#vendorapisecuremerchantsvendorstimelinepost) | **POST** /vendorapi/secure/merchants/vendors/timeline | This API gets timeline of particular vendor
*SecureVendorManagementApi* | [**vendorapiSecureMerchantsVendorsUnsuspendPost**](docs/Api/SecureVendorManagementApi.md#vendorapisecuremerchantsvendorsunsuspendpost) | **POST** /vendorapi/secure/merchants/vendors/unsuspend | This API unsuspends vendor into system
*SecureVoidsApi* | [**secureCancellationsPost**](docs/Api/SecureVoidsApi.md#securecancellationspost) | **POST** /secure/cancellations | This API cancel a transaction.

## Models

- [AutoPayEnrollmentRequest](docs/Model/AutoPayEnrollmentRequest.md)
- [AutoPayEnrollmentResponse](docs/Model/AutoPayEnrollmentResponse.md)
- [BankDetailDto](docs/Model/BankDetailDto.md)
- [CancelPaymentRequestDTO](docs/Model/CancelPaymentRequestDTO.md)
- [DataDto](docs/Model/DataDto.md)
- [GetQuoteKeyRequest](docs/Model/GetQuoteKeyRequest.md)
- [GetQuoteRequest](docs/Model/GetQuoteRequest.md)
- [HeadingDto](docs/Model/HeadingDto.md)
- [MerchantTransactionEntityResponse](docs/Model/MerchantTransactionEntityResponse.md)
- [MerchantTransactionEntityResponseDataInner](docs/Model/MerchantTransactionEntityResponseDataInner.md)
- [OutboundPaymentImageResponseDTO](docs/Model/OutboundPaymentImageResponseDTO.md)
- [OutboundPaymentTimelineResponseDTOInner](docs/Model/OutboundPaymentTimelineResponseDTOInner.md)
- [PFCheckEndorsementsRequest](docs/Model/PFCheckEndorsementsRequest.md)
- [PFCheckEndorsementsResponse](docs/Model/PFCheckEndorsementsResponse.md)
- [PFCheckEndorsementsResponseItem](docs/Model/PFCheckEndorsementsResponseItem.md)
- [PFCheckEndorsementsResponseItemPoliciesInner](docs/Model/PFCheckEndorsementsResponseItemPoliciesInner.md)
- [PFEndorsementRequest](docs/Model/PFEndorsementRequest.md)
- [PFEndorsementRequestQuote](docs/Model/PFEndorsementRequestQuote.md)
- [PFEndorsementRequestQuoteCommunication](docs/Model/PFEndorsementRequestQuoteCommunication.md)
- [PFEndorsementRequestQuoteDetails](docs/Model/PFEndorsementRequestQuoteDetails.md)
- [PFEndorsementRequestQuoteDetailsRecurringACH](docs/Model/PFEndorsementRequestQuoteDetailsRecurringACH.md)
- [PFEndorsementRequestQuoteInsured](docs/Model/PFEndorsementRequestQuoteInsured.md)
- [PFEndorsementRequestQuoteInsuredAddress](docs/Model/PFEndorsementRequestQuoteInsuredAddress.md)
- [PFEndorsementRequestQuotePoliciesInner](docs/Model/PFEndorsementRequestQuotePoliciesInner.md)
- [PFEndorsementRequestQuotePoliciesInnerCompany](docs/Model/PFEndorsementRequestQuotePoliciesInnerCompany.md)
- [PFEndorsementRequestQuotePoliciesInnerGa](docs/Model/PFEndorsementRequestQuotePoliciesInnerGa.md)
- [PFEndorsementRequestQuotePoliciesInnerPolicyFeeInner](docs/Model/PFEndorsementRequestQuotePoliciesInnerPolicyFeeInner.md)
- [PFEndorsementRequestQuotePoliciesInnerTotalPayFundingInner](docs/Model/PFEndorsementRequestQuotePoliciesInnerTotalPayFundingInner.md)
- [PFEndorsementResponse](docs/Model/PFEndorsementResponse.md)
- [PFEndorsementResponseItem](docs/Model/PFEndorsementResponseItem.md)
- [PFEndorsementResponseItemPaymentIntent](docs/Model/PFEndorsementResponseItemPaymentIntent.md)
- [PFEndorsementResponseItemPaymentIntentIntent](docs/Model/PFEndorsementResponseItemPaymentIntentIntent.md)
- [PFEndorsementResponseItemQuote](docs/Model/PFEndorsementResponseItemQuote.md)
- [PFEndorsementResponseItemQuoteESignResult](docs/Model/PFEndorsementResponseItemQuoteESignResult.md)
- [PFGenerateQuoteResponse](docs/Model/PFGenerateQuoteResponse.md)
- [PFGenerateQuoteResponseItem](docs/Model/PFGenerateQuoteResponseItem.md)
- [PFGenerateQuoteResponseItemESignResult](docs/Model/PFGenerateQuoteResponseItemESignResult.md)
- [PFLiteGenerateQuoteResponse](docs/Model/PFLiteGenerateQuoteResponse.md)
- [PFLiteGenerateQuoteResponseItem](docs/Model/PFLiteGenerateQuoteResponseItem.md)
- [PFLiteGenerateQuoteResponseItemESignResult](docs/Model/PFLiteGenerateQuoteResponseItemESignResult.md)
- [PFLiteGetQuoteRequest](docs/Model/PFLiteGetQuoteRequest.md)
- [PFLitePaymentLinkRequest](docs/Model/PFLitePaymentLinkRequest.md)
- [PFLitePaymentLinkRequestCallbackParameters](docs/Model/PFLitePaymentLinkRequestCallbackParameters.md)
- [PFLitePaymentLinkRequestCustomersInner](docs/Model/PFLitePaymentLinkRequestCustomersInner.md)
- [PFLitePaymentLinkRequestCustomersInnerAddress](docs/Model/PFLitePaymentLinkRequestCustomersInnerAddress.md)
- [PFLitePaymentLinkRequestReferenceDataListInner](docs/Model/PFLitePaymentLinkRequestReferenceDataListInner.md)
- [PFLitePaymentLinkRequestSettings](docs/Model/PFLitePaymentLinkRequestSettings.md)
- [PFLiteQuoteByPaymentLinkResponse](docs/Model/PFLiteQuoteByPaymentLinkResponse.md)
- [PFLiteQuoteByPaymentLinkResponsePoliciesInner](docs/Model/PFLiteQuoteByPaymentLinkResponsePoliciesInner.md)
- [PFLiteQuoteByPaymentLinkResponsePoliciesInnerCarrier](docs/Model/PFLiteQuoteByPaymentLinkResponsePoliciesInnerCarrier.md)
- [PFLiteSecureQuoteRequest](docs/Model/PFLiteSecureQuoteRequest.md)
- [PFLiteSecureQuoteRequestAgent](docs/Model/PFLiteSecureQuoteRequestAgent.md)
- [PFLiteSecureQuoteRequestAgentAddress](docs/Model/PFLiteSecureQuoteRequestAgentAddress.md)
- [PFLiteSecureQuoteRequestInsured](docs/Model/PFLiteSecureQuoteRequestInsured.md)
- [PFLiteSecureQuoteRequestInsuredAddress](docs/Model/PFLiteSecureQuoteRequestInsuredAddress.md)
- [PFLiteSecureQuoteRequestMerchant](docs/Model/PFLiteSecureQuoteRequestMerchant.md)
- [PFLiteSecureQuoteRequestPoliciesInner](docs/Model/PFLiteSecureQuoteRequestPoliciesInner.md)
- [PFLiteSecureQuoteRequestPoliciesInnerCarrier](docs/Model/PFLiteSecureQuoteRequestPoliciesInnerCarrier.md)
- [PFLiteSecureQuoteRequestProgram](docs/Model/PFLiteSecureQuoteRequestProgram.md)
- [PFPolicyUpdateRequestDTO](docs/Model/PFPolicyUpdateRequestDTO.md)
- [PFPolicyUpdateResponse](docs/Model/PFPolicyUpdateResponse.md)
- [PFQuoteBookingRequest](docs/Model/PFQuoteBookingRequest.md)
- [PFQuoteEsignRequest](docs/Model/PFQuoteEsignRequest.md)
- [PFRetrievePFARequest](docs/Model/PFRetrievePFARequest.md)
- [PFRetrievePFARequestDTO](docs/Model/PFRetrievePFARequestDTO.md)
- [PFUpdatePFARequestDTO](docs/Model/PFUpdatePFARequestDTO.md)
- [PFUpdatePFAResponse](docs/Model/PFUpdatePFAResponse.md)
- [PagePaymentListResponseDTO](docs/Model/PagePaymentListResponseDTO.md)
- [PagePaymentListResponseDTODataInner](docs/Model/PagePaymentListResponseDTODataInner.md)
- [PageVendorResponseDTO](docs/Model/PageVendorResponseDTO.md)
- [PageVendorResponseDTODataInner](docs/Model/PageVendorResponseDTODataInner.md)
- [PaymentBatchCancellationRequest](docs/Model/PaymentBatchCancellationRequest.md)
- [PaymentBatchDetailsResponse](docs/Model/PaymentBatchDetailsResponse.md)
- [PaymentBatchDetailsResponseTransactionDetailsInner](docs/Model/PaymentBatchDetailsResponseTransactionDetailsInner.md)
- [PaymentBatchEventLogResponse](docs/Model/PaymentBatchEventLogResponse.md)
- [PaymentBatchResponse](docs/Model/PaymentBatchResponse.md)
- [PaymentBatchResponseDataInner](docs/Model/PaymentBatchResponseDataInner.md)
- [PaymentDetailResponseDTO](docs/Model/PaymentDetailResponseDTO.md)
- [PaymentIntentExpiresResponse](docs/Model/PaymentIntentExpiresResponse.md)
- [PaymentIntentRequest](docs/Model/PaymentIntentRequest.md)
- [PaymentIntentRequestCustomersInner](docs/Model/PaymentIntentRequestCustomersInner.md)
- [PaymentIntentRequestIntent](docs/Model/PaymentIntentRequestIntent.md)
- [PaymentIntentRequestPfr](docs/Model/PaymentIntentRequestPfr.md)
- [PaymentIntentRequestReferenceDataListInner](docs/Model/PaymentIntentRequestReferenceDataListInner.md)
- [PaymentIntentRequestSplitsInner](docs/Model/PaymentIntentRequestSplitsInner.md)
- [PaymentIntentResponse](docs/Model/PaymentIntentResponse.md)
- [PaymentIntentResponseCustomersInner](docs/Model/PaymentIntentResponseCustomersInner.md)
- [PaymentIntentResponseIntent](docs/Model/PaymentIntentResponseIntent.md)
- [PaymentLinkExpiresResponse](docs/Model/PaymentLinkExpiresResponse.md)
- [PaymentLinkRequest](docs/Model/PaymentLinkRequest.md)
- [PaymentLinkRequestReferenceDataListInner](docs/Model/PaymentLinkRequestReferenceDataListInner.md)
- [PaymentLinkRequestSettings](docs/Model/PaymentLinkRequestSettings.md)
- [PaymentLinkRequestSettingsIntent](docs/Model/PaymentLinkRequestSettingsIntent.md)
- [PaymentLinkResponse](docs/Model/PaymentLinkResponse.md)
- [PaymentLinkResponseCallbackParameters](docs/Model/PaymentLinkResponseCallbackParameters.md)
- [PaymentLinkResponseCustomersInner](docs/Model/PaymentLinkResponseCustomersInner.md)
- [PaymentLinkResponseCustomersInnerAccountsInner](docs/Model/PaymentLinkResponseCustomersInnerAccountsInner.md)
- [PaymentLinkResponseDisplaySettings](docs/Model/PaymentLinkResponseDisplaySettings.md)
- [PaymentLinkResponseDisplaySettingsIntent](docs/Model/PaymentLinkResponseDisplaySettingsIntent.md)
- [PaymentLinkResponseLineItemsInner](docs/Model/PaymentLinkResponseLineItemsInner.md)
- [PaymentLinkResponsePaymentsInner](docs/Model/PaymentLinkResponsePaymentsInner.md)
- [PaymentLinkResponseReferenceDataListInner](docs/Model/PaymentLinkResponseReferenceDataListInner.md)
- [PaymentListResponseDTO](docs/Model/PaymentListResponseDTO.md)
- [PaymentRequest](docs/Model/PaymentRequest.md)
- [PaymentRequestDetailDTO](docs/Model/PaymentRequestDetailDTO.md)
- [PaymentRequestDto](docs/Model/PaymentRequestDto.md)
- [PaymentRequestDtoData](docs/Model/PaymentRequestDtoData.md)
- [PaymentRequestDtoDataRemittanceData](docs/Model/PaymentRequestDtoDataRemittanceData.md)
- [PaymentRequestTenderInfo](docs/Model/PaymentRequestTenderInfo.md)
- [PaymentResponseDto](docs/Model/PaymentResponseDto.md)
- [PaymentTimeLineRequestDto](docs/Model/PaymentTimeLineRequestDto.md)
- [QuoteRequest](docs/Model/QuoteRequest.md)
- [QuoteRequestAgent](docs/Model/QuoteRequestAgent.md)
- [QuoteRequestDetails](docs/Model/QuoteRequestDetails.md)
- [QuoteRequestInsured](docs/Model/QuoteRequestInsured.md)
- [QuoteRequestInsuredAddress](docs/Model/QuoteRequestInsuredAddress.md)
- [QuoteRequestPoliciesInner](docs/Model/QuoteRequestPoliciesInner.md)
- [QuoteRequestPoliciesInnerCompany](docs/Model/QuoteRequestPoliciesInnerCompany.md)
- [QuoteRequestPoliciesInnerGa](docs/Model/QuoteRequestPoliciesInnerGa.md)
- [QuoteRequestPoliciesInnerGaAddress](docs/Model/QuoteRequestPoliciesInnerGaAddress.md)
- [QuoteResponse](docs/Model/QuoteResponse.md)
- [RefundEligibility](docs/Model/RefundEligibility.md)
- [RemittanceDataDto](docs/Model/RemittanceDataDto.md)
- [ReportDownloadRequest](docs/Model/ReportDownloadRequest.md)
- [RowDto](docs/Model/RowDto.md)
- [SecureBatchExecuteRequest](docs/Model/SecureBatchExecuteRequest.md)
- [SecureCancelledTransactionResponse](docs/Model/SecureCancelledTransactionResponse.md)
- [SecureMerchantTokenShortResponse](docs/Model/SecureMerchantTokenShortResponse.md)
- [SecurePFQuoteBookingRequest](docs/Model/SecurePFQuoteBookingRequest.md)
- [SecurePaymentBatchDetailsRequest](docs/Model/SecurePaymentBatchDetailsRequest.md)
- [SecurePaymentDetailsRequest](docs/Model/SecurePaymentDetailsRequest.md)
- [SecurePaymentLinkRequest](docs/Model/SecurePaymentLinkRequest.md)
- [SecureTokenLinkByIdResponse](docs/Model/SecureTokenLinkByIdResponse.md)
- [SecureTokenLinkByIdResponseAccountToken](docs/Model/SecureTokenLinkByIdResponseAccountToken.md)
- [SecureTokenLinkByIdResponseTimeLineInner](docs/Model/SecureTokenLinkByIdResponseTimeLineInner.md)
- [SecureTokenLinkExpiredResponse](docs/Model/SecureTokenLinkExpiredResponse.md)
- [SecureTokenLinkRequest](docs/Model/SecureTokenLinkRequest.md)
- [SecureTokenLinkResponse](docs/Model/SecureTokenLinkResponse.md)
- [SecureTokenLinkResponseCustomersInner](docs/Model/SecureTokenLinkResponseCustomersInner.md)
- [SecureTokenLinkResponseIntent](docs/Model/SecureTokenLinkResponseIntent.md)
- [SecureTokenLinkUpdateRequest](docs/Model/SecureTokenLinkUpdateRequest.md)
- [SecureTransactionCancelRequest](docs/Model/SecureTransactionCancelRequest.md)
- [SecureTransactionDetailDTO](docs/Model/SecureTransactionDetailDTO.md)
- [SecureTransactionDetailDTOTenderInfo](docs/Model/SecureTransactionDetailDTOTenderInfo.md)
- [SecureTransactionRefundRequest](docs/Model/SecureTransactionRefundRequest.md)
- [SecureUpdatePaymentLinkRequest](docs/Model/SecureUpdatePaymentLinkRequest.md)
- [SecureUpdatePaymentLinkRequestSettings](docs/Model/SecureUpdatePaymentLinkRequestSettings.md)
- [SecureUpdatePaymentLinkRequestSettingsIntent](docs/Model/SecureUpdatePaymentLinkRequestSettingsIntent.md)
- [SecureVendorRequestDTO](docs/Model/SecureVendorRequestDTO.md)
- [SecureVendorResponseDTO](docs/Model/SecureVendorResponseDTO.md)
- [SecureVendorResponseDTORemittanceAddress](docs/Model/SecureVendorResponseDTORemittanceAddress.md)
- [SecureVendorStatusRequestDTO](docs/Model/SecureVendorStatusRequestDTO.md)
- [SecureVendorTimelineRequestDTO](docs/Model/SecureVendorTimelineRequestDTO.md)
- [SecureVendorUpdateRequestDTO](docs/Model/SecureVendorUpdateRequestDTO.md)
- [SecureVendorUpdateRequestDTORemittanceAddress](docs/Model/SecureVendorUpdateRequestDTORemittanceAddress.md)
- [TokenLinkResponse](docs/Model/TokenLinkResponse.md)
- [TokenLinkResponseDataInner](docs/Model/TokenLinkResponseDataInner.md)
- [TokenLinkSecureRequest](docs/Model/TokenLinkSecureRequest.md)
- [TokenLinkSecureRequestCustomersInner](docs/Model/TokenLinkSecureRequestCustomersInner.md)
- [TokenRequest](docs/Model/TokenRequest.md)
- [TransactionDetailResponse](docs/Model/TransactionDetailResponse.md)
- [TransactionDetailResponseSplitsInner](docs/Model/TransactionDetailResponseSplitsInner.md)
- [TransactionDetailResponseTenderInfo](docs/Model/TransactionDetailResponseTenderInfo.md)
- [TransactionPaymentResponse](docs/Model/TransactionPaymentResponse.md)
- [TransactionPaymentResponseAchTenderInfo](docs/Model/TransactionPaymentResponseAchTenderInfo.md)
- [TransactionPaymentResponseBillingContact](docs/Model/TransactionPaymentResponseBillingContact.md)
- [TransactionPaymentResponseBillingContactAddress](docs/Model/TransactionPaymentResponseBillingContactAddress.md)
- [TransactionPaymentResponseBillingContactName](docs/Model/TransactionPaymentResponseBillingContactName.md)
- [TransactionPaymentResponseCcTenderInfo](docs/Model/TransactionPaymentResponseCcTenderInfo.md)
- [TransactionPaymentResponseRefundTransactions](docs/Model/TransactionPaymentResponseRefundTransactions.md)
- [TransactionPaymentResponseRefundTransactionsDataInner](docs/Model/TransactionPaymentResponseRefundTransactionsDataInner.md)
- [TransactionPaymentResponseTransactionEntitySplitResponsesInner](docs/Model/TransactionPaymentResponseTransactionEntitySplitResponsesInner.md)
- [TransactionPaymentResponseTransactionResult](docs/Model/TransactionPaymentResponseTransactionResult.md)
- [TransactionRefundEligibilityRequest](docs/Model/TransactionRefundEligibilityRequest.md)
- [UpdateIntentRequest](docs/Model/UpdateIntentRequest.md)
- [VendorRequestDTO](docs/Model/VendorRequestDTO.md)
- [VendorRequestDTOPhysicalAddress](docs/Model/VendorRequestDTOPhysicalAddress.md)
- [VendorRequestDTORemittanceAddress](docs/Model/VendorRequestDTORemittanceAddress.md)
- [VendorResponseDTO](docs/Model/VendorResponseDTO.md)
- [VendorResponseDTORemittanceAddress](docs/Model/VendorResponseDTORemittanceAddress.md)
- [VendorResponseDTOTemplate](docs/Model/VendorResponseDTOTemplate.md)
- [VendorResponseDTOVerificationResultsInner](docs/Model/VendorResponseDTOVerificationResultsInner.md)
- [VendorTimelineResponseListInner](docs/Model/VendorTimelineResponseListInner.md)

## Authorization

Authentication schemes defined for the API:
### api-key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


### app-key

- **Type**: API key
- **API key parameter name**: x-app-key
- **Location**: HTTP header


### x-version

- **Type**: API key
- **API key parameter name**: x-version
- **Location**: HTTP header


### origin

- **Type**: API key
- **API key parameter name**: origin
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.3`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
