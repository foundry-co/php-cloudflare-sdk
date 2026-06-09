<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustOrganizationOrganizationCustomPages
{
	public function __construct(
		/** The uid of the custom page to use when a user is denied access after failing a non-identity rule. */
		public ?string $forbidden = null,
		/** The uid of the custom page to use when a user is denied access. */
		public ?string $identityDenied = null,
	) {
	}
}
