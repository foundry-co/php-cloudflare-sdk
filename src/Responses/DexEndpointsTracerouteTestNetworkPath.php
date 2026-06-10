<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestNetworkPath
{
	public function __construct(
		/** API Resource UUID tag. */
		public ?string $id = null,
		public ?string $deviceName = null,
		/** The interval at which the Traceroute synthetic application test is set to run. */
		public ?string $interval = null,
		public ?\FoundryCo\Cloudflare\Enums\DexEndpointsTracerouteTestNetworkPathKind $kind = null,
		public ?string $name = null,
		public ?DexEndpointsTracerouteTestNetworkPathNetworkPath $networkPath = null,
		/** The host of the Traceroute synthetic application test */
		public ?string $url = null,
	) {
	}
}
