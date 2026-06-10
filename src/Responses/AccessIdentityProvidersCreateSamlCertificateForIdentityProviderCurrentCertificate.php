<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessIdentityProvidersCreateSamlCertificateForIdentityProviderCurrentCertificate
{
	public function __construct(
		/** Indicates whether this is the currently active certificate */
		public ?bool $isCurrent = null,
		/** Certificate expiration date. Certificates are automatically rotated 30 days before expiration. */
		public ?\DateTimeImmutable $notAfter = null,
		/**
		 * PEM-encoded X.509 certificate containing the public key.
		 * Configure this certificate in your external SAML Identity Provider to enable encryption.
		 */
		public ?string $publicCertificate = null,
		/** Unique identifier for the certificate */
		public ?string $uid = null,
	) {
	}
}
