<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestNetworkPathNetworkPath
{
	public function __construct(
		public ?array $slots = null,
		/** Specifies the sampling applied, if any, to the slots response. When sampled, results shown represent the first test run to the start of each sampling interval. */
		public ?DexEndpointsTracerouteTestNetworkPathNetworkPathSampling $sampling = null,
	) {
	}
}
