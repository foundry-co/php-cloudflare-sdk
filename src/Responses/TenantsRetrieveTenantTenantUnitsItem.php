<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TenantsRetrieveTenantTenantUnitsItem
{
	public function __construct(
		public ?array $unitMemberships = null,
		public ?array $unitMetadata = null,
		public ?string $unitName = null,
		public ?string $unitStatus = null,
		public ?string $unitTag = null,
	) {
	}
}
