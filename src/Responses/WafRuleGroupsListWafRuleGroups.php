<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WafRuleGroupsListWafRuleGroups
{
	public function __construct(
		/** Defines an informative summary of what the rule group does. */
		public ?string $description = null,
		/** Defines the unique identifier of the rule group. */
		public ?string $id = null,
		/** Defines the number of rules within the group that have been modified from their default configuration. */
		public ?float $modifiedRulesCount = null,
		/** Defines the name of the rule group. */
		public ?string $name = null,
		/** Defines the unique identifier of a WAF package. */
		public ?string $packageId = null,
		/** Defines the number of rules in the current rule group. */
		public ?float $rulesCount = null,
		/** Defines the available states for the rule group. */
		public ?array $allowedModes = null,
		/** Defines the state of the rules contained in the rule group. When `on`, the rules in the group are configurable/usable. */
		public ?\FoundryCo\Cloudflare\Enums\WafRuleGroupsListWafRuleGroupsMode $mode = null,
	) {
	}
}
