<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Metadata Index
 */
readonly class VectorizeCreateMetadataIndexRequest
{
	public function __construct(
		/** Specifies the type of metadata property to index. */
		public \FoundryCo\Cloudflare\Enums\VectorizeCreateMetadataIndexRequestIndexType $indexType,
		/** Specifies the metadata property to index. */
		public string $propertyName,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'indexType' => $this->indexType->value,
		    'propertyName' => $this->propertyName,
		], fn ($v) => $v !== null);
	}
}
