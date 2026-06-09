<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a device posture integration
 */
readonly class DevicePostureIntegrationsUpdateDevicePostureIntegrationRequest
{
	public function __construct(
		/** The configuration object containing third-party integration information. */
		public mixed $config = null,
		/** The interval between each posture check with the third-party API. Use `m` for minutes (e.g. `5m`) and `h` for hours (e.g. `12h`). */
		public ?string $interval = null,
		/** The name of the device posture integration. */
		public ?string $name = null,
		/** The type of device posture integration. */
		public ?\FoundryCo\Cloudflare\Enums\DevicePostureIntegrationsUpdateDevicePostureIntegrationRequestType $type = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config,
		    'interval' => $this->interval,
		    'name' => $this->name,
		    'type' => $this->type?->value,
		], fn ($v) => $v !== null);
	}
}
