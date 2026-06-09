<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityDetectionsSenderInfo
{
	public function __construct(
		/** The name of the autonomous system. */
		public ?string $asName = null,
		/** The number of the autonomous system. */
		public ?int $asNumber = null,
		public ?string $geo = null,
		public ?string $ip = null,
		public ?string $pld = null,
	) {
	}
}
