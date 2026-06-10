<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicePostureIntegrationsListDevicePostureIntegrations
{
	public function __construct(
		/** The configuration object containing third-party integration information. */
		public mixed $config = null,
		/** API UUID. */
		public ?string $id = null,
		/** The interval between each posture check with the third-party API. Use `m` for minutes (e.g. `5m`) and `h` for hours (e.g. `12h`). */
		public ?string $interval = null,
		/** The name of the device posture integration. */
		public ?string $name = null,
		/** The type of device posture integration. */
		public ?\FoundryCo\Cloudflare\Enums\DevicePostureIntegrationsListDevicePostureIntegrationsType $type = null,
	) {
	}
}
