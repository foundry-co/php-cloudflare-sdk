<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicesDetails
{
	public function __construct(
		public ?DevicesDetailsAccount $account = null,
		/** When the device was created. */
		public ?\DateTimeImmutable $created = null,
		/** True if the device was deleted. */
		public ?bool $deleted = null,
		public ?string $deviceType = null,
		public ?string $gatewayDeviceId = null,
		/** Registration ID. Equal to Device ID except for accounts which enabled [multi-user mode](https://developers.cloudflare.com/cloudflare-one/connections/connect-devices/warp/deployment/mdm-deployment/windows-multiuser/). */
		public ?string $id = null,
		/** IPv4 or IPv6 address. */
		public ?string $ip = null,
		/** The device's public key. */
		public ?string $key = null,
		/** Type of the key. */
		public ?string $keyType = null,
		/** When the device last connected to Cloudflare services. */
		public ?\DateTimeImmutable $lastSeen = null,
		/** The device mac address. */
		public ?string $macAddress = null,
		/** The device model name. */
		public ?string $model = null,
		/** The device name. */
		public ?string $name = null,
		/** The operating system version. */
		public ?string $osVersion = null,
		/** The device serial number. */
		public ?string $serialNumber = null,
		/** Type of the tunnel connection used. */
		public ?string $tunnelType = null,
		/** When the device was updated. */
		public ?\DateTimeImmutable $updated = null,
		public ?DevicesDetailsUser $user = null,
		/** The WARP client version. */
		public ?string $version = null,
	) {
	}
}
