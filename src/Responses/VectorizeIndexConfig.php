<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeIndexConfig
{
	public function __construct(
		/** Specifies the number of dimensions for the index */
		public int $dimensions,
		/** Specifies the type of metric to use calculating distance. */
		public \FoundryCo\Cloudflare\Enums\VectorizeIndexConfigMetric $metric,
	) {
	}
}
