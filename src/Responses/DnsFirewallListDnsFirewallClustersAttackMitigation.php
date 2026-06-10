<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Attack mitigation settings
 */
readonly class DnsFirewallListDnsFirewallClustersAttackMitigation
{
	public function __construct(
		/** When enabled, automatically mitigate random-prefix attacks to protect upstream DNS servers */
		public ?bool $enabled = null,
		/** Only mitigate attacks when upstream servers seem unhealthy */
		public ?bool $onlyWhenUpstreamUnhealthy = null,
	) {
	}
}
