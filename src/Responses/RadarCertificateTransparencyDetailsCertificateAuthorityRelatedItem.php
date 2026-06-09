<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarCertificateTransparencyDetailsCertificateAuthorityRelatedItem
{
	public function __construct(
		/** Specifies the type of certificate in the trust chain. */
		public \FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyDetailsCertificateAuthorityRelatedItemCertificateRecordType $certificateRecordType,
		/** The full name of the certificate authority (CA). */
		public string $name,
		/** The current revocation status of a Certificate Authority (CA) certificate. */
		public \FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyDetailsCertificateAuthorityRelatedItemRevocationStatus $revocationStatus,
		/** The SHA-256 fingerprint of the intermediate certificate. */
		public string $sha256Fingerprint,
	) {
	}
}
