<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specifies the sampling applied, if any, to the slots response. When sampled, results shown represent the first test run to the start of each sampling interval.
 */
readonly class DexEndpointsTracerouteTestNetworkPathNetworkPathSampling
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\DexEndpointsTracerouteTestNetworkPathNetworkPathSamplingUnit $unit = null,
		public ?int $value = null,
	) {
	}
}
