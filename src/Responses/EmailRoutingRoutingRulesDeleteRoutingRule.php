<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailRoutingRoutingRulesDeleteRoutingRule
{
	public function __construct(
		/** List actions patterns. */
		public ?array $actions = null,
		/** Routing rule status. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesDeleteRoutingRuleEnabled $enabled = null,
		/** Routing rule identifier. */
		public ?string $id = null,
		/** Matching patterns to forward to your actions. */
		public ?array $matchers = null,
		/** Routing rule name. */
		public ?string $name = null,
		/** Priority of the routing rule. */
		public ?float $priority = null,
		/** Routing rule tag. (Deprecated, replaced by routing rule identifier) */
		public ?string $tag = null,
	) {
	}
}
