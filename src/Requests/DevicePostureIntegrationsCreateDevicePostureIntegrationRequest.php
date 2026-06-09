<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a device posture integration
 */
readonly class DevicePostureIntegrationsCreateDevicePostureIntegrationRequest
{
	public function __construct(
		/** The configuration object containing third-party integration information. */
		public mixed $config,
		/** The interval between each posture check with the third-party API. Use `m` for minutes (e.g. `5m`) and `h` for hours (e.g. `12h`). */
		public string $interval,
		/** The name of the device posture integration. */
		public string $name,
		/** The type of device posture integration. */
		public \FoundryCo\Cloudflare\Enums\DevicePostureIntegrationsCreateDevicePostureIntegrationRequestType $type,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config,
		    'interval' => $this->interval,
		    'name' => $this->name,
		    'type' => $this->type->value,
		], fn ($v) => $v !== null);
	}
}
