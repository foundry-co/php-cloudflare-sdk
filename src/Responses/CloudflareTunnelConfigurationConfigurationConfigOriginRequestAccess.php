<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * For all L7 requests to this hostname, cloudflared will validate each request's Cf-Access-Jwt-Assertion request header.
 */
readonly class CloudflareTunnelConfigurationConfigurationConfigOriginRequestAccess
{
	public function __construct(
		/** Access applications that are allowed to reach this hostname for this Tunnel. Audience tags can be identified in the dashboard or via the List Access policies API. */
		public array $audTag,
		public string $teamName,
		/** Deny traffic that has not fulfilled Access authorization. */
		public ?bool $required = null,
	) {
	}
}
