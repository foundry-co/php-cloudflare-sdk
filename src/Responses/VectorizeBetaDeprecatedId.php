<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeBetaDeprecatedId
{
	public function __construct(
		/** The count of the vectors successfully deleted. */
		public ?int $count = null,
		/** Array of vector identifiers of the vectors that were successfully processed for deletion. */
		public ?array $ids = null,
	) {
	}
}
