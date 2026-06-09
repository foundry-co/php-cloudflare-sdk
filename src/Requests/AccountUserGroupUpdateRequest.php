<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update User Group
 */
readonly class AccountUserGroupUpdateRequest
{
	public function __construct(
		/** Name of the User group. */
		public ?string $name = null,
		/** Policies attached to the User group */
		public ?array $policies = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'policies' => $this->policies,
		], fn ($v) => $v !== null);
	}
}
