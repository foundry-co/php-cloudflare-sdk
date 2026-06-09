<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicIPsecTunnelsTunnelsIpsecTunnelsItemHealthCheck
{
	public function __construct(
		/** The direction of the flow of the healthcheck. Either unidirectional, where the probe comes to you via the tunnel and the result comes back to Cloudflare via the open Internet, or bidirectional where both the probe and result come and go via the tunnel. */
		public ?\FoundryCo\Cloudflare\Enums\MagicIPsecTunnelsTunnelsIpsecTunnelsItemHealthCheckDirection $direction = null,
	) {
	}
}
