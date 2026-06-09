<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Updates snapshot expiration configuration (all fields optional).
 */
readonly class UpdateTableMaintenanceConfigRequestSnapshotExpiration
{
	public function __construct(
		/** Updates the maximum age for snapshots optionally. */
		public ?string $maxSnapshotAge = null,
		/** Updates the minimum number of snapshots to retain optionally. */
		public ?int $minSnapshotsToKeep = null,
		/** Updates the state optionally. */
		public mixed $state = null,
	) {
	}
}
