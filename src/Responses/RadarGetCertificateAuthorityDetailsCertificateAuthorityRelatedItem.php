<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetCertificateAuthorityDetailsCertificateAuthorityRelatedItem
{
	public function __construct(
		/** Specifies the type of certificate in the trust chain. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateAuthorityDetailsCertificateAuthorityRelatedItemCertificateRecordType $certificateRecordType = null,
		/** The full name of the certificate authority (CA). */
		public ?string $name = null,
		/** The current revocation status of a Certificate Authority (CA) certificate. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateAuthorityDetailsCertificateAuthorityRelatedItemRevocationStatus $revocationStatus = null,
		/** The SHA-256 fingerprint of the intermediate certificate. */
		public ?string $sha256Fingerprint = null,
	) {
	}
}
