<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures compaction for catalog maintenance.
 */
readonly class GetMaintenanceConfigMaintenanceConfigCompaction
{
	public function __construct(
		/** Specifies the state of maintenance operations. */
		public ?\FoundryCo\Cloudflare\Enums\GetMaintenanceConfigMaintenanceConfigCompactionState $state = null,
		/** Sets the target file size for compaction in megabytes. Defaults to "128". */
		public ?\FoundryCo\Cloudflare\Enums\GetMaintenanceConfigMaintenanceConfigCompactionTargetSizeMb $targetSizeMb = null,
	) {
	}
}
