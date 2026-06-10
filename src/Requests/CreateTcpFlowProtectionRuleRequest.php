<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create TCP Flow Protection rule.
 */
readonly class CreateTcpFlowProtectionRuleRequest
{
	public function __construct(
		/** The burst sensitivity. Must be one of 'low', 'medium', 'high'. */
		public string $burstSensitivity,
		/** The mode for the TCP Flow Protection. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public string $mode,
		/** The name of the TCP Flow Protection rule. Value is relative to the 'scope' setting. For 'global' scope, name should be 'global'. For either the 'region' or 'datacenter' scope, name should be the actual name of the region or datacenter, e.g., 'wnam' or 'lax'. */
		public string $name,
		/** The rate sensitivity. Must be one of 'low', 'medium', 'high'. */
		public string $rateSensitivity,
		/** The scope for the TCP Flow Protection rule. */
		public string $scope,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'burst_sensitivity' => $this->burstSensitivity,
		    'mode' => $this->mode,
		    'name' => $this->name,
		    'rate_sensitivity' => $this->rateSensitivity,
		    'scope' => $this->scope,
		], fn ($v) => $v !== null);
	}
}
