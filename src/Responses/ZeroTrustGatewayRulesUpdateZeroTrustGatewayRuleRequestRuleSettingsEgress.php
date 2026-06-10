<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure how Gateway Proxy traffic egresses. You can enable this setting for rules with Egress actions and filters, or omit it to indicate local egress via WARP IPs. Settable only for `egress` rules.
 */
readonly class ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsEgress
{
	public function __construct(
		/** Specify the IPv4 address to use for egress. */
		public ?string $ipv4 = null,
		/** Specify the fallback IPv4 address to use for egress when the primary IPv4 fails. Set '0.0.0.0' to indicate local egress via WARP IPs. */
		public ?string $ipv4Fallback = null,
		/** Specify the IPv6 range to use for egress. */
		public ?string $ipv6 = null,
	) {
	}
}
