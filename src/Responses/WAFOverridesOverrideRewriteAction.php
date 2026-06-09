<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specifies that, when a WAF rule matches, its configured action will be replaced by the action configured in this object.
 */
readonly class WAFOverridesOverrideRewriteAction
{
	public function __construct(
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverrideRewriteActionBlock $block = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverrideRewriteActionChallenge $challenge = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverrideRewriteActionDefault $default = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverrideRewriteActionDisable $disable = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverrideRewriteActionSimulate $simulate = null,
	) {
	}
}
