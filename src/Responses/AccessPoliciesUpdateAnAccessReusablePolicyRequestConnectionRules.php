<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The rules that define how users may connect to targets secured by your application.
 */
readonly class AccessPoliciesUpdateAnAccessReusablePolicyRequestConnectionRules
{
	public function __construct(
		/** The RDP-specific rules that define clipboard behavior for RDP connections. */
		public ?AccessPoliciesUpdateAnAccessReusablePolicyRequestConnectionRulesRdp $rdp = null,
	) {
	}
}
