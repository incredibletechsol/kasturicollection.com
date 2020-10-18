<?php
/**
 *
 * Validation Error codes and messages
 *
 * ErrorCodes class provides constants for validation errors.
 * The constants should be used to check for a specific validation
 * error in a ValidationErrorCollection.
 * The error messages returned from the server may change;
 * but the codes will remain the same.
 *
 * @package    Braintree
 * @subpackage Errors
 * @category   Validation
 * @copyright  2014 Braintree, a division of PayPal, Inc.
 */
class Braintree_Error_Codes
{
    const ADDRESS_CANNOT_BE_BLANK                        = '81801';
    const ADDRESS_COMPANY_IS_INVALID                     = '91821';
    const ADDRESS_COMPANY_IS_TOO_LONG                    = '81802';
    const ADDRESS_COUNTRY_CODE_ALPHA2_IS_NOT_ACCEPTED    = '91814';
    const ADDRESS_COUNTRY_CODE_ALPHA3_IS_NOT_ACCEPTED    = '91816';
    const ADDRESS_COUNTRY_CODE_NUMERIC_IS_NOT_ACCEPTED   = '91817';
    const ADDRESS_COUNTRY_NAME_IS_NOT_ACCEPTED           = '91803';
    const ADDRESS_EXTENDED_ADDRESS_IS_INVALID            = '91823';
    const ADDRESS_EXTENDED_ADDRESS_IS_TOO_LONG           = '81804';
    const ADDRESS_FIRST_NAME_IS_INVALID                  = '91819';
    const ADDRESS_FIRST_NAME_IS_TOO_LONG                 = '81805';
    const ADDRESS_INCONSISTENT_COUNTRY                   = '91815';
    const ADDRESS_LAST_NAME_IS_INVALID                   = '91820';
    const ADDRESS_LAST_NAME_IS_TOO_LONG                  = '81806';
    const ADDRESS_LOCALITY_IS_INVALID                    = '91824';
    const ADDRESS_LOCALITY_IS_TOO_LONG                   = '81807';
    const ADDRESS_POSTAL_CODE_INVALID_CHARACTERS         = '81813';
    const ADDRESS_POSTAL_CODE_IS_INVALID                 = '91826';
    const ADDRESS_POSTAL_CODE_IS_REQUIRED                = '81808';
    const ADDRESS_POSTAL_CODE_IS_TOO_LONG                = '81809';
    const ADDRESS_REGION_IS_INVALID                      = '91825';
    const ADDRESS_REGION_IS_TOO_LONG                     = '81810';
    const ADDRESS_STATE_IS_INVALID_FOR_SELLER_PROTECTION = '81827';
    const ADDRESS_STREET_ADDRESS_IS_INVALID              = '91822';
    const ADDRESS_STREET_ADDRESS_IS_REQUIRED             = '81811';
    const ADDRESS_STREET_ADDRESS_IS_TOO_LONG             = '81812';
    const ADDRESS_TOO_MANY_ADDRESSES_PER_CUSTOMER        = '91818';

    const APPLE_PAY_CARDS_ARE_NOT_ACCEPTED                                  = '83501';
    const APPLE_PAY_CUSTOMER_ID_IS_REQUIRED_FOR_VAULTING                    = '83502';
    const APPLE_PAY_TOKEN_IS_IN_USE                                         = '93503';
    const APPLE_PAY_PAYMENT_METHOD_NONCE_CONSUMED                           = '93504';
    const APPLE_PAY_PAYMENT_METHOD_NONCE_UNKNOWN                            = '93505';
    const APPLE_PAY_PAYMENT_METHOD_NONCE_UNLOCKED                           = '93506';
    const APPLE_PAY_PAYMENT_METHOD_NONCE_CARD_TYPE_IS_NOT_ACCEPTED          = '83518';
    const APPLE_PAY_CANNOT_UPDATE_APPLE_PAY_CARD_USING_PAYMENT_METHOD_NONCE = '93507';
    const APPLE_PAY_NUMBER_IS_REQUIRED                                      = '93508';
    const APPLE_PAY_EXPIRATION_MONTH_IS_REQUIRED                            = '93509';
    const APPLE_PAY_EXPIRATION_YEAR_IS_REQUIRED                             = '93510';
    const APPLE_PAY_CRYPTOGRAM_IS_REQUIRED                                  = '93511';
    const APPLE_PAY_DECRYPTION_FAILED                                       = '83512';
    const APPLE_PAY_DISABLED                                                = '93513';
    const APPLE_PAY_MERCHANT_NOT_CONFIGURED                                 = '93514';
    const APPLE_PAY_MERCHANT_KEYS_ALREADY_CONFIGURED                        = '93515';
    const APPLE_PAY_MERCHANT_KEYS_NOT_CONFIGURED                            = '93516';
    const APPLE_PAY_CERTIFICATE_INVALID                                     = '93517';
    const APPLE_PAY_CERTIFICATE_MISMATCH                                    = '93519';
    const APPLE_PAY_INVALID_TOKEN                                           = '83520';
    const APPLE_PAY_PRIVATE_KEY_MISMATCH                                    = '93521';
    const APPLE_PAY_KEY_MISMATCH_STORING_CERTIFICATE                        = '93522';

    const AUTHORIZATION_FINGERPRINT_INVALID_CREATED_AT                   = '93204';
    const AUTHORIZATION_FINGERPRINT_INVALID_FORMAT                       = '93202';
    const AUTHORIZATION_FINGERPRINT_INVALID_PUBLIC_KEY                   = '93205';
    const AUTHORIZATION_FINGERPRINT_INVALID_SIGNATURE                    = '93206';
    const AUTHORIZATION_FINGERPRINT_MISSING_FINGERPRINT                  = '93201';
    const AUTHORIZATION_FINGERPRINT_OPTIONS_NOT_ALLOWED_WITHOUT_CUSTOMER = '93207';
    const AUTHORIZATION_FINGERPRINT_SIGNATURE_REVOKED                    = '93203';

    const CLIENT_TOKEN_CUSTOMER_DOES_NOT_EXIST                               = '92804';
    const CLIENT_TOKEN_FAIL_ON_DUPLICATE_PAYMENT_METHOD_REQUIRES_CUSTOMER_ID = '92803';
    const CLIENT_TOKEN_MAKE_DEFAULT_REQUIRES_CUSTOMER_ID                     = '92801';
    const CLIENT_TOKEN_PROXY_MERCHANT_DOES_NOT_EXIST                         = '92805';
    const CLIENT_TOKEN_UNSUPPORTED_VERSION                                   = '92806';
    const CLIENT_TOKEN_VERIFY_CARD_REQUIRES_CUSTOMER_ID                      = '92802';
    const CLIENT_TOKEN_MERCHANT_ACCOUNT_DOES_NOT_EXIST                       = '92807';

    const CREDIT_CARD_BILLING_ADDRESS_CONFLICT                                          = '91701';
    const CREDIT_CARD_BILLING_ADDRESS_FORMAT_IS_INVALID                                 = '91744';
    const CREDIT_CARD_BILLING_ADDRESS_ID_IS_INVALID                                     = '91702';
    const CREDIT_CARD_CANNOT_UPDATE_CARD_USING_PAYMENT_METHOD_NONCE                     = '91735';
    const CREDIT_CARD_CARDHOLDER_NAME_IS_TOO_LONG                                       = '81723';
    const CREDIT_CARD_CREDIT_CARD_TYPE_IS_NOT_ACCEPTED                                  = '81703';
    const CREDIT_CARD_CREDIT_CARD_TYPE_IS_NOT_ACCEPTED_BY_SUBSCRIPTION_MERCHANT_ACCOUNT = '81718';
    const CREDIT_CARD_CUSTOMER_ID_IS_INVALID                                            = '91705';
    const CREDIT_CARD_CUSTOMER_ID_IS_REQUIRED                                           = '91704';
    const CREDIT_CARD_CVV_IS_INVALID                                                    = '81707';
    const CREDIT_CARD_CVV_IS_REQUIRED                                                   = '81706';
    const CREDIT_CARD_CVV_VERIFICATION_FAILED                                           = '81736';
    const CREDIT_CARD_DUPLICATE_CARD_EXISTS                                             = '81724';
    const CREDIT_CARD_EXPIRATION_DATE_CONFLICT                                          = '91708';
    const CREDIT_CARD_EXPIRATION_DATE_IS_INVALID                                        = '81710';
    const CREDIT_CARD_EXPIRATION_DATE_IS_REQUIRED                                       = '81709';
    const CREDIT_CARD_EXPIRATION_DATE_YEAR_IS_INVALID                                   = '81711';
    const CREDIT_CARD_EXPIRATION_MONTH_IS_INVALID                                       = '81712';
    const CREDIT_CARD_EXPIRATION_YEAR_IS_INVALID                                        = '81713';
    const CREDIT_CARD_INVALID_PARAMS_FOR_CREDIT_CARD_UPDATE                             = '91745';
    const CREDIT_CARD_INVALID_VENMO_SDK_PAYMENT_METHOD_CODE                             = '91727';
    const CREDIT_CARD_NUMBER_INVALID_LENGTH                                             = '81716';
    const CREDIT_CARD_NUMBER_IS_INVALID                                                 = '81715';
    const CREDIT_CARD_NUMBER_IS_REQUIRED                                                = '81714';
    const CREDIT_CARD_NUMBER_LENGTH_IS_INVALID                                          = '81716';
    const CREDIT_CARD_NUMBER_MUST_BE_TEST_NUMBER                                        = '81717';
    const CREDIT_CARD_OPTIONS_UPDATE_EXISTING_TOKEN_IS_INVALID                          = '91723';
    const CREDIT_CARD_OPTIONS_UPDATE_EXISTING_TOKEN_NOT_ALLOWED                         = '91729';
    const CREDIT_CARD_OPTIONS_VERIFICATION_AMOUNT_CANNOT_BE_NEGATIVE                    = '91739';
    const CREDIT_CARD_OPTIONS_VERIFICATION_AMOUNT_FORMAT_IS_INVALID                     = '91740';
    const CREDIT_CARD_OPTIONS_VERIFICATION_AMOUNT_NOT_SUPPORTED_BY_PROCESSOR            = '91741';
    const CREDIT_CARD_OPTIONS_VERIFICATION_MERCHANT_ACCOUNT_ID_IS_INVALID               = '91728';
    const CREDIT_CARD_OPTIONS_VERIFICATION_MERCHANT_ACCOUNT_IS_FORBIDDEN                = '91743';
    const CREDIT_CARD_OPTIONS_VERIFICATION_MERCHANT_ACCOUNT_IS_SUSPENDED                = '91742';
    const CREDIT_CARD_PAYMENT_METHOD_CONFLICT                                           = '81725';
    const CREDIT_CARD_PAYMENT_METHOD_IS_NOT_A_CREDIT_CARD                               = '91738';
    const CREDIT_CARD_PAYMENT_METHOD_NONCE_CARD_TYPE_IS_NOT_ACCEPTED                    = '91734';
    const CREDIT_CARD_PAYMENT_METHOD_NONCE_CONSUMED                                     = '91731';
    const CREDIT_CARD_PAYMENT_METHOD_NONCE_LOCKED                                       = '91733';
    const CREDIT_CARD_PAYMENT_METHOD_NONCE_UNKNOWN                                      = '91732';
    const CREDIT_CARD_POSTAL_CODE_VERIFICATION_FAILED                                   = '81737';
    const CREDIT_CARD_TOKEN_FORMAT_IS_INVALID                                           = '91718';
    const CREDIT_CARD_TOKEN_INVALID                                                     = '91718';
    const CREDIT_CARD_TOKEN_IS_IN_USE                                                   = '91719';
    const CREDIT_CARD_TOKEN_IS_NOT_ALLOWED                                              = '91721';
    const CREDIT_CARD_TOKEN_IS_REQUIRED                                                 = '91722';
    const CREDIT_CARD_TOKEN_IS_TOO_LONG                                                 = '91720';
    const CREDIT_CARD_VENMO_SDK_PAYMENT_METHOD_CODE_CARD_TYPE_IS_NOT_ACCEPTED           = '91726';
    const CREDIT_CARD_VERIFICATION_NOT_SUPPORTED_ON_THIS_MERCHANT_ACCOUNT               = '91730';

    const CUSTOMER_COMPANY_IS_TOO_LONG                                            = '81601';
    const CUSTOMER_CUSTOM_FIELD_IS_INVALID                                        = '91602';
    const CUSTOMER_CUSTOM_FIELD_IS_TOO_LONG                                       = '81603';
    const CUSTOMER_EMAIL_FORMAT_IS_INVALID                                        = '81604';
    const CUSTOMER_EMAIL_IS_INVALID                                               = '81604';
    const CUSTOMER_EMAIL_IS_REQUIRED                                              = '81606';
    const CUSTOMER_EMAIL_IS_TOO_LONG                                              = '81605';
    const CUSTOMER_FAX_IS_TOO_LONG                                                = '81607';
    const CUSTOMER_FIRST_NAME_IS_TOO_LONG                                         = '81608';
    const CUSTOMER_ID_IS_INVAILD                                                  = '91610'; //Deprecated
    const CUSTOMER_ID_IS_INVALID                                                  = '91610';
    const CUSTOMER_ID_IS_IN_USE                                                   = '91609';
    const CUSTOMER_ID_IS_NOT_ALLOWED                                              = '91611';
    const CUSTOMER_ID_IS_REQUIRED                                                 = '91613';
    const CUSTOMER_ID_IS_TOO_LONG                                                 = '91612';
    const CUSTOMER_LAST_NAME_IS_TOO_LONG                                          = '81613';
    const CUSTOMER_PHONE_IS_TOO_LONG                                              = '81614';
    const CUSTOMER_VAULTED_PAYMENT_INSTRUMENT_NONCE_BELONGS_TO_DIFFERENT_CUSTOMER = '91617';
    const CUSTOMER_WEBSITE_FORMAT_IS_INVALID                                      = '81616';
    const CUSTOMER_WEBSITE_IS_INVALID                                             = '81616';
    const CUSTOMER_WEBSITE_IS_TOO_LONG                                            = '81615';

    const DESCRIPTOR_NAME_FORMAT_IS_INVALID                = '92201';
    const DESCRIPTOR_PHONE_FORMAT_IS_INVALID               = '92202';
    const DESCRIPTOR_INTERNATIONAL_NAME_FORMAT_IS_INVALID  = '92204';
    const DESCRIPTOR_DYNAMIC_DESCRIPTORS_DISABLED          = '92203';
    const DESCRIPTOR_INTERNATIONAL_PHONE_FORMAT_IS_INVALID = '92205';
    const DESCRIPTOR_URL_FORMAT_IS_INVALID                 = '92206';

    const INDUSTRY_DATA_INDUSTRY_TYPE_IS_INVALID                         = '93401';
    const INDUSTRY_DATA_LODGING_EMPTY_DATA                               = '93402';
    const INDUSTRY_DATA_LODGING_FOLIO_NUMBER_IS_INVALID                  = '93403';
    const INDUSTRY_DATA_LODGING_CHECK_IN_DATE_IS_INVALID                 = '93404';
    const INDUSTRY_DATA_LODGING_CHECK_OUT_DATE_IS_INVALID                = '93405';
    const INDUSTRY_DATA_LODGING_CHECK_OUT_DATE_MUST_FOLLOW_CHECK_IN_DATE = '93406';
    const INDUSTRY_DATA_LODGING_UNKNOWN_DATA_FIELD                       = '93407';
    const INDUSTRY_DATA_TRAVEL_CRUISE_EMPTY_DATA                         = '93408';
    const INDUSTRY_DATA_TRAVEL_CRUISE_UNKNOWN_DATA_FIELD                 = '93409';
    const INDUSTRY_DATA_TRAVEL_CRUISE_TRAVEL_PACKAGE_IS_INVALID          = '93410';
    const INDUSTRY_DATA_TRAVEL_CRUISE_DEPARTURE_DATE_IS_INVALID          = '93411';
    const INDUSTRY_DATA_TRAVEL_CRUISE_LODGING_CHECK_IN_DATE_IS_INVALID   = '93412';
    const INDUSTRY_DATA_TRAVEL_CRUISE_LODGING_CHECK_OUT_DATE_IS_INVALID  = '93413';

    const MERCHANT_COUNTRY_CANNOT_BE_BLANK              = '83603';
    const MERCHANT_COUNTRY_CODE_ALPHA2_IS_INVALID       = '93607';
    const MERCHANT_COUNTRY_CODE_ALPHA2_IS_NOT_ACCEPTED  = '93606';
    const MERCHANT_COUNTRY_CODE_ALPHA3_IS_INVALID       = '93605';
    const MERCHANT_COUNTRY_CODE_ALPHA3_IS_NOT_ACCEPTED  = '93604';
    const MERCHANT_COUNTRY_CODE_NUMERIC_IS_INVALID      = '93609';
    const MERCHANT_COUNTRY_CODE_NUMERIC_IS_NOT_ACCEPTED = '93608';
    const MERCHANT_COUNTRY_NAME_IS_INVALID              = '93611';
    const MERCHANT_COUNTRY_NAME_IS_NOT_ACCEPTED         = '93610';
    const MERCHANT_EMAIL_FORMAT_IS_INVALID              = '93602';
    const MERCHANT_EMAIL_IS_REQUIRED                    = '83601';
    const MERCHANT_INCONSISTENT_COUNTRY                 = '93612';
    const MERCHANT_ACCOUNT_PAYMENT_METHODS_ARE_INVALID  = '93613';

    const MERCHANT_ACCOUNT_ID_FORMAT_IS_INVALID                         = '82603';
    const MERCHANT_ACCOUNT_ID_IS_IN_USE                                 = '82604';
    const MERCHANT_ACCOUNT_ID_IS_NOT_ALLOWED                            = '82605';
    const MERCHANT_ACCOUNT_ID_IS_TOO_LONG                               = '82602';
    const MERCHANT_ACCOUNT_MASTER_MERCHANT_ACCOUNT_ID_IS_INVALID        = '82607';
    const MERCHANT_ACCOUNT_MASTER_MERCHANT_ACCOUNT_ID_IS_REQUIRED       = '82606';
    const MERCHANT_ACCOUNT_MASTER_MERCHANT_ACCOUNT_MUST_BE_ACTIVE       = '82608';
    const MERCHANT_ACCOUNT_TOS_ACCEPTED_IS_REQUIRED                     = '82610';
    const MERCHANT_ACCOUNT_CANNOT_BE_UPDATED                            = '82674';
    const MERCHANT_ACCOUNT_DECLINED                                     = '82626';
    const MERCHANT_ACCOUNT_DECLINED_MASTER_CARD_MATCH                   = '82622';
    const MERCHANT_ACCOUNT_DECLINED_OFAC                                = '82621';
    const MERCHANT_ACCOUNT_DECLINED_FAILED_KYC                          = '82623';
    const MERCHANT_ACCOUNT_DECLINED_SSN_INVALID                         = '82624';
    const MERCHANT_ACCOUNT_DECLINED_SSN_MATCHES_DECEASED                = '82625';
    const MERCHANT_ACCOUNT_ID_CANNOT_BE_UPDATED                         = '82675';
    const MERCHANT_ACCOUNT_MASTER_MERCHANT_ACCOUNT_ID_CANNOT_BE_UPDATED = '82676';

    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ACCOUNT_NUMBER_IS_REQUIRED           = '82614';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_COMPANY_NAME_IS_INVALID              = '82631';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_COMPANY_NAME_IS_REQUIRED_WITH_TAX_ID = '82633';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DATE_OF_BIRTH_IS_REQUIRED            = '82612';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED                             = '82626'; // Keep for backwards compatibility
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_MASTER_CARD_MATCH           = '82622'; // Keep for backwards compatibility
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_OFAC                        = '82621'; // Keep for backwards compatibility
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_FAILED_KYC                  = '82623'; // Keep for backwards compatibility
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_SSN_INVALID                 = '82624'; // Keep for backwards compatibility
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_SSN_MATCHES_DECEASED        = '82625'; // Keep for backwards compatibility
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_EMAIL_ADDRESS_IS_INVALID             = '82616';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_FIRST_NAME_IS_INVALID                = '82627';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_FIRST_NAME_IS_REQUIRED               = '82609';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_LAST_NAME_IS_INVALID                 = '82628';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_LAST_NAME_IS_REQUIRED                = '82611';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_PHONE_IS_INVALID                     = '82636';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ROUTING_NUMBER_IS_INVALID            = '82635';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ROUTING_NUMBER_IS_REQUIRED           = '82613';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_SSN_IS_INVALID                       = '82615';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_TAX_ID_IS_INVALID                    = '82632';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_TAX_ID_IS_REQUIRED_WITH_COMPANY_NAME = '82634';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DATE_OF_BIRTH_IS_INVALID             = '82663';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_REGION_IS_INVALID            = '82664';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_EMAIL_ADDRESS_IS_REQUIRED            = '82665';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ACCOUNT_NUMBER_IS_INVALID            = '82670';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_TAX_ID_MUST_BE_BLANK                 = '82673';

    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_LOCALITY_IS_REQUIRED       = '82618';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_POSTAL_CODE_IS_INVALID     = '82630';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_POSTAL_CODE_IS_REQUIRED    = '82619';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_REGION_IS_REQUIRED         = '82620';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_STREET_ADDRESS_IS_INVALID  = '82629';
    const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_STREET_ADDRESS_IS_REQUIRED = '82617';

    const MERCHANT_ACCOUNT_BUSINESS_DBA_NAME_IS_INVALID              = '82646';
    const MERCHANT_ACCOUNT_BUSINESS_TAX_ID_IS_INVALID            = '82647';
    const MERCHANT_ACCOUNT_BUSINESS_TAX_ID_IS_REQUIRED_WITH_LEGAL_NAME = '82648';
    const MERCHANT_ACCOUNT_BUSINESS_LEGAL_NAME_IS_REQUIRED_WITH_TAX_ID = '82669';
    const MERCHANT_ACCOUNT_BUSINESS_TAX_ID_MUST_BE_BLANK         = '82672';
    const MERCHANT_ACCOUNT_BUSINESS_LEGAL_NAME_IS_INVALID = '82677';
    const MERCHANT_ACCOUNT_BUSINESS_ADDRESS_REGION_IS_INVALID = '82684';
    const MERCHANT_ACCOUNT_BUSINESS_ADDRESS_STREET_ADDRESS_IS_INVALID = '82685';
    const MERCHANT_ACCOUNT_BUSINESS_ADDRESS_POSTAL_CODE_IS_INVALID = '82686';

    const MERCHANT_ACCOUNT_INDIVIDUAL_FIRST_NAME_IS_REQUIRED    = '82637';
    const MERCHANT_ACCOUNT_INDIVIDUAL_LAST_NAME_IS_REQUIRED     = '82638';
    const MERCHANT_ACCOUNT_INDIVIDUAL_DATE_OF_BIRTH_IS_REQUIRED = '82639';
    const MERCHANT_ACCOUNT_INDIVIDUAL_SSN_IS_INVALID            = '82642';
    const MERCHANT_ACCOUNT_INDIVIDUAL_EMAIL_IS_INVALID  = '82643';
    const MERCHANT_ACCOUNT_INDIVIDUAL_FIRST_NAME_IS_INVALID     = '82644';
    const MERCHANT_ACCOUNT_INDIVIDUAL_LAST_NAME_IS_INVALID      = '82645';
    const MERCHANT_ACCOUNT_INDIVIDUAL_PHONE_IS_INVALID          = '82656';
    const MERCHANT_ACCOUNT_INDIVIDUAL_DATE_OF_BIRTH_IS_INVALID  = '82666';
    const MERCHANT_ACCOUNT_INDIVIDUAL_EMAIL_IS_REQUIRED = '82667';

    const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_STREET_ADDRESS_IS_REQUIRED = '82657';
    const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_LOCALITY_IS_REQUIRED       = '82658';
    const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_POSTAL_CODE_IS_REQUIRED    = '82659';
    const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_REGION_IS_REQUIRED         = '82660';
    const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_STREET_ADDRESS_IS_INVALID  = '82661';
    const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_POSTAL_CODE_IS_INVALID     = '82662';
    const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_REGION_IS_INVALID          = '82668';

    const MERCHANT_ACCOUNT_FUNDING_ROUTING_NUMBER_IS_REQUIRED = '82640';
    const MERCHANT_ACCOUNT_FUNDING_ACCOUNT_NUMBER_IS_REQUIRED = '82641';
    const MERCHANT_ACCOUNT_FUNDING_ROUTING_NUMBER_IS_INVALID  = '82649';
    const MERCHANT_ACCOUNT_FUNDING_ACCOUNT_NUMBER_IS_INVALID  = '82671';
    const MERCHANT_ACCOUNT_FUNDING_DESTINATION_IS_REQUIRED = '82678';
    const MERCHANT_ACCOUNT_FUNDING_DESTINATION_IS_INVALID = '82679';
    const MERCHANT_ACCOUNT_FUNDING_EMAIL_IS_REQUIRED = '82680';
    const MERCHANT_ACCOUNT_FUNDING_EMAIL_IS_INVALID = '82681';
    const MERCHANT_ACCOUNT_FUNDING_MOBILE_PHONE_IS_REQUIRED = '82682';
    const MERCHANT_ACCOUNT_FUNDING_MOBILE_PHONE_IS_INVALID = '82683';

    const OAUTH_INVALID_GRANT          = '93801';
    const OAUTH_INVALID_CREDENTIALS    = '93802';
    const OAUTH_INVALID_SCOPE          = '93803';
    const OAUTH_INVALID_REQUEST        = '93804';
    const OAUTH_UNSUPPORTED_GRANT_TYPE = '93805';

    const PAYMENT_METHOD_CANNOT_FORWARD_PAYMENT_METHOD_TYPE = '93106';
    const PAYMENT_METHOD_CUSTOMER_ID_IS_INVALID             = '93105';
    const PAYMENT_METHOD_CUSTOMER_ID_IS_REQUIRED            = '93104';
    const PAYMENT_METHOD_NONCE_IS_INVALID                   = '93102';
    const PAYMENT_METHOD_NONCE_IS_REQUIRED                  = '93103';
    const PAYMENT_METHOD_PAYMENT_METHOD_NONCE_CONSUMED      = '93107';
    const PAYMENT_METHOD_PAYMENT_METHOD_NONCE_UNKNOWN       = '93108';
    const PAYMENT_METHOD_PAYMENT_METHOD_NONCE_LOCKED        = '93109';
    const PAYMENT_METHOD_PAYMENT_METHOD_PARAMS_ARE_REQUIRED = '93101';

    const PAYPAL_ACCOUNT_AUTH_EXPIRED                                            = '92911';
    const PAYPAL_ACCOUNT_CANNOT_HAVE_BOTH_ACCESS_TOKEN_AND_CONSENT_CODE          = '82903';
    const PAYPAL_ACCOUNT_CANNOT_HAVE_FUNDING_SOURCE_WITHOUT_ACCESS_TOKEN         = '92912';
    const PAYPAL_ACCOUNT_CANNOT_UPDATE_PAYPAL_ACCOUNT_USING_PAYMENT_METHOD_NONCE = '92914';
    const PAYPAL_ACCOUNT_CANNOT_VAULT_ONE_TIME_USE_PAYPAL_ACCOUNT                = '82902';
    const PAYPAL_ACCOUNT_CONSENT_CODE_OR_ACCESS_TOKEN_IS_REQUIRED                = '82901';
    const PAYPAL_ACCOUNT_CUSTOMER_ID_IS_REQUIRED_FOR_VAULTING                    = '82905';
    const PAYPAL_ACCOUNT_INVALID_FUNDING_SOURCE_SELECTION                        = '92913';
    const PAYPAL_ACCOUNT_INVALID_PARAMS_FOR_PAYPAL_ACCOUNT_UPDATE                = '92915';
    const PAYPAL_ACCOUNT_PAYMENT_METHOD_NONCE_CONSUMED                           = '92907';
    const PAYPAL_ACCOUNT_PAYMENT_METHOD_NONCE_LOCKED                             = '92909';
    const PAYPAL_ACCOUNT_PAYMENT_METHOD_NONCE_UNKNOWN                            = '92908';
    const PAYPAL_ACCOUNT_PAYPAL_ACCOUNTS_ARE_NOT_ACCEPTED                        = '82904';
    const PAYPAL_ACCOUNT_PAYPAL_COMMUNICATION_ERROR                              = '92910';
    const PAYPAL_ACCOUNT_TOKEN_IS_IN_USE                                         = '92906';

    const SEPA_BANK_ACCOUNT_ACCOUNT_HOLDER_NAME_IS_REQUIRED = '93003';
    const SEPA_BANK_ACCOUNT_BIC_IS_REQUIRED                 = '93002';
    const SEPA_BANK_ACCOUNT_IBAN_IS_REQUIRED                = '93001';

    const SEPA_MANDATE_ACCOUNT_HOLDER_NAME_IS_REQUIRED = '83301';
    const SEPA_MANDATE_BIC_INVALID_CHARACTER           = '83306';
    const SEPA_MANDATE_BIC_IS_REQUIRED                 = '83302';
    const SEPA_MANDATE_BIC_LENGTH_IS_INVALID           = '83307';
    const SEPA_MANDATE_BIC_UNSUPPORTED_COUNTRY         = '83308';
    const SEPA_MANDATE_BILLING_ADDRESS_CONFLICT        = '93311';
    const SEPA_MANDATE_BILLING_ADDRESS_ID_IS_INVALID   = '93312';
    const SEPA_MANDATE_IBAN_INVALID_CHARACTER          = '83305';
    const SEPA_MANDATE_IBAN_INVALID_FORMAT             = '83310';
    const SEPA_MANDATE_IBAN_IS_REQUIRED                = '83303';
    const SEPA_MANDATE_IBAN_UNSUPPORTED_COUNTRY        = '83309';
    const SEPA_MANDATE_TYPE_IS_REQUIRED                = '93304';
    const SEPA_MANDATE_TYPE_IS_INVALID                 = '93313';

    const SETTLEMENT_BATCH_SUMMARY_SETTLEMENT_DATE_IS_INVALID  = '82302';
    const SETTLEMENT_BATCH_SUMMARY_SETTLEMENT_DATE_IS_REQUIRED = '82301';
    const SETTLEMENT_BATCH_SUMMARY_CUSTOM_FIELD_IS_INVALID     = '82303';

	const SUBSCRIPTION_BILLING_DAY_OF_MONTH_CANNOT_BE_UPDATED                              = '91918';
	const SUBSCRIPTION_BILLING_DAY_OF_MONTH_IS_INVALID                                     = '91914';
	const SUBSCRIPTION_BILLING_DAY_OF_MONTH_MUST_BE_NUMERIC                                = '91913';
	const SUBSCRIPTION_CANNOT_ADD_DUPLICATE_ADDON_OR_DISCOUNT                              = '91911';
	const SUBSCRIPTION_CANNOT_EDIT_CANCELED_SUBSCRIPTION                                   = '81901';
	const SUBSCRIPTION_CANNOT_EDIT_EXPIRED_SUBSCRIPTION                                    = '81910';
	const SUBSCRIPTION_CANNOT_EDIT_PRICE_CHANGING_FIELDS_ON_PAST_DUE_SUBSCRIPTION          = '91920';
	const SUBSCRIPTION_FIRST_BILLING_DATE_CANNOT_BE_IN_THE_PAST                            = '91916';
	const SUBSCRIPTION_FIRST_BILLING_DATE_CANNOT_BE_UPDATED                                = '91919';
	const SUBSCRIPTION_FIRST_BILLING_DATE_IS_INVALID                                       = '91915';
	const SUBSCRIPTION_ID_IS_IN_USE                                                        = '81902';
	const SUBSCRIPTION_INCONSISTENT_NUMBER_OF_BILLING_CYCLES                               = '91908';
	const SUBSCRIPTION_INCONSISTENT_START_DATE                                             = '91917';
	const SUBSCRIPTION_INVALID_REQUEST_FORMAT                                              = '91921';
	const SUBSCRIPTION_MERCHANT_ACCOUNT_ID_IS_INVALID                                      = '91901';
	const SUBSCRIPTION_MISMATCH_CURRENCY_ISO_CODE                                          = '91923';
	const SUBSCRIPTION_NUMBER_OF_BILLING_CYCLES_CANNOT_BE_BLANK                            = '91912';
	const SUBSCRIPTION_NUMBER_OF_BILLING_CYCLES_IS_TOO_SMALL                               = '91909';
	const SUBSCRIPTION_NUMBER_OF_BILLING_CYCLES_MUST_BE_GREATER_THAN_ZERO                  = '91907';
	const SUBSCRIPTION_NUMBER_OF_BILLING_CYCLES_MUST_BE_NUMERIC                            = '91906';
	const SUBSCRIPTION_PAYMENT_METHOD_NONCE_CARD_TYPE_IS_NOT_ACCEPTED                      = '91924';
	const SUBSCRIPTION_PAYMENT_METHOD_NONCE_IS_INVALID                                     = '91925';
	const SUBSCRIPTION_PAYMENT_METHOD_NONCE_NOT_ASSOCIATED_WITH_CUSTOMER                   = '91926';
	const SUBSCRIPTION_PAYMENT_METHOD_NONCE_UNVAULTED_CARD_IS_NOT_ACCEPTED                 = '91927';
	const SUBSCRIPTION_PAYMENT_METHOD_TOKEN_CARD_TYPE_IS_NOT_ACCEPTED                      = '91902';
	const SUBSCRIPTION_PAYMENT_METHOD_TOKEN_IS_INVALID                                     = '91903';
	const SUBSCRIPTION_PAYMENT_METHOD_TOKEN_NOT_ASSOCIATED_WITH_CUSTOMER                   = '91905';
	const SUBSCRIPTION_PLAN_BILLING_FREQUENCY_CANNOT_BE_UPDATED                            = '91922';
	const SUBSCRIPTION_PLAN_ID_IS_INVALID                                                  = '91904';
	const SUBSCRIPTION_PRICE_CANNOT_BE_BLANK                                               = '81903';
	const SUBSCRIPTION_PRICE_FORMAT_IS_INVALID                                             = '81904';
	const SUBSCRIPTION_PRICE_IS_TOO_LARGE                                                  = '81923';
	const SUBSCRIPTION_STATUS_IS_CANCELED                                                  = '81905';
	const SUBSCRIPTION_TOKEN_FORMAT_IS_INVALID                                             = '81906';
	const SUBSCRIPTION_TRIAL_DURATION_FORMAT_IS_INVALID                                    = '81907';
	const SUBSCRIPTION_TRIAL_DURATION_IS_REQUIRED                                          = '81908';
	const SUBSCRIPTION_TRIAL_DURATION_UNIT_IS_INVALID                                      = '81909';
	const SUBSCRIPTION_MERCHANT_ACCOUNT_DOES_NOT_SUPPORT_INSTRUMENT_TYPE                   = '91930';
	const SUBSCRIPTION_PAYMENT_METHOD_NONCE_INSTRUMENT_TYPE_DOES_NOT_SUPPORT_SUBSCRIPTIONS = '91929';
	const SUBSCRIPTION_PAYMENT_METHOD_TOKEN_INSTRUMENT_TYPE_DOES_NOT_SUPPORT_SUBSCRIPTIONS = '91928';

    const SUBSCRIPTION_MODIFICATION_AMOUNT_CANNOT_BE_BLANK                             = '92003';
    const SUBSCRIPTION_MODIFICATION_AMOUNT_IS_INVALID                                  = '92002';
    const SUBSCRIPTION_MODIFICATION_AMOUNT_IS_TOO_LARGE                                = '92023';
    const SUBSCRIPTION_MODIFICATION_CANNOT_EDIT_MODIFICATIONS_ON_PAST_DUE_SUBSCRIPTION = '92022';
    const SUBSCRIPTION_MODIFICATION_CANNOT_UPDATE_AND_REMOVE                           = '92015';
    const SUBSCRIPTION_MODIFICATION_EXISTING_ID_IS_INCORRECT_KIND                      = '92020';
    const SUBSCRIPTION_MODIFICATION_EXISTING_ID_IS_INVALID                             = '92011';
    const SUBSCRIPTION_MODIFICATION_EXISTING_ID_IS_REQUIRED                            = '92012';
    const SUBSCRIPTION_MODIFICATION_ID_TO_REMOVE_IS_INCORRECT_KIND                     = '92021';
    const SUBSCRIPTION_MODIFICATION_ID_TO_REMOVE_IS_INVALID                            = '92025';
    const SUBSCRIPTION_MODIFICATION_ID_TO_REMOVE_IS_NOT_PRESENT                        = '92016';
    const SUBSCRIPTION_MODIFICATION_INCONSISTENT_NUMBER_OF_BILLING_CYCLES              = '92018';
    const SUBSCRIPTION_MODIFICATION_INHERITED_FROM_ID_IS_INVALID                       = '92013';
    const SUBSCRIPTION_MODIFICATION_INHERITED_FROM_ID_IS_REQUIRED                      = '92014';
    const SUBSCRIPTION_MODIFICATION_MISSING                                            = '92024';
    const SUBSCRIPTION_MODIFICATION_NUMBER_OF_BILLING_CYCLES_CANNOT_BE_BLANK           = '92017';
    const SUBSCRIPTION_MODIFICATION_NUMBER_OF_BILLING_CYCLES_IS_INVALID                = '92005';
    const SUBSCRIPTION_MODIFICATION_NUMBER_OF_BILLING_CYCLES_MUST_BE_GREATER_THAN_ZERO = '92019';
    const SUBSCRIPTION_MODIFICATION_QUANTITY_CANNOT_BE_BLANK                           = '92004';
    const SUBSCRIPTION_MODIFICATION_QUANTITY_IS_INVALID                                = '92001';
    const SUBSCRIPTION_MODIFICATION_QUANTITY_MUST_BE_GREATER_THAN_ZERO                 = '92010';

    const TRANSACTION_AMOUNT_CANNOT_BE_NEGATIVE                                       = '81501';
    const TRANSACTION_AMOUNT_DOES_NOT_MATCH3_D_SECURE_AMOUNT                          = '91585';
    const TRANSACTION_AMOUNT_FORMAT_IS_INVALID                                        = '81503';
    const TRANSACTION_AMOUNT_IS_INVALID                                               = '81503';
    const TRANSACTION_AMOUNT_IS_REQUIRED                                              = '81502';
    const TRANSACTION_AMOUNT_IS_TOO_LARGE                                             = '81528';
    const TRANSACTION_AMOUNT_MUST_BE_GREATER_THAN_ZERO                                = '81531';
    const TRANSACTION_BILLING_ADDRESS_CONFLICT                                        = '91530';
    const TRANSACTION_CANNOT_BE_VOIDED                                                = '91504';
    const TRANSACTION_CANNOT_CANCEL_RELEASE                                           = '91562';
    const TRANSACTION_CANNOT_CLONE_CREDIT                                             = '91543';
    const TRANSACTION_CANNOT_CLONE_TRANSACTION_WITH_PAYPAL_ACCOUNT                    = '91573';
    const TRANSACTION_CANNOT_CLONE_TRANSACTION_WITH_VAULT_CREDIT_CARD                 = '91540';
    const TRANSACTION_CANNOT_CLONE_UNSUCCESSFUL_TRANSACTION                           = '91542';
    const TRANSACTION_CANNOT_CLONE_VOICE_AUTHORIZATIONS                               = '91541';
    const TRANSACTION_CANNOT_HOLD_IN_ESCROW                                           = '91560';
    const TRANSACTION_CANNOT_PARTIALLY_REFUND_ESCROWED_TRANSACTION                    = '91563';
    const TRANSACTION_CANNOT_REFUND_CREDIT                                            = '91505';
    const TRANSACTION_CANNOT_REFUND_SETTLING_TRANSACTION                              = '91574';
    const TRANSACTION_CANNOT_REFUND_UNLESS_SETTLED                                    = '91506';
    const TRANSACTION_CANNOT_REFUND_WITH_PENDING_MERCHANT_ACCOUNT                     = '91559';
    const TRANSACTION_CANNOT_REFUND_WITH_SUSPENDED_MERCHANT_ACCOUNT                   = '91538';
    const TRANSACTION_CANNOT_RELEASE_FROM_ESCROW                                      = '91561';
    const TRANSACTION_CANNOT_SIMULATE_SETTLEMENT                                      = '91575';
    const TRANSACTION_CANNOT_SUBMIT_FOR_SETTLEMENT                                    = '91507';
    const TRANSACTION_CHANNEL_IS_TOO_LONG                                             = '91550';
    const TRANSACTION_CREDIT_CARD_IS_REQUIRED                                         = '91508';
    const TRANSACTION_CUSTOMER_DEFAULT_PAYMENT_METHOD_CARD_TYPE_IS_NOT_ACCEPTED       = '81509';
    const TRANSACTION_CUSTOMER_DOES_NOT_HAVE_CREDIT_CARD                              = '91511';
    const TRANSACTION_CUSTOMER_ID_IS_INVALID                                          = '91510';
    const TRANSACTION_CUSTOM_FIELD_IS_INVALID                                         = '91526';
    const TRANSACTION_CUSTOM_FIELD_IS_TOO_LONG                                        = '81527';
    const TRANSACTION_HAS_ALREADY_BEEN_REFUNDED                                       = '91512';
    const TRANSACTION_MERCHANT_ACCOUNT_DOES_NOT_MATCH3_D_SECURE_MERCHANT_ACCOUNT      = '91584';
    const TRANSACTION_MERCHANT_ACCOUNT_DOES_NOT_SUPPORT_MOTO                          = '91558';
    const TRANSACTION_MERCHANT_ACCOUNT_DOES_NOT_SUPPORT_REFUNDS                       = '91547';
    const TRANSACTION_MERCHANT_ACCOUNT_ID_IS_INVALID                                  = '91513';
    const TRANSACTION_MERCHANT_ACCOUNT_IS_SUSPENDED                                   = '91514';
    const TRANSACTION_MERCHANT_ACCOUNT_NAME_IS_INVALID                                = '91513'; //Deprecated
    const TRANSACTION_OPTIONS_PAY_PAL_CUSTOM_FIELD_TOO_LONG                           = '91580';
    const TRANSACTION_OPTIONS_SUBMIT_FOR_SETTLEMENT_IS_REQUIRED_FOR_CLONING           = '91544';
    const TRANSACTION_OPTIONS_SUBMIT_FOR_SETTLEMENT_IS_REQUIRED_FOR_PAYPAL_UNILATERAL = '91582';
    const TRANSACTION_OPTIONS_USE_BILLING_FOR_SHIPPING_DISABLED                       = '91572';
    const TRANSACTION_OPTIONS_VAULT_IS_DISABLED                                       = '91525';
    const TRANSACTION_ORDER_ID_IS_TOO_LONG                                            = '91501';
    const TRANSACTION_PAYMENT_INSTRUMENT_NOT_SUPPORTED_BY_MERCHANT_ACCOUNT            = '91577';
    const TRANSACTION_PAYMENT_METHOD_CONFLICT                                         = '91515';
    const TRANSACTION_PAYMENT_METHOD_CONFLICT_WITH_VENMO_SDK                          = '91549';
    const TRANSACTION_PAYMENT_METHOD_DOES_NOT_BELONG_TO_CUSTOMER                      = '91516';
    const TRANSACTION_PAYMENT_METHOD_DOES_NOT_BELONG_TO_SUBSCRIPTION                  = '91527';
    const TRANSACTION_PAYMENT_METHOD_NONCE_CARD_TYPE_IS_NOT_ACCEPTED                  = '91567';
    const TRANSACTION_PAYMENT_METHOD_NONCE_CONSUMED                                   = '91564';
    const TRANSACTION_PAYMENT_METHOD_NONCE_HAS_NO_VALID_PAYMENT_INSTRUMENT_TYPE       = '91569';
    const TRANSACTION_PAYMENT_METHOD_NONCE_LOCKED                                     = '91566';
    const TRANSACTION_PAYMENT_METHOD_NONCE_UNKNOWN                                    = '91565';
    const TRANSACTION_PAYMENT_METHOD_TOKEN_CARD_TYPE_IS_NOT_ACCEPTED                  = '91517';
    const TRANSACTION_PAYMENT_METHOD_TOKEN_IS_INVALID                                 = '91518';
    const TRANSACTION_PAYPAL_NOT_ENABLED                                              = '91576';
    const TRANSACTION_PAY_PAL_AUTH_EXPIRED                                            = '91579';
    const TRANSACTION_PAY_PAL_VAULT_RECORD_MISSING_DATA                               = '91583';
    const TRANSACTION_PROCESSOR_AUTHORIZATION_CODE_CANNOT_BE_SET                      = '91519';
    const TRANSACTION_PROCESSOR_AUTHORIZATION_CODE_IS_INVALID                         = '81520';
    const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_CREDITS                              = '91546';
    const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_VOICE_AUTHORIZATIONS                 = '91545';
    const TRANSACTION_PURCHASE_ORDER_NUMBER_IS_INVALID                                = '91548';
    const TRANSACTION_PURCHASE_ORDER_NUMBER_IS_TOO_LONG                               = '91537';
    const TRANSACTION_REFUND_AMOUNT_IS_TOO_LARGE                                      = '91521';
    const TRANSACTION_SERVICE_FEE_AMOUNT_CANNOT_BE_NEGATIVE                           = '91554';
    const TRANSACTION_SERVICE_FEE_AMOUNT_FORMAT_IS_INVALID                            = '91555';
    const TRANSACTION_SERVICE_FEE_AMOUNT_IS_TOO_LARGE                                 = '91556';
    const TRANSACTION_SERVICE_FEE_AMOUNT_NOT_ALLOWED_ON_MASTER_MERCHANT_ACCOUNT       = '91557';
    const TRANSACTION_SERVICE_FEE_IS_NOT_ALLOWED_ON_CREDITS                           = '91552';
    const TRANSACTION_SERVICE_FEE_NOT_ACCEPTED_FOR_PAYPAL                             = '91578';
    const TRANSACTION_SETTLEMENT_AMOUNT_IS_LESS_THAN_SERVICE_FEE_AMOUNT               = '91551';
    const TRANSACTION_SETTLEMENT_AMOUNT_IS_TOO_LARGE                                  = '91522';
    const TRANSACTION_SHIPPING_ADDRESS_DOESNT_MATCH_CUSTOMER                          = '91581';
    const TRANSACTION_SUBSCRIPTION_DOES_NOT_BELONG_TO_CUSTOMER                        = '91529';
    const TRANSACTION_SUBSCRIPTION_ID_IS_INVALID                                      = '91528';
    const TRANSACTION_SUBSCRIPTION_STATUS_MUST_BE_PAST_DUE                            = '91531';
    const TRANSACTION_SUB_MERCHANT_ACCOUNT_REQUIRES_SERVICE_FEE_AMOUNT                = '91553';
    const TRANSACTION_TAX_AMOUNT_CANNOT_BE_NEGATIVE                                   = '81534';
    const TRANSACTION_TAX_AMOUNT_FORMAT_IS_INVALID                                    = '81535';
    const TRANSACTION_TAX_AMOUNT_IS_TOO_LARGE                                         = '81536';

    const TRANSACTION_THREE_D_SECURE_AUTHENTICATION_FAILED                      = '81571';
    const TRANSACTION_THREE_D_SECURE_TOKEN_IS_INVALID                           = '91568';
    const TRANSACTION_THREE_D_SECURE_TRANSACTION_DATA_DOESNT_MATCH_VERIFY       = '91570';
    const TRANSACTION_TYPE_IS_INVALID                                           = '91523';
    const TRANSACTION_TYPE_IS_REQUIRED                                          = '91524';
    const TRANSACTION_UNSUPPORTED_VOICE_AUTHORIZATION                           = '91539';
}
