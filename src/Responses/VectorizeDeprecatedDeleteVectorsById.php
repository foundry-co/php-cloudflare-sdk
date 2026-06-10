<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeDeprecatedDeleteVectorsById
{
	public function __construct(
		/** The count of the vectors successfully deleted. */
		public ?int $count = null,
		/** Array of vector identifiers of the vectors that were successfully processed for deletion. */
		public ?array $ids = null,
	) {
	}
}
