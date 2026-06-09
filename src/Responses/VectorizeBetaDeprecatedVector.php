<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeBetaDeprecatedVector
{
	public function __construct(
		/** Specifies the count of the vectors successfully inserted. */
		public ?int $count = null,
		/** Array of vector identifiers of the vectors successfully inserted. */
		public ?array $ids = null,
	) {
	}
}
