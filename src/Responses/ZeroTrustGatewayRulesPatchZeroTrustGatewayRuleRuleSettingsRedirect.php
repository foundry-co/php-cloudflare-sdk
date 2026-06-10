<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Apply settings to redirect rules. Settable only for `http` rules with the action set to `redirect`.
 */
readonly class ZeroTrustGatewayRulesPatchZeroTrustGatewayRuleRuleSettingsRedirect
{
	public function __construct(
		/** Specify the URI to which the user is redirected. */
		public ?string $targetUri = null,
		/** Specify whether to pass the context information as query parameters. */
		public ?bool $includeContext = null,
		/** Specify whether to append the path and query parameters from the original request to target_uri. */
		public ?bool $preservePathAndQuery = null,
	) {
	}
}
