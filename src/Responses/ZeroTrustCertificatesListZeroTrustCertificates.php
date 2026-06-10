<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustCertificatesListZeroTrustCertificates
{
	public function __construct(
		/** Indicate the read-only deployment status of the certificate on Cloudflare's edge. Gateway TLS interception can use certificates in the 'available' (previously called 'active') state. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustCertificatesListZeroTrustCertificatesBindingStatus $bindingStatus = null,
		/** Provide the CA certificate (read-only). */
		public ?string $certificate = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?\DateTimeImmutable $expiresOn = null,
		/** Provide the SHA256 fingerprint of the certificate (read-only). */
		public ?string $fingerprint = null,
		/** Identify the certificate with a UUID. */
		public ?string $id = null,
		/** Indicate whether Gateway TLS interception uses this certificate (read-only). You cannot set this value directly. To configure interception, use the Gateway configuration setting named `certificate` (read-only). */
		public ?bool $inUse = null,
		/** Indicate the organization that issued the certificate (read-only). */
		public ?string $issuerOrg = null,
		/** Provide the entire issuer field of the certificate (read-only). */
		public ?string $issuerRaw = null,
		/** Indicate the read-only certificate type, BYO-PKI (custom) or Gateway-managed. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustCertificatesListZeroTrustCertificatesType $type = null,
		public ?\DateTimeImmutable $updatedAt = null,
		public ?\DateTimeImmutable $uploadedOn = null,
	) {
	}
}
