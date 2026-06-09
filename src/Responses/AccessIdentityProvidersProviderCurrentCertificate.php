<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessIdentityProvidersProviderCurrentCertificate
{
	public function __construct(
		/** Indicates whether this is the currently active certificate */
		public bool $isCurrent,
		/** Certificate expiration date. Certificates are automatically rotated 30 days before expiration. */
		public \DateTimeImmutable $notAfter,
		/**
		 * PEM-encoded X.509 certificate containing the public key.
		 * Configure this certificate in your external SAML Identity Provider to enable encryption.
		 */
		public string $publicCertificate,
		/** Unique identifier for the certificate */
		public string $uid,
	) {
	}
}
