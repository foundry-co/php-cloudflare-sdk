<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A certificate pack with all its properties.
 */
readonly class CertificatePacksListCertificatePacks
{
	public function __construct(
		/** Array of certificates in this pack. */
		public ?array $certificates = null,
		/** Comma separated list of valid host names for the certificate packs. Must contain the zone apex, may not contain more than 50 hosts, and may not be empty. */
		public ?array $hosts = null,
		/** Identifier. */
		public ?string $id = null,
		/** Status of certificate pack. */
		public ?\FoundryCo\Cloudflare\Enums\CertificatePacksListCertificatePacksStatus $status = null,
		/** Type of certificate pack. */
		public ?\FoundryCo\Cloudflare\Enums\CertificatePacksListCertificatePacksType $type = null,
		/** Certificate Authority selected for the order.  For information on any certificate authority specific details or restrictions [see this page for more details](https://developers.cloudflare.com/ssl/reference/certificate-authorities). */
		public ?\FoundryCo\Cloudflare\Enums\CertificatePacksListCertificatePacksCertificateAuthority $certificateAuthority = null,
		/** Whether or not to add Cloudflare Branding for the order.  This will add a subdomain of sni.cloudflaressl.com as the Common Name if set to true. */
		public ?bool $cloudflareBranding = null,
		/** DCV Delegation records for domain validation. */
		public ?array $dcvDelegationRecords = null,
		/** Identifier of the primary certificate in a pack. */
		public ?string $primaryCertificate = null,
		/** Domain validation errors that have been received by the certificate authority (CA). */
		public ?array $validationErrors = null,
		/** Validation Method selected for the order. */
		public ?\FoundryCo\Cloudflare\Enums\CertificatePacksListCertificatePacksValidationMethod $validationMethod = null,
		/** Certificates' validation records. */
		public ?array $validationRecords = null,
		/** Validity Days selected for the order. */
		public ?\FoundryCo\Cloudflare\Enums\CertificatePacksListCertificatePacksValidityDays $validityDays = null,
	) {
	}
}
