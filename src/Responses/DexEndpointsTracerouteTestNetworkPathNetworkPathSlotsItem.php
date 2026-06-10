<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestNetworkPathNetworkPathSlotsItem
{
	public function __construct(
		/** Round trip time in ms of the client to app mile */
		public ?int $clientToAppRttMs = null,
		/** Round trip time in ms of the client to Cloudflare egress mile */
		public ?int $clientToCfEgressRttMs = null,
		/** Round trip time in ms of the client to Cloudflare ingress mile */
		public ?int $clientToCfIngressRttMs = null,
		/** API Resource UUID tag. */
		public ?string $id = null,
		public ?string $timestamp = null,
		/** Round trip time in ms of the client to ISP mile */
		public ?int $clientToIspRttMs = null,
	) {
	}
}
