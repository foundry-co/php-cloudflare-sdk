<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A Token Validation rule that can enforce security policies using JWT Tokens.
 */
readonly class TokenValidationRulesBulkCreate
{
	public function __construct(
		/** Action to take on requests that match operations included in `selector` and fail `expression`. */
		public ?\FoundryCo\Cloudflare\Enums\TokenValidationRulesBulkCreateAction $action = null,
		/** A human-readable description that gives more details than `title`. */
		public ?string $description = null,
		/** Toggle rule on or off. */
		public ?bool $enabled = null,
		/**
		 * Rule expression. Requests that fail to match this expression will be subject to `action`.
		 *
		 * For details on expressions, see the [Cloudflare Docs](https://developers.cloudflare.com/api-shield/security/jwt-validation/).
		 */
		public ?string $expression = null,
		/**
		 * Select operations covered by this rule.
		 *
		 * For details on selectors, see the [Cloudflare Docs](https://developers.cloudflare.com/api-shield/security/jwt-validation/).
		 */
		public ?TokenValidationRulesBulkCreateSelector $selector = null,
		/** A human-readable name for the rule. */
		public ?string $title = null,
		public mixed $createdAt = null,
		public mixed $id = null,
		public mixed $lastUpdated = null,
	) {
	}
}
