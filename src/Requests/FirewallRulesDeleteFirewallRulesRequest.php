<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete firewall rules
 */
readonly class FirewallRulesDeleteFirewallRulesRequest
{
	public function __construct(
		/** The unique identifier of the firewall rule. */
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
