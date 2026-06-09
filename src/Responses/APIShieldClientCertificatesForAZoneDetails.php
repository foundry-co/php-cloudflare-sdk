<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class APIShieldClientCertificatesForAZoneDetails
{
	public function __construct(
		/** The Client Certificate PEM. */
		public ?string $certificate = null,
		/** Certificate Authority used to issue the Client Certificate. */
		public ?APIShieldClientCertificatesForAZoneDetailsCertificateAuthority $certificateAuthority = null,
		/** Common Name of the Client Certificate. */
		public ?string $commonName = null,
		/** Country, provided by the CSR. */
		public ?string $country = null,
		/** The Certificate Signing Request (CSR). Must be newline-encoded. */
		public ?string $csr = null,
		/** Date that the Client Certificate expires. */
		public ?string $expiresOn = null,
		/** Unique identifier of the Client Certificate. */
		public ?string $fingerprintSha256 = null,
		/** Identifier. */
		public ?string $id = null,
		/** Date that the Client Certificate was issued by the Certificate Authority. */
		public ?string $issuedOn = null,
		/** Location, provided by the CSR. */
		public ?string $location = null,
		/** Organization, provided by the CSR. */
		public ?string $organization = null,
		/** Organizational Unit, provided by the CSR. */
		public ?string $organizationalUnit = null,
		/** The serial number on the created Client Certificate. */
		public ?string $serialNumber = null,
		/** The type of hash used for the Client Certificate.. */
		public ?string $signature = null,
		/** Subject Key Identifier. */
		public ?string $ski = null,
		/** State, provided by the CSR. */
		public ?string $state = null,
		/** Client Certificates may be active or revoked, and the pending_reactivation or pending_revocation represent in-progress asynchronous transitions. */
		public ?\FoundryCo\Cloudflare\Enums\APIShieldClientCertificatesForAZoneDetailsStatus $status = null,
		/** The number of days the Client Certificate will be valid after the issued_on date. */
		public ?int $validityDays = null,
	) {
	}
}
