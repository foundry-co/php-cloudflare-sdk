<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Engine-specific metadata. Present only for managed (v3) instances.
 */
readonly class AiSearchStatsEngine
{
	public function __construct(
		/** R2 bucket storage usage in bytes. */
		public ?AiSearchStatsEngineR2 $r2 = null,
		/** Vectorize index metadata (dimensions, vector count). */
		public ?AiSearchStatsEngineVectorize $vectorize = null,
	) {
	}
}
