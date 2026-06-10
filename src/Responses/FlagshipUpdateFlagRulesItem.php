<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FlagshipUpdateFlagRulesItem
{
	public function __construct(
		/** Conditions the context must satisfy for this rule to match. An empty array matches all contexts. */
		public ?array $conditions = null,
		/** Evaluation order; lower numbers are evaluated first. Must be unique across the flag's rules. */
		public ?int $priority = null,
		/** Variation served when this rule matches. Must be a key in `variations`. */
		public ?string $serveVariation = null,
		public ?FlagshipUpdateFlagRulesItemRollout $rollout = null,
	) {
	}
}
