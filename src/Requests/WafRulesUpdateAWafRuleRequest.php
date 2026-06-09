<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a WAF rule
 */
readonly class WafRulesUpdateAWafRuleRequest
{
	public function __construct(
		/** Defines the mode/action of the rule when triggered. You must use a value from the `allowed_modes` array of the current rule. */
		public ?\FoundryCo\Cloudflare\Enums\WafRulesUpdateAWafRuleRequestMode $mode = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'mode' => $this->mode?->value,
		], fn ($v) => $v !== null);
	}
}
