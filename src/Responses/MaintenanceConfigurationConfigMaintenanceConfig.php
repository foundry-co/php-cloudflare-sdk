<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures maintenance for the catalog.
 */
readonly class MaintenanceConfigurationConfigMaintenanceConfig
{
	public function __construct(
		/** Configures compaction for catalog maintenance. */
		public ?MaintenanceConfigurationConfigMaintenanceConfigCompaction $compaction = null,
		/** Configures snapshot expiration settings. */
		public ?MaintenanceConfigurationConfigMaintenanceConfigSnapshotExpiration $snapshotExpiration = null,
	) {
	}
}
