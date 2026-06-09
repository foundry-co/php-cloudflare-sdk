<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessSAMLEncryptionCertificatesSetsCurrentCertificate
{
	public function __construct(
		/** Indicates whether the certificate can be used for IdP configuration. */
		public bool $isCurrent,
		/** Certificate expiration date */
		public \DateTimeImmutable $notAfter,
		/** The public certificate in PEM format */
		public string $publicCertificate,
		/** Unique identifier for the certificate */
		public string $uid,
	) {
	}
}
