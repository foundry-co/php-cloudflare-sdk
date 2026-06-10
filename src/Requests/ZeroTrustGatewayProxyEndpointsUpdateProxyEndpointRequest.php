<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a proxy endpoint
 */
readonly class ZeroTrustGatewayProxyEndpointsUpdateProxyEndpointRequest
{
	public function __construct(
		/** Specify the list of CIDRs to restrict ingress connections. */
		public ?array $ips = null,
		/** Specify the name of the proxy endpoint. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ips' => $this->ips,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
