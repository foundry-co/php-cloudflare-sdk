<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures snapshot expiration settings.
 */
readonly class R2CatalogManagementDetailsMaintenanceConfigSnapshotExpiration
{
	public function __construct(
		/**
		 * Specifies the maximum age for snapshots. The system deletes snapshots older than this age.
		 * Format: <number><unit> where unit is d (days), h (hours), m (minutes), or s (seconds).
		 * Examples: "7d" (7 days), "48h" (48 hours), "2880m" (2,880 minutes).
		 * Defaults to "7d".
		 */
		public string $maxSnapshotAge,
		/** Specifies the minimum number of snapshots to retain. Defaults to 100. */
		public int $minSnapshotsToKeep,
		public array $state,
	) {
	}
}
