<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Google Tag Gateway configuration for a zone.
 */
readonly class GoogleTagGatewayConfig
{
	public function __construct(
		/** Enables or disables Google Tag Gateway for this zone. */
		public bool $enabled,
		/** Specifies the endpoint path for proxying Google Tag Manager requests. Use an absolute path starting with '/', with no nested paths and alphanumeric characters only (e.g. /metrics). */
		public string $endpoint,
		/** Hides the original client IP address from Google when enabled. */
		public bool $hideOriginalIp,
		/** Specify the Google Tag Manager container or measurement ID (e.g. GTM-XXXXXXX or G-XXXXXXXXXX). */
		public string $measurementId,
		/** Set up the associated Google Tag on the zone automatically when enabled. */
		public ?bool $setUpTag = null,
	) {
	}
}
