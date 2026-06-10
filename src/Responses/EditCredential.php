<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A credential attached to API requests during scanning. The
 * credential `value` is write-only and never returned in responses.
 */
readonly class EditCredential
{
	public function __construct(
		/** Parent credential set identifier. */
		public ?string $credentialSetId = null,
		/** Credential identifier. */
		public ?string $id = null,
		/** Where the credential is attached in outgoing requests. */
		public ?\FoundryCo\Cloudflare\Enums\EditCredentialLocation $location = null,
		/**
		 * Name of the header or cookie where the credential is attached.
		 */
		public ?string $locationName = null,
		/** Human-readable name. */
		public ?string $name = null,
	) {
	}
}
