<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetHttpTimeseriesGroupByBrowserFamilies
{
	public function __construct(
		/** Metadata for the results. */
		public ?RadarGetHttpTimeseriesGroupByBrowserFamiliesMeta $meta = null,
		public ?RadarGetHttpTimeseriesGroupByBrowserFamiliesSerie0 $serie0 = null,
	) {
	}
}
