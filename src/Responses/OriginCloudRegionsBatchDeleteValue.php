<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OriginCloudRegionsBatchDeleteValue
{
	public function __construct(
		/** Items that could not be applied, with error details. */
		public ?array $failed = null,
		/** Items that were successfully applied. */
		public ?array $succeeded = null,
	) {
	}
}
