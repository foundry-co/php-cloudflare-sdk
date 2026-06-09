<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a Zone Lockdown rule
 */
readonly class ZoneLockdownCreateAZoneLockdownRuleRequest
{
	public function __construct(
		/** A list of IP addresses or CIDR ranges that will be allowed to access the URLs specified in the Zone Lockdown rule. You can include any number of `ip` or `ip_range` configurations. */
		public array $configurations,
		/** The URLs to include in the current WAF override. You can use wildcards. Each entered URL will be escaped before use, which means you can only use simple wildcard patterns. */
		public array $urls,
		/** An informative summary of the rule. This value is sanitized and any tags will be removed. */
		public ?string $description = null,
		/** When true, indicates that the rule is currently paused. */
		public ?bool $paused = null,
		/** The priority of the rule to control the processing order. A lower number indicates higher priority. If not provided, any rules with a configured priority will be processed before rules without a priority. */
		public ?float $priority = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'configurations' => $this->configurations,
		    'urls' => $this->urls,
		    'description' => $this->description,
		    'paused' => $this->paused,
		    'priority' => $this->priority,
		], fn ($v) => $v !== null);
	}
}
