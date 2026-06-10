<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestDetails
{
	public function __construct(
		/** The host of the Traceroute synthetic application test */
		public ?string $host = null,
		/** The interval at which the Traceroute synthetic application test is set to run. */
		public ?string $interval = null,
		public ?\FoundryCo\Cloudflare\Enums\DexEndpointsTracerouteTestDetailsKind $kind = null,
		/** The name of the Traceroute synthetic application test */
		public ?string $name = null,
		public ?array $targetPolicies = null,
		public ?bool $targeted = null,
		public ?DexEndpointsTracerouteTestDetailsTracerouteStats $tracerouteStats = null,
		public ?array $tracerouteStatsByColo = null,
	) {
	}
}
