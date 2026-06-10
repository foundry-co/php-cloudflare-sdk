<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MconnConnectorUpdate
{
	public function __construct(
		public ?bool $activated = null,
		public ?string $id = null,
		/** Allowed days of the week for upgrades. Default is all days. */
		public ?array $interruptWindowDaysOfWeek = null,
		public ?float $interruptWindowDurationHours = null,
		/** List of dates (YYYY-MM-DD) when upgrades are blocked. */
		public ?array $interruptWindowEmbargoDates = null,
		public ?float $interruptWindowHourOfDay = null,
		public ?string $lastUpdated = null,
		public ?string $notes = null,
		public ?string $timezone = null,
		public ?MconnConnectorUpdateDevice $device = null,
		public ?string $lastHeartbeat = null,
		public ?string $lastSeenVersion = null,
		public ?string $licenseKey = null,
	) {
	}
}
