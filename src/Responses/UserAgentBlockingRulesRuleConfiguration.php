<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The configuration object for the current rule.
 */
readonly class UserAgentBlockingRulesRuleConfiguration
{
	public function __construct(
		/** The configuration target for this rule. You must set the target to `ua` for User Agent Blocking rules. */
		public ?string $target = null,
		/** The exact user agent string to match. This value will be compared to the received `User-Agent` HTTP header value. */
		public ?string $value = null,
	) {
	}
}
