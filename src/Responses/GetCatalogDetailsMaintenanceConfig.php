<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetCatalogDetailsMaintenanceConfig
{
	public function __construct(
		/** Configures compaction for catalog maintenance. */
		public ?GetCatalogDetailsMaintenanceConfigCompaction $compaction = null,
		/** Configures snapshot expiration settings. */
		public ?GetCatalogDetailsMaintenanceConfigSnapshotExpiration $snapshotExpiration = null,
	) {
	}
}
