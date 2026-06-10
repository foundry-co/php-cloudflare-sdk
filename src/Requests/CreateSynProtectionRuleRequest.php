<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create SYN Protection rule.
 */
readonly class CreateSynProtectionRuleRequest
{
	public function __construct(
		/** The burst sensitivity. Must be one of 'low', 'medium', 'high'. */
		public string $burstSensitivity,
		/** The mode for SYN Protection. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public string $mode,
		/** The name of the SYN Protection rule. Value is relative to the 'scope' setting. For 'global' scope, name should be 'global'. For either the 'region' or 'datacenter' scope, name should be the actual name of the region or datacenter, e.g., 'wnam' or 'lax'. */
		public string $name,
		/** The rate sensitivity. Must be one of 'low', 'medium', 'high'. */
		public string $rateSensitivity,
		/** The scope for the SYN Protection rule. Must be one of 'global', 'region', or 'datacenter'. */
		public string $scope,
		/** The type of mitigation. Must be one of 'challenge' or 'retransmit'. Optional. Defaults to 'challenge'. */
		public ?string $mitigationType = null,
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
		    'mitigation_type' => $this->mitigationType,
		], fn ($v) => $v !== null);
	}
}
