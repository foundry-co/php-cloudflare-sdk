<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Revoke all Access tokens for a user
 */
readonly class ZoneLevelZeroTrustOrganizationRevokeAllAccessTokensForAUserRequest
{
	public function __construct(
		/** The email of the user to revoke. */
		public string $email,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'email' => $this->email,
		], fn ($v) => $v !== null);
	}
}
