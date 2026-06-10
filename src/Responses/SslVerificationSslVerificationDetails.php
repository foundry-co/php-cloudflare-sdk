<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SslVerificationSslVerificationDetails
{
	public function __construct(
		/** Current status of certificate. */
		public ?\FoundryCo\Cloudflare\Enums\SslVerificationSslVerificationDetailsCertificateStatus $certificateStatus = null,
		/** Certificate Authority is manually reviewing the order. */
		public ?bool $brandCheck = null,
		/** Certificate Pack UUID. */
		public ?string $certPackUuid = null,
		/** Certificate's signature algorithm. */
		public ?\FoundryCo\Cloudflare\Enums\SslVerificationSslVerificationDetailsSignature $signature = null,
		/** Validation method in use for a certificate pack order. */
		public ?\FoundryCo\Cloudflare\Enums\SslVerificationSslVerificationDetailsValidationMethod $validationMethod = null,
		/** Certificate's required verification information. */
		public ?SslVerificationSslVerificationDetailsVerificationInfo $verificationInfo = null,
		/** Status of the required verification information, omitted if verification status is unknown. */
		public ?bool $verificationStatus = null,
		/** Method of verification. */
		public ?\FoundryCo\Cloudflare\Enums\SslVerificationSslVerificationDetailsVerificationType $verificationType = null,
	) {
	}
}
