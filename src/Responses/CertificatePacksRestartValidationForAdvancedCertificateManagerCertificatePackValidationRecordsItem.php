<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Certificate's required validation record.
 */
readonly class CertificatePacksRestartValidationForAdvancedCertificateManagerCertificatePackValidationRecordsItem
{
	public function __construct(
		/** The CNAME record hostname for DCV delegation. */
		public ?string $cname = null,
		/** The CNAME record target value for DCV delegation. */
		public ?string $cnameTarget = null,
		/** The set of email addresses that the certificate authority (CA) will use to complete domain validation. */
		public ?array $emails = null,
		/** The content that the certificate authority (CA) will expect to find at the http_url during the domain validation. */
		public ?string $httpBody = null,
		/** The url that will be checked during domain validation. */
		public ?string $httpUrl = null,
		/** Status of the validation record. */
		public ?string $status = null,
		/** The hostname that the certificate authority (CA) will check for a TXT record during domain validation . */
		public ?string $txtName = null,
		/** The TXT record that the certificate authority (CA) will check during domain validation. */
		public ?string $txtValue = null,
	) {
	}
}
