<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update DNS Protection rule.
 */
readonly class UpdateDnsProtectionRuleRequest
{
	public function __construct(
		/** The new burst sensitivity. Optional. Must be one of 'low', 'medium', 'high'. */
		public ?string $burstSensitivity = null,
		/** The new mode for DNS Protection. Optional. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public ?string $mode = null,
		/** The new profile sensitivity. Optional. Recommended setting is 'low'. Must be one of 'low', 'medium', 'high', or 'very_high'. */
		public ?string $profileSensitivity = null,
		/** The new rate sensitivity. Optional. Must be one of 'low', 'medium', 'high'. */
		public ?string $rateSensitivity = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'burst_sensitivity' => $this->burstSensitivity,
		    'mode' => $this->mode,
		    'profile_sensitivity' => $this->profileSensitivity,
		    'rate_sensitivity' => $this->rateSensitivity,
		], fn ($v) => $v !== null);
	}
}
