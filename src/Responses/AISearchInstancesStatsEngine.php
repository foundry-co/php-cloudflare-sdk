<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Engine-specific metadata. Present only for managed (v3) instances.
 */
readonly class AISearchInstancesStatsEngine
{
	public function __construct(
		/** R2 bucket storage usage in bytes. */
		public ?AISearchInstancesStatsEngineR2 $r2 = null,
		/** Vectorize index metadata (dimensions, vector count). */
		public ?AISearchInstancesStatsEngineVectorize $vectorize = null,
	) {
	}
}
