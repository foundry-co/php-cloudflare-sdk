<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete Vectors By Identifier (Deprecated)
 */
readonly class VectorizeDeprecatedDeleteVectorsByIdRequest
{
	public function __construct(
		/** A list of vector identifiers to delete from the index indicated by the path. */
		public ?array $ids = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ids' => $this->ids,
		], fn ($v) => $v !== null);
	}
}
