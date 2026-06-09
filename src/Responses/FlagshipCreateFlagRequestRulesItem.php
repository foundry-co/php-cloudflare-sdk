<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FlagshipCreateFlagRequestRulesItem
{
	public function __construct(
		/** Conditions the context must satisfy for this rule to match. An empty array matches all contexts. */
		public array $conditions,
		/** Evaluation order; lower numbers are evaluated first. Must be unique across the flag's rules. */
		public int $priority,
		/** Variation served when this rule matches. Must be a key in `variations`. */
		public string $serveVariation,
		public ?FlagshipCreateFlagRequestRulesItemRollout $rollout = null,
	) {
	}
}
