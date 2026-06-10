<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRoutesRealtimeMetaCollectorsItem
{
	public function __construct(
		/** Public route collector ID. */
		public ?string $collector = null,
		/** Latest real-time stream timestamp for this collector. */
		public ?string $latestRealtimeTs = null,
		/** Latest RIB dump MRT file timestamp for this collector. */
		public ?string $latestRibTs = null,
		/** Latest BGP updates MRT file timestamp for this collector. */
		public ?string $latestUpdatesTs = null,
		/** Total number of collector peers used from this collector. */
		public ?int $peersCount = null,
		/** Total number of collector peers used from this collector for IPv4 prefixes. */
		public ?int $peersV4Count = null,
		/** Total number of collector peers used from this collector for IPv6 prefixes. */
		public ?int $peersV6Count = null,
	) {
	}
}
