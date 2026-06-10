<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpTopAsesTop0Item
{
	public function __construct(
		public ?string $aSName = null,
		public ?int $asn = null,
		/** Percentage of updates by this AS out of the total updates by all autonomous systems. */
		public ?string $value = null,
	) {
	}
}
