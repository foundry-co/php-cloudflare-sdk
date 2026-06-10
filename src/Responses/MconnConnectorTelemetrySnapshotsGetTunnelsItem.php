<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot Tunnels
 */
readonly class MconnConnectorTelemetrySnapshotsGetTunnelsItem
{
	public function __construct(
		/** Name of tunnel health state (unknown, healthy, degraded, down) */
		public ?string $healthState = null,
		/** Numeric value associated with tunnel state (0 = unknown, 1 = healthy, 2 = degraded, 3 = down) */
		public ?float $healthValue = null,
		/** The tunnel interface name (i.e. xfrm1, xfrm3.99, etc.) */
		public ?string $interfaceName = null,
		/** Tunnel identifier */
		public ?string $tunnelId = null,
		/** MTU as measured between the two ends of the tunnel */
		public ?float $probedMtu = null,
		/** Number of recent healthy pings for this tunnel */
		public ?float $recentHealthyPings = null,
		/** Number of recent unhealthy pings for this tunnel */
		public ?float $recentUnhealthyPings = null,
	) {
	}
}
