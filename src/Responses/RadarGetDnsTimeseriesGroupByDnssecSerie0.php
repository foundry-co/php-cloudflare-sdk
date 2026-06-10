<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetDnsTimeseriesGroupByDnssecSerie0
{
	public function __construct(
		public ?array $iNSECURE = null,
		public ?array $iNVALID = null,
		public ?array $oTHER = null,
		public ?array $sECURE = null,
	) {
	}
}
