<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetEntitiesIpIp
{
	public function __construct(
		public ?string $asn = null,
		public ?string $asnLocation = null,
		public ?string $asnName = null,
		public ?string $asnOrgName = null,
		public ?string $ip = null,
		public ?string $ipVersion = null,
		public ?string $location = null,
		public ?string $locationName = null,
	) {
	}
}
