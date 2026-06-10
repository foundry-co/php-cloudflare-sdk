<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create ACL
 */
readonly class SecondaryDnsAclCreateAclRequest
{
	public function __construct(
		/** Allowed IPv4/IPv6 address range of primary or secondary nameservers. This will be applied for the entire account. The IP range is used to allow additional NOTIFY IPs for secondary zones and IPs Cloudflare allows AXFR/IXFR requests from for primary zones. CIDRs are limited to a maximum of /24 for IPv4 and /64 for IPv6 respectively. */
		public string $ipRange,
		/** The name of the acl. */
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ip_range' => $this->ipRange,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
