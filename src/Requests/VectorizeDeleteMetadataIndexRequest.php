<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete Metadata Index
 */
readonly class VectorizeDeleteMetadataIndexRequest
{
	public function __construct(
		/** Specifies the metadata property for which the index must be deleted. */
		public string $propertyName,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'propertyName' => $this->propertyName,
		], fn ($v) => $v !== null);
	}
}
