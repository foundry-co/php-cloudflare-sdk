<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAttacksLayer3TimeseriesGroupByBitrateSerie0
{
	public function __construct(
		public ?array $oVER100GBPS = null,
		public ?array $uNDER500MBPS = null,
		public ?array $t10GBPSTO100GBPS = null,
		public ?array $t1GBPSTO10GBPS = null,
		public ?array $t500MBPSTO1GBPS = null,
		public ?array $timestamps = null,
	) {
	}
}
