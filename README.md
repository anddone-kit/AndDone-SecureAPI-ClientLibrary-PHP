# AndDone Client Library - PHP

This client library integrates with AndDone's secure APIs.

Please see our developer documentation & API Explorer, linked below, for detailed instructions on how to integrate this into your systems.

**Secure API PHP Client**

This PHP SDK is an auto-generated client for the AndDone Secure API, built using the [OpenAPI Generator](https://openapi-generator.tech).

* **API version**: 2.3
* **Generator version**: 7.9.0
* **Build package**: `org.openapitools.codegen.languages.PhpClientCodegen`
* **Developer Documentation**: [DevDocs](https://docs.anddone.com/)
* **API Explorer**: [AndDone API Explorer](https://docs.anddone.com/explorer/)

---

## Table of Contents

* [Requirements](#requirements)
* [Installation](#installation)
* [Configuration](#configuration)
* [Quickstart](#quickstart)
* [API Endpoints](#api-endpoints)
* [Models](#models)
* [Authorization](#authorization)
* [Testing](#testing)
* [Support & Versioning](#support--versioning)

---

## Requirements

* **PHP 7.4+** (works with PHP 8.0+)
* Composer package manager
* Access to **AndDone Merchant Portal** for API keys

---

## Installation

Install via [Composer](https://getcomposer.org/). In your `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/anddone-kit/AndDone-SecureAPI-ClientLibrary-PHP.git"
    }
  ],
  "require": {
    "anddone-kit/AndDone-SecureAPI-ClientLibrary-PHP": "*@dev"
  }
}
```

Then run:

```bash
composer install
```

Or, if manually installing, include the autoloader:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

---

## Configuration

1. **Retrieve Developer Credentials:**

   1. Log in to AndDone Merchant Portal:

      * **UAT**: [https://portal.uat.anddone.com](https://portal.uat.anddone.com)
      * **Production**: [https://portal.anddone.com](https://portal.anddone.com)
   2. Go to **Developer → API Keys** in the left menu.
   3. Copy:

      * `xApiKey` (API Key)
      * `xAppKey` (App Key)

2. **Determine Your Origin:**
   The `origin` is your public IP address.
   Find it by searching **"what's my IP"** in Google or visiting [https://www.whatsmyip.org](https://www.whatsmyip.org).

   * Contact AndDone support to ensure your origin IP is registered.
   * Email: [support@anddone.com](mailto:support@anddone.com)

3. **Optional: Create a Configuration File**
   Store your values in a JSON file (`config.json`) for reuse:

   ```json
   {
     "xApiKey": "YOUR_API_KEY",
     "xAppKey": "YOUR_APP_KEY",
     "xVersion": "2.3",
     "origin": "YOUR_IP_ADDRESS"
   }
   ```

---

## Quickstart

Here’s a minimal working example to call the **Secure Create Payment Intent API**:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use OpenAPI\Client\Api\SecurePaymentIntentApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\PaymentIntentRequest;

// Configure API keys
$config = Configuration::getDefaultConfiguration()
    ->setApiKey('x-api-key', 'YOUR_API_KEY')
    ->setApiKey('x-app-key', 'YOUR_APP_KEY')
    ->setApiKey('x-version', '2.3')
    ->setApiKey('origin', 'YOUR_ORIGIN');

// Initialize API client
$apiInstance = new SecurePaymentIntentApi(
    new GuzzleHttp\Client(),
    $config
);

// Build request
$request = new PaymentIntentRequest([
    'saveForFuture' => true,
    'amount' => 10000,
    'title' => 'YOUR UNIQUE TITLE',
    'shortDescription' => 'shortDescription',
    'paymentDescription' => 'paymentDescription',
    'invoiceNumber' => 'php-sdk',
    'expiresIn' => '300000',
    'intent' => [
        'paymentTypes' => ['CreditCard', 'ACH']
    ],
    'enablePremiumFinance' => true,
    'additionalDetailsPreference' => 'NoAdditionalDetails'
]);

// Execute API call
try {
    $result = $apiInstance->securePaymentintentsPost($request);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling SecurePaymentIntentApi: ", $e->getMessage(), PHP_EOL;
}
```

---

## API Endpoints

All URIs are relative to:

* **UAT**: `https://api.uat.anddone.com`
* **Production**: `https://api.anddone.com`

<details>
  <summary>Click to view all endpoints</summary>

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
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
*SecureOrumApi* | [**secureBankaccountsDetailsPost**](docs/Api/SecureOrumApi.md#securebankaccountsdetailspost) | **POST** /secure/bankaccounts/details | This API will request for verified bank account.
*SecureOrumApi* | [**secureBankaccountsVerifyPost**](docs/Api/SecureOrumApi.md#securebankaccountsverifypost) | **POST** /secure/bankaccounts/verify | This API will request for account verification.
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundPaymentsTimelinesPost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentstimelinespost) | **POST** /vendorapi/secure/outboundPayments/timelines | This API gets outbound payment timelines
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundpaymentsCancelPost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentscancelpost) | **POST** /vendorapi/secure/outboundpayments/cancel | This API cancel outbound payment request
*SecureOutboundPaymentsApi* | [**vendorapiSecureOutboundpaymentsDetailPost**](docs/Api/SecureOutboundPaymentsApi.md#vendorapisecureoutboundpaymentsdetailpost) | **POST** /vendorapi/secure/outboundpayments/detail | This API fetch outbound payment by paymentId
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


</details>

---

## Models

<details>
  <summary>Click to view all models</summary>

- [BankDetailDto](docs/Model/BankDetailDto.md)
- [CancelPaymentRequestDTO](docs/Model/CancelPaymentRequestDTO.md)
- [DataDto](docs/Model/DataDto.md)
- [GetQuoteKeyRequest](docs/Model/GetQuoteKeyRequest.md)
- [GetQuoteRequest](docs/Model/GetQuoteRequest.md)
- [HeadingDto](docs/Model/HeadingDto.md)
- [MerchantTransactionEntityResponse](docs/Model/MerchantTransactionEntityResponse.md)
- [MerchantTransactionEntityResponseDataInner](docs/Model/MerchantTransactionEntityResponseDataInner.md)
- [OutboundPaymentTimelineResponseDTOInner](docs/Model/OutboundPaymentTimelineResponseDTOInner.md)
- [PFCheckEndorsementsRequest](docs/Model/PFCheckEndorsementsRequest.md)
- [PFCheckEndorsementsResponse](docs/Model/PFCheckEndorsementsResponse.md)
- [PFCheckEndorsementsResponseItem](docs/Model/PFCheckEndorsementsResponseItem.md)
- [PFCheckEndorsementsResponseItemPoliciesInner](docs/Model/PFCheckEndorsementsResponseItemPoliciesInner.md)
- [PFEndorsementRequest](docs/Model/PFEndorsementRequest.md)
- [PFEndorsementRequestQuote](docs/Model/PFEndorsementRequestQuote.md)
- [PFEndorsementRequestQuoteAgent](docs/Model/PFEndorsementRequestQuoteAgent.md)
- [PFEndorsementRequestQuoteAgentAddress](docs/Model/PFEndorsementRequestQuoteAgentAddress.md)
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
- [PaymentLinkExpiresResponse](docs/Model/PaymentLinkExpiresResponse.md)
- [PaymentLinkRequest](docs/Model/PaymentLinkRequest.md)
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
- [QuoteRequestAgentAddress](docs/Model/QuoteRequestAgentAddress.md)
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
- [TokenLinkSecureRequestIntent](docs/Model/TokenLinkSecureRequestIntent.md)
- [TokenRequest](docs/Model/TokenRequest.md)
- [TransactionDetailResponse](docs/Model/TransactionDetailResponse.md)
- [TransactionDetailResponseSplitsInner](docs/Model/TransactionDetailResponseSplitsInner.md)
- [TransactionDetailResponseTenderInfo](docs/Model/TransactionDetailResponseTenderInfo.md)
- [TransactionPaymentResponse](docs/Model/TransactionPaymentResponse.md)
- [TransactionPaymentResponseAchTenderInfo](docs/Model/TransactionPaymentResponseAchTenderInfo.md)
- [TransactionPaymentResponseAchTenderInfoCommissionType](docs/Model/TransactionPaymentResponseAchTenderInfoCommissionType.md)
- [TransactionPaymentResponseBillingContact](docs/Model/TransactionPaymentResponseBillingContact.md)
- [TransactionPaymentResponseBillingContactAddress](docs/Model/TransactionPaymentResponseBillingContactAddress.md)
- [TransactionPaymentResponseBillingContactName](docs/Model/TransactionPaymentResponseBillingContactName.md)
- [TransactionPaymentResponseCcTenderInfo](docs/Model/TransactionPaymentResponseCcTenderInfo.md)
- [TransactionPaymentResponseRefundOrigin](docs/Model/TransactionPaymentResponseRefundOrigin.md)
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
- [VerificationEntityRequest](docs/Model/VerificationEntityRequest.md)
- [VerifyBankAccountRequest](docs/Model/VerifyBankAccountRequest.md)
- [VerifyBankAccountRequestBankAccountEntity](docs/Model/VerifyBankAccountRequestBankAccountEntity.md)
- [VerifyBankAccountResponse](docs/Model/VerifyBankAccountResponse.md)
- [VerifyBankAccountResponseHttpResponse](docs/Model/VerifyBankAccountResponseHttpResponse.md)


</details>

---

## Authorization

Authentication is handled via API keys in HTTP headers:

| Key           | Location | Description             |
| ------------- | -------- | ----------------------- |
| **x-api-key** | Header   | Your API key            |
| **x-app-key** | Header   | Your App key            |
| **x-version** | Header   | API version (e.g., 2.3) |
| **origin**    | Header   | Your public IP address  |

---

## Testing

To run the tests:

```bash
composer install
vendor/bin/phpunit
```

---

## Support & Versioning

* **API Environments:** Use UAT for testing; switch to Production only after validation.
* **Issues:** Report bugs or request features via the [GitHub Issues](https://github.com/anddone-kit/AndDone-SecureAPI-ClientLibrary-PHP/issues) page.
