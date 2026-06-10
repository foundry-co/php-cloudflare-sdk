<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A SAML encryption certificate set containing current and optionally previous certificates for encryption key rotation.
 */
readonly class AccessIdentityProvidersCreateSamlCertificateForIdentityProvider
{
	public function __construct(
		/** Timestamp when the certificate set was created */
		public ?\DateTimeImmutable $createdAt = null,
		/** Unique identifier for the certificate set */
		public ?string $uid = null,
		/** Timestamp when the certificate set was last updated (e.g., during rotation) */
		public ?\DateTimeImmutable $updatedAt = null,
		/** The currently active certificate used for encrypting SAML assertions */
		public ?AccessIdentityProvidersCreateSamlCertificateForIdentityProviderCurrentCertificate $currentCertificate = null,
		/** The previous certificate, maintained during rotation to ensure continuity. Null if no rotation has occurred. Mirrors the structure of `saml_certificate`. */
		public ?array $previousCertificate = null,
	) {
	}
}
