<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete a firewall rule
 */
readonly class FirewallRulesDeleteAFirewallRuleRequest
{
	public function __construct(
		/** When true, indicates that Cloudflare should also delete the associated filter if there are no other firewall rules referencing the filter. */
		public ?bool $deleteFilterIfUnused = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'delete_filter_if_unused' => $this->deleteFilterIfUnused,
		], fn ($v) => $v !== null);
	}
}
