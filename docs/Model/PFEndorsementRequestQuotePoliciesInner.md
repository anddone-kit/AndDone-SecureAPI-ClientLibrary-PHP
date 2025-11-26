# # PFEndorsementRequestQuotePoliciesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policyId** | **int** | This denotes the policy identifier. | [optional]
**premium** | **float** | This denotes the premium amount. |
**down** | **float** | This denotes the down amount. | [optional]
**downPercent** | **float** | This denotes the down percentage. | [optional]
**fee** | **float** | This denotes the fee amount. | [optional]
**tax** | **float** | This denotes the tax amount. | [optional]
**policyNumber** | **string** | This denotes the policy number. | [optional]
**company** | [**\OpenAPI\Client\Model\PFEndorsementRequestQuotePoliciesInnerCompany**](PFEndorsementRequestQuotePoliciesInnerCompany.md) |  | [optional]
**ga** | [**\OpenAPI\Client\Model\PFEndorsementRequestQuotePoliciesInnerGa**](PFEndorsementRequestQuotePoliciesInnerGa.md) |  | [optional]
**broker** | [**\OpenAPI\Client\Model\PFEndorsementRequestQuotePoliciesInnerGa**](PFEndorsementRequestQuotePoliciesInnerGa.md) |  | [optional]
**coverage** | **string** | This denotes the coverage and it is required if adding new policy. | [optional]
**effectiveDate** | **string** | This denotes the effective date. |
**expirationDate** | **string** | This denotes the expiration date and it is required if adding new policy. |
**term** | **int** | This denotes the number of terms. | [optional]
**minimumEarned** | **float** | This denotes the minimum earned amount. | [optional]
**minimumEarnedPercent** | **float** | This denotes the minimum earned percent. | [optional]
**auditable** | **bool** | This denotes the flag if it is auditable or not. | [optional]
**cancelDays** | **string** | This denotes the cancel days. | [optional]
**lossPayeeRequested** | **bool** | This denotes the flag of loss payee requested. | [optional]
**minimumLiability** | **float** | This denotes the minimum liability. | [optional]
**maximumLiability** | **float** | This denotes the maximum liability. | [optional]
**totalPayFunding** | [**\OpenAPI\Client\Model\PFEndorsementRequestQuotePoliciesInnerTotalPayFundingInner[]**](PFEndorsementRequestQuotePoliciesInnerTotalPayFundingInner.md) |  | [optional]
**policyFee** | [**\OpenAPI\Client\Model\PFEndorsementRequestQuotePoliciesInnerPolicyFeeInner[]**](PFEndorsementRequestQuotePoliciesInnerPolicyFeeInner.md) |  | [optional]
**invoiceNumber** | **string** | This denotes the invoice number. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
