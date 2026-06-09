<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringPathHopsItem
{
	public function __construct(
		public int $ttl,
		public ?int $asn = null,
		public ?string $aso = null,
		public ?string $ipAddress = null,
		public ?DEXSyntheticApplicationMonitoringPathHopsItemLocation $location = null,
		public ?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringPathHopsItemMile $mile = null,
		public ?string $name = null,
		public ?float $packetLossPct = null,
		public ?int $rttMs = null,
	) {
	}
}
