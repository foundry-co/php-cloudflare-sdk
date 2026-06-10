<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Virtual network access settings for the device.
 */
readonly class DevicesUpdateDeviceSettingsPolicyRequestVirtualNetworks
{
	public function __construct(
		/** List of virtual network IDs the device is allowed to access. When virtual_networks is set, at least one entry is required. */
		public ?array $allowed = null,
		/** The default virtual network ID. Must be included in the `allowed` list. */
		public ?string $default = null,
	) {
	}
}
