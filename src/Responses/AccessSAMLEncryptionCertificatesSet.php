<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessSAMLEncryptionCertificatesSet
{
	public function __construct(
		/** When the certificate set was created */
		public \DateTimeImmutable $createdAt,
		/** Unique identifier for the certificate set */
		public string $uid,
		/** When the certificate set was last updated */
		public \DateTimeImmutable $updatedAt,
		/** The current active certificate */
		public ?AccessSAMLEncryptionCertificatesSetCurrentCertificate $currentCertificate = null,
		/** The previous certificate (maintained during rotation period). May be null when no rotation has occurred. Mirrors the structure of `saml_certificate`. */
		public ?array $previousCertificate = null,
	) {
	}
}
