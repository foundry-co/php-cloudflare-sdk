<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicConnectorsUpdate
{
	public function __construct(
		public bool $activated,
		public string $id,
		/** Allowed days of the week for upgrades. Default is all days. */
		public array $interruptWindowDaysOfWeek,
		public float $interruptWindowDurationHours,
		/** List of dates (YYYY-MM-DD) when upgrades are blocked. */
		public array $interruptWindowEmbargoDates,
		public float $interruptWindowHourOfDay,
		public string $lastUpdated,
		public string $notes,
		public string $timezone,
		public ?MagicConnectorsUpdateDevice $device = null,
		public ?string $lastHeartbeat = null,
		public ?string $lastSeenVersion = null,
		public ?string $licenseKey = null,
	) {
	}
}
