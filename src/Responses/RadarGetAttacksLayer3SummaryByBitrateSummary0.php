<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAttacksLayer3SummaryByBitrateSummary0
{
	public function __construct(
		/** A numeric string. */
		public ?string $oVER100GBPS = null,
		/** A numeric string. */
		public ?string $uNDER500MBPS = null,
		/** A numeric string. */
		public ?string $t10GBPSTO100GBPS = null,
		/** A numeric string. */
		public ?string $t1GBPSTO10GBPS = null,
		/** A numeric string. */
		public ?string $t500MBPSTO1GBPS = null,
	) {
	}
}
