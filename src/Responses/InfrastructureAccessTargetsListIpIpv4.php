<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The target's IPv4 address
 */
readonly class InfrastructureAccessTargetsListIpIpv4
{
	public function __construct(
		/** IP address of the target */
		public ?string $ipAddr = null,
		/** (optional) Private virtual network identifier for the target. If omitted, the default virtual network ID will be used. */
		public ?string $virtualNetworkId = null,
	) {
	}
}
