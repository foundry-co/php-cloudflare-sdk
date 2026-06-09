<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a firewall rule
 */
readonly class FirewallRulesUpdateAFirewallRuleRequest
{
	public function __construct(
		/** The action to perform when the threshold of matched traffic within the configured period is exceeded. */
		public mixed $action,
		public \FoundryCo\Cloudflare\Responses\FirewallRulesUpdateAFirewallRuleRequestFilter $filter,
		/** The unique identifier of the resource. */
		public string $id,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action,
		    'filter' => $this->filter->toArray(),
		    'id' => $this->id,
		], fn ($v) => $v !== null);
	}
}
