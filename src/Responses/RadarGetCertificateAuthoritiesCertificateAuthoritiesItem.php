<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetCertificateAuthoritiesCertificateAuthoritiesItem
{
	public function __construct(
		/** Specifies the type of certificate in the trust chain. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateAuthoritiesCertificateAuthoritiesItemCertificateRecordType $certificateRecordType = null,
		/** The two-letter ISO country code where the CA organization is based. */
		public ?string $country = null,
		/** The full country name corresponding to the country code. */
		public ?string $countryName = null,
		/** The full name of the certificate authority (CA). */
		public ?string $name = null,
		/** The organization that owns and operates the CA. */
		public ?string $owner = null,
		/** The name of the parent/root certificate authority that issued this intermediate certificate. */
		public ?string $parentName = null,
		/** The SHA-256 fingerprint of the parent certificate. */
		public ?string $parentSha256Fingerprint = null,
		/** The current revocation status of a Certificate Authority (CA) certificate. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateAuthoritiesCertificateAuthoritiesItemRevocationStatus $revocationStatus = null,
		/** The SHA-256 fingerprint of the intermediate certificate. */
		public ?string $sha256Fingerprint = null,
	) {
	}
}
