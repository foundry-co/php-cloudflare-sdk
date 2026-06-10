<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a permission for dataset
 */
readonly class PutPermissionUpdateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\PutPermissionUpdateRequestRole $role,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'role' => $this->role->value,
		], fn ($v) => $v !== null);
	}
}
