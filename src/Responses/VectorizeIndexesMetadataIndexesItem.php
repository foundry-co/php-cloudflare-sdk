<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeIndexesMetadataIndexesItem
{
	public function __construct(
		/** Specifies the type of indexed metadata property. */
		public ?\FoundryCo\Cloudflare\Enums\VectorizeIndexesMetadataIndexesItemIndexType $indexType = null,
		/** Specifies the indexed metadata property. */
		public ?string $propertyName = null,
	) {
	}
}
