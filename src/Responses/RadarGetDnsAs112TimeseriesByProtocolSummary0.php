<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetDnsAs112TimeseriesByProtocolSummary0
{
	public function __construct(
		/** A numeric string. */
		public ?string $hTTPS = null,
		/** A numeric string. */
		public ?string $tCP = null,
		/** A numeric string. */
		public ?string $tLS = null,
		/** A numeric string. */
		public ?string $uDP = null,
	) {
	}
}
