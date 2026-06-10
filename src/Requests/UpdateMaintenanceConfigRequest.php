<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update catalog maintenance configuration
 */
readonly class UpdateMaintenanceConfigRequest
{
	public function __construct(
		/** Updates compaction configuration (all fields optional). */
		public ?\FoundryCo\Cloudflare\Responses\UpdateMaintenanceConfigRequestCompaction $compaction = null,
		/** Updates snapshot expiration configuration (all fields optional). */
		public ?\FoundryCo\Cloudflare\Responses\UpdateMaintenanceConfigRequestSnapshotExpiration $snapshotExpiration = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'compaction' => $this->compaction?->toArray(),
		    'snapshot_expiration' => $this->snapshotExpiration?->toArray(),
		], fn ($v) => $v !== null);
	}
}
