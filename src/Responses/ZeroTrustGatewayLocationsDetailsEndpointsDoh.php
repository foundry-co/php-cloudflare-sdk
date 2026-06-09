<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayLocationsDetailsEndpointsDoh
{
	public function __construct(
		/** Indicate whether the DOH endpoint is enabled for this location. */
		public ?bool $enabled = null,
		public ?array $networks = null,
		/** Specify whether the DOH endpoint requires user identity authentication. */
		public ?bool $requireToken = null,
	) {
	}
}
