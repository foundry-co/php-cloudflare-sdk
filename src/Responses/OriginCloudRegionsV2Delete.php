<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response result for a delete operation. Identifies the deleted mapping.
 */
readonly class OriginCloudRegionsV2Delete
{
	public function __construct(
		/** The origin IP address whose mapping was deleted. */
		public ?string $originIp = null,
	) {
	}
}
