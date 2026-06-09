<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringDevicesGatewayIpv4Location
{
	public function __construct(
		public ?string $city = null,
		public ?string $countryIso = null,
		public ?string $stateIso = null,
		public ?string $zip = null,
	) {
	}
}
