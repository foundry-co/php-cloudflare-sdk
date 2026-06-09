<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPStatsStats
{
	public function __construct(
		public int $distinctOrigins,
		public int $distinctOriginsIpv4,
		public int $distinctOriginsIpv6,
		public int $distinctPrefixes,
		public int $distinctPrefixesIpv4,
		public int $distinctPrefixesIpv6,
		public int $routesInvalid,
		public int $routesInvalidIpv4,
		public int $routesInvalidIpv6,
		public int $routesTotal,
		public int $routesTotalIpv4,
		public int $routesTotalIpv6,
		public int $routesUnknown,
		public int $routesUnknownIpv4,
		public int $routesUnknownIpv6,
		public int $routesValid,
		public int $routesValidIpv4,
		public int $routesValidIpv6,
	) {
	}
}
