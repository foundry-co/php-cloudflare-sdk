<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestResultNetworkPathHopsItem
{
	public function __construct(
		public ?int $ttl = null,
		public ?int $asn = null,
		public ?string $aso = null,
		public ?string $ipAddress = null,
		public ?DexEndpointsTracerouteTestResultNetworkPathHopsItemLocation $location = null,
		public ?\FoundryCo\Cloudflare\Enums\DexEndpointsTracerouteTestResultNetworkPathHopsItemMile $mile = null,
		public ?string $name = null,
		public ?float $packetLossPct = null,
		public ?int $rttMs = null,
	) {
	}
}
