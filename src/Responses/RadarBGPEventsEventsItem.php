<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPEventsEventsItem
{
	public function __construct(
		public int $confidenceScore,
		public int $duration,
		public int $eventType,
		public int $hijackMsgsCount,
		public int $hijackerAsn,
		public string $hijackerCountry,
		public int $id,
		public bool $isStale,
		public string $maxHijackTs,
		public string $maxMsgTs,
		public string $minHijackTs,
		public int $onGoingCount,
		public array $peerAsns,
		public int $peerIpCount,
		public array $prefixes,
		public array $tags,
		public array $victimAsns,
		public array $victimCountries,
	) {
	}
}
