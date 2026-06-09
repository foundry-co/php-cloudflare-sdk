<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarIPIpIp
{
	public function __construct(
		public string $asn,
		public string $asnLocation,
		public string $asnName,
		public string $asnOrgName,
		public string $ip,
		public string $ipVersion,
		public string $location,
		public string $locationName,
	) {
	}
}
