<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayLocationsLocationsEndpointsIpv6
{
	public function __construct(
		/** Indicate whether the IPV6 endpoint is enabled for this location. */
		public ?bool $enabled = null,
		public ?array $networks = null,
	) {
	}
}
