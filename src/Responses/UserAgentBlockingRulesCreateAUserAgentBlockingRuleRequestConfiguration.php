<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserAgentBlockingRulesCreateAUserAgentBlockingRuleRequestConfiguration
{
	public function __construct(
		/** The configuration target. You must set the target to `ua` when specifying a user agent in the rule. */
		public ?\FoundryCo\Cloudflare\Enums\UserAgentBlockingRulesCreateAUserAgentBlockingRuleRequestConfigurationTarget $target = null,
		/** the user agent to exactly match */
		public ?string $value = null,
	) {
	}
}
