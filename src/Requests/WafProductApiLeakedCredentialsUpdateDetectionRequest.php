<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Leaked Credential Checks Custom Detection
 */
readonly class WafProductApiLeakedCredentialsUpdateDetectionRequest
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


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		    'password' => $this->password,
		    'username' => $this->username,
		], fn ($v) => $v !== null);
	}
}
