<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Actions pattern.
 */
readonly class EmailRoutingRoutingRulesGetRoutingRuleActionsItem
{
	public function __construct(
		/** Type of supported action. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesGetRoutingRuleActionsItemType $type = null,
		public ?array $value = null,
	) {
	}
}
