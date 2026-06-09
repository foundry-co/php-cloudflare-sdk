<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures compaction for catalog maintenance.
 */
readonly class R2CatalogManagementDetailsMaintenanceConfigCompaction
{
	public function __construct(
		public array $state,
		public array $targetSizeMb,
	) {
	}
}
