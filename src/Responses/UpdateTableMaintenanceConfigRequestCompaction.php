<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Updates compaction configuration (all fields optional).
 */
readonly class UpdateTableMaintenanceConfigRequestCompaction
{
	public function __construct(
		/** Updates the state optionally. */
		public mixed $state = null,
		/** Updates the target file size optionally. */
		public mixed $targetSizeMb = null,
	) {
	}
}
