<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Apply settings to redirect rules. Settable only for `http` rules with the action set to `redirect`.
 */
readonly class ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsRedirect
{
	public function __construct(
		/** Specify the URI to which the user is redirected. */
		public string $targetUri,
		/** Specify whether to pass the context information as query parameters. */
		public ?bool $includeContext = null,
		/** Specify whether to append the path and query parameters from the original request to target_uri. */
		public ?bool $preservePathAndQuery = null,
	) {
	}
}
