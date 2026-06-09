<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit Connector to update specific properties or Re-provision License Key
 */
readonly class MconnConnectorUpdateRequest
{
	public function __construct(
		public ?bool $activated = null,
		/** Allowed days of the week for upgrades. Default is all days. */
		public ?array $interruptWindowDaysOfWeek = null,
		public ?float $interruptWindowDurationHours = null,
		/** List of dates (YYYY-MM-DD) when upgrades are blocked. */
		public ?array $interruptWindowEmbargoDates = null,
		public ?float $interruptWindowHourOfDay = null,
		public ?string $notes = null,
		public ?string $timezone = null,
		/** When true, regenerate license key for the connector. */
		public ?bool $provisionLicense = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'activated' => $this->activated,
		    'interrupt_window_days_of_week' => $this->interruptWindowDaysOfWeek?->value,
		    'interrupt_window_duration_hours' => $this->interruptWindowDurationHours,
		    'interrupt_window_embargo_dates' => $this->interruptWindowEmbargoDates,
		    'interrupt_window_hour_of_day' => $this->interruptWindowHourOfDay,
		    'notes' => $this->notes,
		    'timezone' => $this->timezone,
		    'provision_license' => $this->provisionLicense,
		], fn ($v) => $v !== null);
	}
}
