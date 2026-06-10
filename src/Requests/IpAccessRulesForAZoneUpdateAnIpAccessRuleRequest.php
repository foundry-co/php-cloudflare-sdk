<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an IP Access rule
 */
readonly class IpAccessRulesForAZoneUpdateAnIpAccessRuleRequest
{
	public function __construct(
		/** The action to apply to a matched request. */
		public ?\FoundryCo\Cloudflare\Enums\IpAccessRulesForAZoneUpdateAnIpAccessRuleRequestMode $mode = null,
		/** An informative summary of the rule, typically used as a reminder or explanation. */
		public ?string $notes = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'mode' => $this->mode?->value,
		    'notes' => $this->notes,
		], fn ($v) => $v !== null);
	}
}
