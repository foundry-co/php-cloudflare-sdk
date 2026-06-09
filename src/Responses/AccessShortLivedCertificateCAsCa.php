<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessShortLivedCertificateCAsCa
{
	public function __construct(
		/** The Application Audience (AUD) tag. Identifies the application associated with the CA. */
		public ?string $aud = null,
		/** The ID of the CA. */
		public ?string $id = null,
		/** The public key to add to your SSH server configuration. */
		public ?string $publicKey = null,
	) {
	}
}
