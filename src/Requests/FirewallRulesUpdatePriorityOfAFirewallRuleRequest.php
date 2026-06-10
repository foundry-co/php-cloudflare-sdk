<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update priority of a firewall rule
 */
readonly class FirewallRulesUpdatePriorityOfAFirewallRuleRequest
{
	public function __construct(
		/** The unique identifier of the resource. */
		public string $id,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		], fn ($v) => $v !== null);
	}
}
