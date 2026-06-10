<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserListUserTenantsMetaFlags
{
	public function __construct(
		public ?string $accountCreation = null,
		public ?string $accountDeletion = null,
		public ?string $accountMigration = null,
		public ?string $accountMobility = null,
		public ?string $subOrgCreation = null,
	) {
	}
}
