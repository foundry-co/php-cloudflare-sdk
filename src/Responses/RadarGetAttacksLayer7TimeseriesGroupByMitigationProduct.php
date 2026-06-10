<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAttacksLayer7TimeseriesGroupByMitigationProduct
{
	public function __construct(
		/** Metadata for the results. */
		public ?RadarGetAttacksLayer7TimeseriesGroupByMitigationProductMeta $meta = null,
		public ?RadarGetAttacksLayer7TimeseriesGroupByMitigationProductSerie0 $serie0 = null,
	) {
	}
}
