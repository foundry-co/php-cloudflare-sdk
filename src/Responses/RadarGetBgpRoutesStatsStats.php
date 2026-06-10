<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRoutesStatsStats
{
	public function __construct(
		public ?int $distinctOrigins = null,
		public ?int $distinctOriginsIpv4 = null,
		public ?int $distinctOriginsIpv6 = null,
		public ?int $distinctPrefixes = null,
		public ?int $distinctPrefixesIpv4 = null,
		public ?int $distinctPrefixesIpv6 = null,
		public ?int $routesInvalid = null,
		public ?int $routesInvalidIpv4 = null,
		public ?int $routesInvalidIpv6 = null,
		public ?int $routesTotal = null,
		public ?int $routesTotalIpv4 = null,
		public ?int $routesTotalIpv6 = null,
		public ?int $routesUnknown = null,
		public ?int $routesUnknownIpv4 = null,
		public ?int $routesUnknownIpv6 = null,
		public ?int $routesValid = null,
		public ?int $routesValidIpv4 = null,
		public ?int $routesValidIpv6 = null,
	) {
	}
}
