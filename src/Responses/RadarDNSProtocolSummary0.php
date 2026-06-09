<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarDNSProtocolSummary0
{
	public function __construct(
		/** A numeric string. */
		public string $hTTPS,
		/** A numeric string. */
		public string $tCP,
		/** A numeric string. */
		public string $tLS,
		/** A numeric string. */
		public string $uDP,
	) {
	}
}
