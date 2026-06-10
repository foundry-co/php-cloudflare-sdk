<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayLocationsCreateZeroTrustGatewayLocationRequestEndpointsDoh
{
	public function __construct(
		/** Indicate whether the DOH endpoint is enabled for this location. */
		public ?bool $enabled = null,
		/** Specify the list of allowed source IP network ranges for this endpoint. When the list is empty, the endpoint allows all source IPs. The list takes effect only if the endpoint is enabled for this location. */
		public ?array $networks = null,
		/** Specify whether the DOH endpoint requires user identity authentication. */
		public ?bool $requireToken = null,
	) {
	}
}
