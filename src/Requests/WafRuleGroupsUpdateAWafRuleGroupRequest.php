<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a WAF rule group
 */
readonly class WafRuleGroupsUpdateAWafRuleGroupRequest
{
	public function __construct(
		/** Defines the state of the rules contained in the rule group. When `on`, the rules in the group are configurable/usable. */
		public ?\FoundryCo\Cloudflare\Enums\WafRuleGroupsUpdateAWafRuleGroupRequestMode $mode = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'mode' => $this->mode?->value,
		], fn ($v) => $v !== null);
	}
}
