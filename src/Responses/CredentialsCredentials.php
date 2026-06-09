<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A credential attached to API requests during scanning. The
 * credential `value` is write-only and never returned in responses.
 */
readonly class CredentialsCredentials
{
	public function __construct(
		/** Parent credential set identifier. */
		public string $credentialSetId,
		/** Credential identifier. */
		public string $id,
		/** Where the credential is attached in outgoing requests. */
		public \FoundryCo\Cloudflare\Enums\CredentialsCredentialsLocation $location,
		/**
		 * Name of the header or cookie where the credential is attached.
		 */
		public string $locationName,
		/** Human-readable name. */
		public string $name,
	) {
	}
}
