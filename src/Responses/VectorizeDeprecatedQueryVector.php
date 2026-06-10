<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeDeprecatedQueryVector
{
	public function __construct(
		/** Specifies the count of vectors returned by the search */
		public ?int $count = null,
		/** Array of vectors matched by the search */
		public ?array $matches = null,
	) {
	}
}
