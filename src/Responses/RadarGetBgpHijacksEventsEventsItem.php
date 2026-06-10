<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpHijacksEventsEventsItem
{
	public function __construct(
		public ?int $confidenceScore = null,
		public ?int $duration = null,
		public ?int $eventType = null,
		public ?int $hijackMsgsCount = null,
		public ?int $hijackerAsn = null,
		public ?string $hijackerCountry = null,
		public ?int $id = null,
		public ?bool $isStale = null,
		public ?string $maxHijackTs = null,
		public ?string $maxMsgTs = null,
		public ?string $minHijackTs = null,
		public ?int $onGoingCount = null,
		public ?array $peerAsns = null,
		public ?int $peerIpCount = null,
		public ?array $prefixes = null,
		public ?array $tags = null,
		public ?array $victimAsns = null,
		public ?array $victimCountries = null,
	) {
	}
}
