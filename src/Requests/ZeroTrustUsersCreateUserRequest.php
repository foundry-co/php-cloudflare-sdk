<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a user
 */
readonly class ZeroTrustUsersCreateUserRequest
{
	public function __construct(
		/** The email of the user. */
		public string $email,
		/** The name of the user. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'email' => $this->email,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
