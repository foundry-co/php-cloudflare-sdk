<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures maintenance for the catalog.
 */
readonly class GetMaintenanceConfigMaintenanceConfig
{
	public function __construct(
		/** Configures compaction for catalog maintenance. */
		public ?GetMaintenanceConfigMaintenanceConfigCompaction $compaction = null,
		/** Configures snapshot expiration settings. */
		public ?GetMaintenanceConfigMaintenanceConfigSnapshotExpiration $snapshotExpiration = null,
	) {
	}
}
