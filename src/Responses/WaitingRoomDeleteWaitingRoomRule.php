<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WaitingRoomDeleteWaitingRoomRule
{
	public function __construct(
		/** The action to take when the expression matches. */
		public ?\FoundryCo\Cloudflare\Enums\WaitingRoomDeleteWaitingRoomRuleAction $action = null,
		/** The description of the rule. */
		public ?string $description = null,
		/** When set to true, the rule is enabled. */
		public ?bool $enabled = null,
		/** Criteria defining when there is a match for the current rule. */
		public ?string $expression = null,
		/** The ID of the rule. */
		public ?string $id = null,
		public ?\DateTimeImmutable $lastUpdated = null,
		/** The version of the rule. */
		public ?string $version = null,
	) {
	}
}
