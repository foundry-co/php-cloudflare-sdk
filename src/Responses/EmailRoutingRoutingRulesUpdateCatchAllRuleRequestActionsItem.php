<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Action for the catch-all routing rule.
 */
readonly class EmailRoutingRoutingRulesUpdateCatchAllRuleRequestActionsItem
{
	public function __construct(
		/** Type of action for catch-all rule. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesUpdateCatchAllRuleRequestActionsItemType $type = null,
		public ?array $value = null,
	) {
	}
}
