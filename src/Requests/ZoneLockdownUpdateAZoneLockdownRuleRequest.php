<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Zone Lockdown rule
 */
readonly class ZoneLockdownUpdateAZoneLockdownRuleRequest
{
	public function __construct(
		/** A list of IP addresses or CIDR ranges that will be allowed to access the URLs specified in the Zone Lockdown rule. You can include any number of `ip` or `ip_range` configurations. */
		public array $configurations,
		/** The URLs to include in the current WAF override. You can use wildcards. Each entered URL will be escaped before use, which means you can only use simple wildcard patterns. */
		public array $urls,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'configurations' => $this->configurations,
		    'urls' => $this->urls,
		], fn ($v) => $v !== null);
	}
}
