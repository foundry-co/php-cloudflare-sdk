<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Defines a custom set of username/password expressions to match Leaked Credential Checks on.
 */
readonly class WafProductApiLeakedCredentialsListDetections
{
	public function __construct(
		/** Defines the unique ID for this custom detection. */
		public mixed $id = null,
		/** Defines ehe ruleset expression to use in matching the password in a request. */
		public ?string $password = null,
		/** Defines the ruleset expression to use in matching the username in a request. */
		public ?string $username = null,
	) {
	}
}
