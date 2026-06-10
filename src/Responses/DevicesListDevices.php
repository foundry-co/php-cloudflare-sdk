<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicesListDevices
{
	public function __construct(
		/** When the device was created. */
		public ?\DateTimeImmutable $created = null,
		/** True if the device was deleted. */
		public ?bool $deleted = null,
		public ?\FoundryCo\Cloudflare\Enums\DevicesListDevicesDeviceType $deviceType = null,
		/** Registration ID. Equal to Device ID except for accounts which enabled [multi-user mode](https://developers.cloudflare.com/cloudflare-one/connections/connect-devices/warp/deployment/mdm-deployment/windows-multiuser/). */
		public ?string $id = null,
		/** IPv4 or IPv6 address. */
		public ?string $ip = null,
		/** The device's public key. */
		public ?string $key = null,
		/** When the device last connected to Cloudflare services. */
		public ?\DateTimeImmutable $lastSeen = null,
		/** The device mac address. */
		public ?string $macAddress = null,
		/** The device manufacturer name. */
		public ?string $manufacturer = null,
		/** The device model name. */
		public ?string $model = null,
		/** The device name. */
		public ?string $name = null,
		/** The Linux distro name. */
		public ?string $osDistroName = null,
		/** The Linux distro revision. */
		public ?string $osDistroRevision = null,
		/** The operating system version. */
		public ?string $osVersion = null,
		/** Additional operating system version details. For Windows, the UBR (Update Build Revision). For Mac or iOS, the Product Version Extra. For Linux, the distribution name and version. */
		public ?string $osVersionExtra = null,
		/** When the device was revoked. */
		public ?\DateTimeImmutable $revokedAt = null,
		/** The device serial number. */
		public ?string $serialNumber = null,
		/** When the device was updated. */
		public ?\DateTimeImmutable $updated = null,
		public ?DevicesListDevicesUser $user = null,
		/** The WARP client version. */
		public ?string $version = null,
	) {
	}
}
