<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetEmailRoutingSummaryByDmarc
{
	public function __construct(
		/** Metadata for the results. */
		public ?RadarGetEmailRoutingSummaryByDmarcMeta $meta = null,
		public ?RadarGetEmailRoutingSummaryByDmarcSummary0 $summary0 = null,
	) {
	}
}
