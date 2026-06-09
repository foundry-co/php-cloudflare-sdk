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
readonly class WAFOverridesOverridesRewriteAction
{
	public function __construct(
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverridesRewriteActionBlock $block = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverridesRewriteActionChallenge $challenge = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverridesRewriteActionDefault $default = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverridesRewriteActionDisable $disable = null,
		/** The WAF rule action to apply. */
		public ?\FoundryCo\Cloudflare\Enums\WAFOverridesOverridesRewriteActionSimulate $simulate = null,
	) {
	}
}
