<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add a connector to your account
 */
readonly class MconnConnectorCreateRequest
{
	public function __construct(
		/** Exactly one of id, serial_number, or provision_license must be provided. */
		public \FoundryCo\Cloudflare\Responses\MconnConnectorCreateRequestDevice $device,
		public ?bool $activated = null,
		/** Allowed days of the week for upgrades. Default is all days. */
		public ?array $interruptWindowDaysOfWeek = null,
		public ?float $interruptWindowDurationHours = null,
		/** List of dates (YYYY-MM-DD) when upgrades are blocked. */
		public ?array $interruptWindowEmbargoDates = null,
		public ?float $interruptWindowHourOfDay = null,
		public ?string $notes = null,
		public ?string $timezone = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'device' => $this->device->toArray(),
		    'activated' => $this->activated,
		    'interrupt_window_days_of_week' => $this->interruptWindowDaysOfWeek?->value,
		    'interrupt_window_duration_hours' => $this->interruptWindowDurationHours,
		    'interrupt_window_embargo_dates' => $this->interruptWindowEmbargoDates,
		    'interrupt_window_hour_of_day' => $this->interruptWindowHourOfDay,
		    'notes' => $this->notes,
		    'timezone' => $this->timezone,
		], fn ($v) => $v !== null);
	}
}
