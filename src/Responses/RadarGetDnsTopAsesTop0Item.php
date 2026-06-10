<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetDnsTopAsesTop0Item
{
	public function __construct(
		public ?int $clientASN = null,
		public ?string $clientASName = null,
		/** A numeric string. */
		public ?string $value = null,
	) {
	}
}
