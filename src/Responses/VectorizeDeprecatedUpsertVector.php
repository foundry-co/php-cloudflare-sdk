<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeDeprecatedUpsertVector
{
	public function __construct(
		/** Specifies the count of the vectors successfully inserted. */
		public ?int $count = null,
		/** Array of vector identifiers of the vectors successfully inserted. */
		public ?array $ids = null,
	) {
	}
}
