<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPRealtimeMetaCollectorsItem
{
	public function __construct(
		/** Public route collector ID. */
		public string $collector,
		/** Latest real-time stream timestamp for this collector. */
		public string $latestRealtimeTs,
		/** Latest RIB dump MRT file timestamp for this collector. */
		public string $latestRibTs,
		/** Latest BGP updates MRT file timestamp for this collector. */
		public string $latestUpdatesTs,
		/** Total number of collector peers used from this collector. */
		public int $peersCount,
		/** Total number of collector peers used from this collector for IPv4 prefixes. */
		public int $peersV4Count,
		/** Total number of collector peers used from this collector for IPv6 prefixes. */
		public int $peersV6Count,
	) {
	}
}
