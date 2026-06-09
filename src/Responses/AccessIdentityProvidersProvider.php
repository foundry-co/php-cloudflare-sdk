<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A SAML encryption certificate set containing current and optionally previous certificates for encryption key rotation.
 */
readonly class AccessIdentityProvidersProvider
{
	public function __construct(
		/** Timestamp when the certificate set was created */
		public \DateTimeImmutable $createdAt,
		/** Unique identifier for the certificate set */
		public string $uid,
		/** Timestamp when the certificate set was last updated (e.g., during rotation) */
		public \DateTimeImmutable $updatedAt,
		/** The currently active certificate used for encrypting SAML assertions */
		public ?AccessIdentityProvidersProviderCurrentCertificate $currentCertificate = null,
		/** The previous certificate, maintained during rotation to ensure continuity. Null if no rotation has occurred. Mirrors the structure of `saml_certificate`. */
		public ?array $previousCertificate = null,
	) {
	}
}
