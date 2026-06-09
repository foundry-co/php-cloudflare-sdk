<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure to forward the query to the internal DNS service, passing the specified 'view_id' as input. Not used when 'dns_resolvers' is specified or 'resolve_dns_through_cloudflare' is set. Only valid when a rule's action set to 'resolve'. Settable only for `dns_resolver` rules.
 */
readonly class ZeroTrustGatewayRulesTenantRuleSettingsResolveDnsInternally
{
	public function __construct(
		/** Specify the fallback behavior to apply when the internal DNS response code differs from 'NOERROR' or when the response data contains only CNAME records for 'A' or 'AAAA' queries. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesTenantRuleSettingsResolveDnsInternallyFallback $fallback = null,
		/** Specify the internal DNS view identifier to pass to the internal DNS service. */
		public ?string $viewId = null,
	) {
	}
}
