<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specifies that, when a WAF rule matches, its configured action will be replaced by the action configured in this object.
 */
readonly class WafOverridesUpdateWafOverrideRequestRewriteAction
{
	public function __construct(
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WafOverridesUpdateWafOverrideRequestRewriteActionBlock $block = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WafOverridesUpdateWafOverrideRequestRewriteActionChallenge $challenge = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WafOverridesUpdateWafOverrideRequestRewriteActionDefault $default = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WafOverridesUpdateWafOverrideRequestRewriteActionDisable $disable = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WafOverridesUpdateWafOverrideRequestRewriteActionSimulate $simulate = null,
	) {
	}
}
