<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Client URI domain control verification state.
 */
readonly class OAuthClientsListClientUriVerification
{
	public function __construct(
		/** Current verification status for the client URI host. */
		public ?\FoundryCo\Cloudflare\Enums\OAuthClientsListClientUriVerificationStatus $status = null,
		/** Exact TXT record value that must be added to DNS to prove ownership of the client URI host. */
		public ?string $text = null,
	) {
	}
}
