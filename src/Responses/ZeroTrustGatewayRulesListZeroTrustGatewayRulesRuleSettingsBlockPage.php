<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure custom block page settings. If missing or null, use the account settings. Settable only for `http` rules with the action set to `block`.
 */
readonly class ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBlockPage
{
	public function __construct(
		/** Specify the URI to which the user is redirected. */
		public ?string $targetUri = null,
		/** Specify whether to pass the context information as query parameters. */
		public ?bool $includeContext = null,
	) {
	}
}
