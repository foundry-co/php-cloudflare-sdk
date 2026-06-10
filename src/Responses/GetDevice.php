<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A WARP Device.
 */
readonly class GetDevice
{
	public function __construct(
		/** The number of active registrations for the device. Active registrations are those which haven't been revoked or deleted. */
		public ?int $activeRegistrations = null,
		/** The RFC3339 timestamp when the device was created. */
		public ?string $createdAt = null,
		/** The unique ID of the device. */
		public ?string $id = null,
		/** The RFC3339 timestamp when the device was last seen. */
		public ?string $lastSeenAt = null,
		/** The name of the device. */
		public ?string $name = null,
		/** The RFC3339 timestamp when the device was last updated. */
		public ?string $updatedAt = null,
		/** Version of the WARP client. */
		public ?string $clientVersion = null,
		/** The RFC3339 timestamp when the device was deleted. */
		public ?string $deletedAt = null,
		/** The device operating system. */
		public ?string $deviceType = null,
		/** A string that uniquely identifies the hardware or virtual machine (VM). */
		public ?string $hardwareId = null,
		/** The last seen registration for the device. */
		public ?GetDeviceLastSeenRegistration $lastSeenRegistration = null,
		/** The last user to use the WARP device. */
		public ?GetDeviceLastSeenUser $lastSeenUser = null,
		/** The device MAC address. */
		public ?string $macAddress = null,
		/** The device manufacturer. */
		public ?string $manufacturer = null,
		/** The model name of the device. */
		public ?string $model = null,
		/** The device operating system version number. */
		public ?string $osVersion = null,
		/** Additional operating system version details. For Windows, the UBR (Update Build Revision). For Mac or iOS, the Product Version Extra. For Linux, the distribution name and version. */
		public ?string $osVersionExtra = null,
		/**
		 * **Deprecated**: IP information is provided by DEX - see https://developers.cloudflare.com/api/resources/zero_trust/subresources/dex/subresources/fleet_status/subresources/devices/methods/list/
		 */
		public ?string $publicIp = null,
		/** The device serial number. */
		public ?string $serialNumber = null,
	) {
	}
}
