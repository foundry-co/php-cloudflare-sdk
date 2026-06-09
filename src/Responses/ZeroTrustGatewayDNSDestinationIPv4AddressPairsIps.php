<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayDNSDestinationIPv4AddressPairsIps
{
	public function __construct(
		public string $backupIp,
		public string $id,
		/** Specify whether the pair shared across multiple accounts (shared) or available exclusively to this account. Non-shared pairs can contain Cloudflare-owned IPs (dedicated) or customer-provided IPs (byoip). */
		public \FoundryCo\Cloudflare\Enums\ZeroTrustGatewayDNSDestinationIPv4AddressPairsIpsPairType $pairType,
		public string $primaryIp,
	) {
	}
}
