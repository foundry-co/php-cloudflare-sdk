<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenantRuleSettingsDnsResolversIpv4Item
{
	public function __construct(
		/** Specify the IPv4 address of the upstream resolver. */
		public ?string $ip = null,
		/** Specify a port number to use for the upstream resolver. Defaults to 53 if unspecified. */
		public ?int $port = null,
		/** Indicate whether to connect to this resolver over a private network. Must set when vnet_id set. */
		public ?bool $routeThroughPrivateNetwork = null,
		/** Specify an optional virtual network for this resolver. Uses default virtual network id if omitted. */
		public ?string $vnetId = null,
	) {
	}
}
