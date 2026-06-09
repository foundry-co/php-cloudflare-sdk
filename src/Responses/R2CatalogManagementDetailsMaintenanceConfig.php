<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class R2CatalogManagementDetailsMaintenanceConfig
{
	public function __construct(
		/** Configures compaction for catalog maintenance. */
		public ?R2CatalogManagementDetailsMaintenanceConfigCompaction $compaction = null,
		/** Configures snapshot expiration settings. */
		public ?R2CatalogManagementDetailsMaintenanceConfigSnapshotExpiration $snapshotExpiration = null,
	) {
	}
}
