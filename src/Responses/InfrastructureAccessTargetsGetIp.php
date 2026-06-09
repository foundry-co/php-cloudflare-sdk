<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The IPv4/IPv6 address that identifies where to reach a target
 */
readonly class InfrastructureAccessTargetsGetIp
{
	public function __construct(
		/** The target's IPv4 address */
		public ?InfrastructureAccessTargetsGetIpIpv4 $ipv4 = null,
		/** The target's IPv6 address */
		public ?InfrastructureAccessTargetsGetIpIpv6 $ipv6 = null,
	) {
	}
}
