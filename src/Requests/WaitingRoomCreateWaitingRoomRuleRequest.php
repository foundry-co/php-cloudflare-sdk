<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Waiting Room Rule
 */
readonly class WaitingRoomCreateWaitingRoomRuleRequest
{
	public function __construct(
		/** The action to take when the expression matches. */
		public \FoundryCo\Cloudflare\Enums\WaitingRoomCreateWaitingRoomRuleRequestAction $action,
		/** Criteria defining when there is a match for the current rule. */
		public string $expression,
		/** The description of the rule. */
		public ?string $description = null,
		/** When set to true, the rule is enabled. */
		public ?bool $enabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action->value,
		    'expression' => $this->expression,
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		], fn ($v) => $v !== null);
	}
}
