<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SSLVerificationDetails
{
	public function __construct(
		/** Current status of certificate. */
		public \FoundryCo\Cloudflare\Enums\SSLVerificationDetailsCertificateStatus $certificateStatus,
		/** Certificate Authority is manually reviewing the order. */
		public ?bool $brandCheck = null,
		/** Certificate Pack UUID. */
		public ?string $certPackUuid = null,
		/** Certificate's signature algorithm. */
		public ?\FoundryCo\Cloudflare\Enums\SSLVerificationDetailsSignature $signature = null,
		/** Validation method in use for a certificate pack order. */
		public ?\FoundryCo\Cloudflare\Enums\SSLVerificationDetailsValidationMethod $validationMethod = null,
		/** Certificate's required verification information. */
		public ?SSLVerificationDetailsVerificationInfo $verificationInfo = null,
		/** Status of the required verification information, omitted if verification status is unknown. */
		public ?bool $verificationStatus = null,
		/** Method of verification. */
		public ?\FoundryCo\Cloudflare\Enums\SSLVerificationDetailsVerificationType $verificationType = null,
	) {
	}
}
