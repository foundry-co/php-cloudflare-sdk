<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarDNSAsesTop0Item
{
	public function __construct(
		public int $clientASN,
		public string $clientASName,
		/** A numeric string. */
		public string $value,
	) {
	}
}
