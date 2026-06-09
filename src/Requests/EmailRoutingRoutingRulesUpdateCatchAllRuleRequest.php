<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update catch-all rule
 */
readonly class EmailRoutingRoutingRulesUpdateCatchAllRuleRequest
{
	public function __construct(
		/** List actions for the catch-all routing rule. */
		public array $actions,
		/** List of matchers for the catch-all routing rule. */
		public array $matchers,
		/** Routing rule status. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesUpdateCatchAllRuleRequestEnabled $enabled = null,
		/** Routing rule name. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'actions' => $this->actions,
		    'matchers' => $this->matchers,
		    'enabled' => $this->enabled?->value,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
