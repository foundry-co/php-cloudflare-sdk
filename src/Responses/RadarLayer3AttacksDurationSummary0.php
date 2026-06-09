<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarLayer3AttacksDurationSummary0
{
	public function __construct(
		/** A numeric string. */
		public string $oVER3HOURS,
		/** A numeric string. */
		public string $uNDER10MINS,
		/** A numeric string. */
		public string $t10MINSTO20MINS,
		/** A numeric string. */
		public string $t1HOURTO3HOURS,
		/** A numeric string. */
		public string $t20MINSTO40MINS,
		/** A numeric string. */
		public string $t40MINSTO1HOUR,
	) {
	}
}
