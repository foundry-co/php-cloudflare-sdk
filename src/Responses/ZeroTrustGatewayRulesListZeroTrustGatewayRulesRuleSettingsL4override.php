<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Send matching traffic to the supplied destination IP address and port. Settable only for `l4` rules with the action set to `l4_override`.
 */
readonly class ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsL4override
{
	public function __construct(
		/** Defines the IPv4 or IPv6 address. */
		public ?string $ip = null,
		/** Defines a port number to use for TCP/UDP overrides. */
		public ?int $port = null,
	) {
	}
}
