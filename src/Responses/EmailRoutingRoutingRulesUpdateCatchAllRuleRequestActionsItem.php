<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
		public \FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesUpdateCatchAllRuleRequestActionsItemType $type,
		public ?array $value = null,
	) {
	}
}
