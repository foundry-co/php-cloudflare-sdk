<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create DNS Protection rule.
 */
readonly class CreateDnsProtectionRuleRequest
{
	public function __construct(
		/** The burst sensitivity. Must be one of 'low', 'medium', 'high'. */
		public string $burstSensitivity,
		/** The mode for DNS Protection. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public string $mode,
		/** The name of the DNS Protection rule. Value is relative to the 'scope' setting. For 'global' scope, name should be 'global'. For either the 'region' or 'datacenter' scope, name should be the actual name of the region or datacenter, e.g., 'wnam' or 'lax'. */
		public string $name,
		/** The profile sensitivity. Recommended setting is 'low'. Must be one of 'low', 'medium', 'high', or 'very_high'. */
		public string $profileSensitivity,
		/** The rate sensitivity. Must be one of 'low', 'medium', 'high'. */
		public string $rateSensitivity,
		/** The scope for the DNS Protection rule. Must be one of 'global', 'region', or 'datacenter'. */
		public string $scope,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'burst_sensitivity' => $this->burstSensitivity,
		    'mode' => $this->mode,
		    'name' => $this->name,
		    'profile_sensitivity' => $this->profileSensitivity,
		    'rate_sensitivity' => $this->rateSensitivity,
		    'scope' => $this->scope,
		], fn ($v) => $v !== null);
	}
}
