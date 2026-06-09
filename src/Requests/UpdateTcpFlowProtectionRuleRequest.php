<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update TCP Flow Protection rule.
 */
readonly class UpdateTcpFlowProtectionRuleRequest
{
	public function __construct(
		/** The new burst sensitivity. Optional. Must be one of 'low', 'medium', 'high'. */
		public ?string $burstSensitivity = null,
		/** The new mode for TCP Flow Protection. Optional. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public ?string $mode = null,
		/** The new rate sensitivity. Optional. Must be one of 'low', 'medium', 'high'. */
		public ?string $rateSensitivity = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'burst_sensitivity' => $this->burstSensitivity,
		    'mode' => $this->mode,
		    'rate_sensitivity' => $this->rateSensitivity,
		], fn ($v) => $v !== null);
	}
}
