<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PermissionGroupsListPermissionGroups
{
	public function __construct(
		/** Public ID. */
		public ?string $id = null,
		/** Permission Group Name */
		public ?string $name = null,
		/** Resources to which the Permission Group is scoped */
		public ?array $scopes = null,
	) {
	}
}
