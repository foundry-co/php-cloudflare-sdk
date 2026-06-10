<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAttacksLayer3SummaryByProtocol
{
	public function __construct(
		/** Metadata for the results. */
		public ?RadarGetAttacksLayer3SummaryByProtocolMeta $meta = null,
		public ?RadarGetAttacksLayer3SummaryByProtocolSummary0 $summary0 = null,
	) {
	}
}
