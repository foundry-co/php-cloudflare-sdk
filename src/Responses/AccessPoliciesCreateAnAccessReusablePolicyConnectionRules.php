<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The rules that define how users may connect to targets secured by your application.
 */
readonly class AccessPoliciesCreateAnAccessReusablePolicyConnectionRules
{
	public function __construct(
		/** The RDP-specific rules that define clipboard behavior for RDP connections. */
		public ?AccessPoliciesCreateAnAccessReusablePolicyConnectionRulesRdp $rdp = null,
	) {
	}
}
