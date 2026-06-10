<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexFleetStatusDevicesGatewayIpv6Location
{
	public function __construct(
		public ?string $city = null,
		public ?string $countryIso = null,
		public ?string $stateIso = null,
		public ?string $zip = null,
	) {
	}
}
