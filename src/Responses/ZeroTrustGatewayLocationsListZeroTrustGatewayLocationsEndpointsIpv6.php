<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayLocationsListZeroTrustGatewayLocationsEndpointsIpv6
{
	public function __construct(
		/** Indicate whether the IPV6 endpoint is enabled for this location. */
		public ?bool $enabled = null,
		/** Specify the list of allowed source IPv6 network ranges for this endpoint. When the list is empty, the endpoint allows all source IPs. The list takes effect only if the endpoint is enabled for this location. */
		public ?array $networks = null,
	) {
	}
}
