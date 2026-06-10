<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Select operations covered by this rule.
 *
 * For details on selectors, see the [Cloudflare Docs](https://developers.cloudflare.com/api-shield/security/jwt-validation/).
 */
readonly class TokenValidationRulesCreateRequestSelector
{
	public function __construct(
		/** Ignore operations that were otherwise included by `include`. */
		public ?array $exclude = null,
		/** Select all matching operations. */
		public ?array $include = null,
	) {
	}
}
