<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeDeprecatedUpdateVectorizeIndexConfig
{
	public function __construct(
		/** Specifies the number of dimensions for the index */
		public ?int $dimensions = null,
		/** Specifies the type of metric to use calculating distance. */
		public ?\FoundryCo\Cloudflare\Enums\VectorizeDeprecatedUpdateVectorizeIndexConfigMetric $metric = null,
	) {
	}
}
