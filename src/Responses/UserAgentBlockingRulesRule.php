<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserAgentBlockingRulesRule
{
	public function __construct(
		/** The configuration object for the current rule. */
		public ?UserAgentBlockingRulesRuleConfiguration $configuration = null,
		/** An informative summary of the rule. */
		public ?string $description = null,
		/** The unique identifier of the User Agent Blocking rule. */
		public ?string $id = null,
		/** The action to apply to a matched request. */
		public ?\FoundryCo\Cloudflare\Enums\UserAgentBlockingRulesRuleMode $mode = null,
		/** When true, indicates that the rule is currently paused. */
		public ?bool $paused = null,
	) {
	}
}
