<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create routing rule
 */
readonly class EmailRoutingRoutingRulesCreateRoutingRuleRequest
{
	public function __construct(
		/** List actions patterns. */
		public array $actions,
		/** Matching patterns to forward to your actions. */
		public array $matchers,
		/** Routing rule status. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesCreateRoutingRuleRequestEnabled $enabled = null,
		/** Routing rule name. */
		public ?string $name = null,
		/** Priority of the routing rule. */
		public ?float $priority = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'actions' => $this->actions,
		    'matchers' => $this->matchers,
		    'enabled' => $this->enabled?->value,
		    'name' => $this->name,
		    'priority' => $this->priority,
		], fn ($v) => $v !== null);
	}
}
