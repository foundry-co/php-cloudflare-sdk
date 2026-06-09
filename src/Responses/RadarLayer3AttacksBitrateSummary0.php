<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarLayer3AttacksBitrateSummary0
{
	public function __construct(
		/** A numeric string. */
		public string $oVER100GBPS,
		/** A numeric string. */
		public string $uNDER500MBPS,
		/** A numeric string. */
		public string $t10GBPSTO100GBPS,
		/** A numeric string. */
		public string $t1GBPSTO10GBPS,
		/** A numeric string. */
		public string $t500MBPSTO1GBPS,
	) {
	}
}
