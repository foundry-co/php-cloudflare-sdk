<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create firewall rules
 */
readonly class FirewallRulesCreateFirewallRulesRequest
{
	public function __construct(
		/** The action to perform when the threshold of matched traffic within the configured period is exceeded. */
		public mixed $action,
		public \FoundryCo\Cloudflare\Responses\FirewallRulesCreateFirewallRulesRequestFilter $filter,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action,
		    'filter' => $this->filter->toArray(),
		], fn ($v) => $v !== null);
	}
}
