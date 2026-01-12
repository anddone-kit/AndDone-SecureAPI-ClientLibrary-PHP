<?php
use OpenAPI\Client\Configuration;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceApi;
use \OpenAPI\Client\Model\PFPolicyUpdateRequestDTO;
use \OpenAPI\Client\Model\QuoteRequest;
use \OpenAPI\Client\Model\PFQuoteEsignRequest;
use \OpenAPI\Client\Model\PFQuoteBookingRequest;
use \OpenAPI\Client\Model\GetQuoteRequest;
use \OpenAPI\Client\Model\GetQuoteKeyRequest;
use \OpenAPI\Client\Model\PFRetrievePFARequestDTO;
use \OpenAPI\Client\Api\SecureEmbeddedPremiumFinanceEndorsementsApi;
use \OpenAPI\Client\Model\PFCheckEndorsementsRequest;
use \OpenAPI\Client\Model\PFEndorsementRequest;
use OpenAPI\Client\Model\PFLiteSecureQuoteRequest;
use OpenAPI\Client\Model\PFGenerateQuoteResponse ;
use OpenAPI\Client\Model\PFLiteGetQuoteRequest;
use OpenAPI\Client\Api\SecurePremiumFinanceLiteApi;
use OpenAPI\Client\Model\PFLiteQuoteByPaymentLinkResponse;
use OpenAPI\Client\Model\PFLitePaymentLinkRequest;
use \OpenAPI\Client\Api\SecureOrumApi;
use \OpenAPI\Client\Model\verificationEntityRequest;
use \OpenAPI\Client\Model\verifyBankAccountRequest;
use \OpenAPI\Client\Model\VerifyBankAccountResponse;
use OpenAPI\Client\Model\SecureBatchExecuteRequest;
use OpenAPI\Client\Model\SecurePaymentBatchDetailsRequest;
use OpenAPI\Client\Model\PaymentBatchCancellationRequest;
use \OpenAPI\Client\Api\SecurePaymentBatchingApi;
use \OpenAPI\Client\Api\SecureVoidsApi;
use \OpenAPI\Client\Model\SecureTransactionCancelRequest;
use \OpenAPI\Client\Model\SecureCancelledTransactionResponse;
use \OpenAPI\Client\Api\SecureVendorManagementApi;
use \OpenAPI\Client\Model\SecureVendorStatusRequestDTO;
use \OpenAPI\Client\Model\SecureVendorRequestDTO;
use \OpenAPI\Client\Model\VendorResponseDTO;
use \OpenAPI\Client\Model\SecureVendorUpdateRequestDTO;
use \OpenAPI\Client\Model\SecureVendorResponseDTO;
use \OpenAPI\Client\Model\VendorRequestDTO;
use \OpenAPI\Client\Model\PageVendorResponseDTO;
use \OpenAPI\Client\Model\SecureVendorTimelineRequestDTO;
use \OpenAPI\Client\Model\VendorTimelineResponseListInner;
use \OpenAPI\Client\Api\SecureOutboundPaymentsApi;
use \OpenAPI\Client\Model\PaymentTimeLineRequestDto;
use \OpenAPI\Client\Model\OutboundPaymentTimelineResponseDTOInner;
use \OpenAPI\Client\Model\CancelPaymentRequestDTO;
use \OpenAPI\Client\Model\PaymentRequestDetailDTO;
use \OpenAPI\Client\Model\PaymentDetailResponseDTO;
use \OpenAPI\Client\Model\PaymentRequestDto;
use \OpenAPI\Client\Model\PaymentResponseDto;
use \OpenAPI\Client\Model\PagePaymentListResponseDTO;
use \OpenAPI\Client\Api\SecureRefundsApi;
use \OpenAPI\Client\Model\TransactionRefundEligibilityRequest;
use \OpenAPI\Client\Model\RefundEligibility;
use \OpenAPI\Client\Model\SecureTransactionRefundRequest;
use \OpenAPI\Client\Model\SecureTransactionDetailDTO;
use OpenAPI\Client\Api\SecureReportsApi;
use OpenAPI\Client\Model\ReportDownloadRequest;
use OpenAPI\Client\Model\TokenLinkByIdResponse;
use OpenAPI\Client\Model\TokenLinkResponse;
use OpenAPI\Client\Api\SecureTokenLinksApi;
use OpenAPI\Client\Model\TokenLinkSecureRequest;
use OpenAPI\Client\Model\SecureTokenLinkRequest;
use OpenAPI\Client\Model\SecureTokenLinkByIdResponse;
use OpenAPI\Client\Model\SecureTokenLinkUpdateRequest;
use OpenAPI\Client\Model\SecureTokenLinkExpiredResponse;
use \OpenAPI\Client\Api\SecureTokenManagementApi;
use \OpenAPI\Client\Model\TokenRequest;
use \OpenAPI\Client\Api\SecurePaymentIntentApi;
use \OpenAPI\Client\Api\SecurePaymentsApi;
use \OpenAPI\Client\Api\SecurePaymentLinksApi;
use \OpenAPI\Client\Model\PaymentIntentRequest;
use \OpenAPI\Client\Model\PaymentRequest;
use \OpenAPI\Client\Model\SecurePaymentDetailsRequest;
use \OpenAPI\Client\Model\TransactionPaymentResponse;
use \OpenAPI\Client\Model\PaymentLinkRequest;
use \OpenAPI\Client\Model\SecurePaymentLinkRequest;
use \OpenAPI\Client\Model\SecureUpdatePaymentLinkRequest;

class APIExplorerTests extends TestCase
{
    
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for secureCancellationsPost
     *
     * This API cancel a transaction..
     *
     */
    public function testAPIExplorer()
    {

        $xApiKey = 'YOUR_API_KEY';
        $xAppKey = 'YOUR_APP_KEY';
        $xVersion = 2.3;
        $origin = '73.164.237.28';

$apiInstance = new SecurePaymentsApi();

$json = '{
  "type": "PaymentIntent",
  "id": "c5ffedc0-d42e-439e-9efa-526528937e98"
}';

$httpBody = json_decode($json, true);

$requestBody = new SecurePaymentDetailsRequest($httpBody);

$result = $apiInstance->securePaymentsdetailsPost(
	$xApiKey, $xAppKey, $xVersion, $origin, $requestBody);

    print $result;
    $this->assertInstanceOf(TransactionPaymentResponse::class, $result);
    }
}//