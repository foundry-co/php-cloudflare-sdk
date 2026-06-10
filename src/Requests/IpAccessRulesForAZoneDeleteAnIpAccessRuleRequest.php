<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete an IP Access rule
 */
readonly class IpAccessRulesForAZoneDeleteAnIpAccessRuleRequest
{
	public function __construct(
		/** The level to attempt to delete similar rules defined for other zones with the same owner. The default value is `none`, which will only delete the current rule. Using `basic` will delete rules that match the same action (mode) and configuration, while using `aggressive` will delete rules that match the same configuration. */
		public ?\FoundryCo\Cloudflare\Enums\IpAccessRulesForAZoneDeleteAnIpAccessRuleRequestCascade $cascade = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cascade' => $this->cascade?->value,
		], fn ($v) => $v !== null);
	}
}
