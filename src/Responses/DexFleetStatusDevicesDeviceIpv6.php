<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexFleetStatusDevicesDeviceIpv6
{
	public function __construct(
		public ?string $address = null,
		public ?int $asn = null,
		public ?string $aso = null,
		public ?DexFleetStatusDevicesDeviceIpv6Location $location = null,
		public ?string $netmask = null,
		public ?string $version = null,
	) {
	}
}
