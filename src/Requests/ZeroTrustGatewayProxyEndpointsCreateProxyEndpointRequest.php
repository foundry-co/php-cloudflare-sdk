<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a proxy endpoint
 */
readonly class ZeroTrustGatewayProxyEndpointsCreateProxyEndpointRequest
{
	public function __construct(
		/** The proxy endpoint kind. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayProxyEndpointsCreateProxyEndpointRequestKind $kind = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'kind' => $this->kind?->value,
		], fn ($v) => $v !== null);
	}
}
