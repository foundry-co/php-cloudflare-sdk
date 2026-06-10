<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The IPv4/IPv6 address that identifies where to reach a target
 */
readonly class InfraTargetsGetIp
{
	public function __construct(
		/** The target's IPv4 address */
		public ?InfraTargetsGetIpIpv4 $ipv4 = null,
		/** The target's IPv6 address */
		public ?InfraTargetsGetIpIpv6 $ipv6 = null,
	) {
	}
}
