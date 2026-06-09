<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update DNS Firewall Cluster Reverse DNS
 */
readonly class DnsFirewallUpdateDnsFirewallClusterReverseDnsRequest
{
	public function __construct(
		/** Map of cluster IP addresses to PTR record contents */
		public ?array $ptr = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ptr' => $this->ptr,
		], fn ($v) => $v !== null);
	}
}
