<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXRemoteCommandsDevicesDevicesItem
{
	public function __construct(
		/** Device identifier (UUID v4) */
		public ?string $deviceId = null,
		/** Device identifier (human readable) */
		public ?string $deviceName = null,
		/** Whether the device is eligible for remote captures */
		public ?bool $eligible = null,
		/** If the device is not eligible, the reason why. */
		public ?string $ineligibleReason = null,
		/** User contact email address */
		public ?string $personEmail = null,
		/** Operating system */
		public ?string $platform = null,
		/** Device registration identifier (UUID v4). On multi-user devices, this uniquely identifies a user's registration on the device. */
		public ?string $registrationId = null,
		/** Network status */
		public ?string $status = null,
		/** Timestamp in ISO format */
		public ?string $timestamp = null,
		/** WARP client version */
		public ?string $version = null,
	) {
	}
}
