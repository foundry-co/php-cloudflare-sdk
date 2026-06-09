<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures maintenance for the table.
 */
readonly class TableMaintenanceConfigurationConfigMaintenanceConfig
{
	public function __construct(
		/** Configures compaction settings for table optimization. */
		public ?TableMaintenanceConfigurationConfigMaintenanceConfigCompaction $compaction = null,
		/** Configures snapshot expiration settings. */
		public ?TableMaintenanceConfigurationConfigMaintenanceConfigSnapshotExpiration $snapshotExpiration = null,
	) {
	}
}
