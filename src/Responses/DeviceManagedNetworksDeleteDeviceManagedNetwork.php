<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DeviceManagedNetworksDeleteDeviceManagedNetwork
{
	public function __construct(
		/** The configuration object containing information for the WARP client to detect the managed network. */
		public mixed $config = null,
		/** The name of the device managed network. This name must be unique. */
		public ?string $name = null,
		/** API UUID. */
		public ?string $networkId = null,
		/** The type of device managed network. */
		public ?\FoundryCo\Cloudflare\Enums\DeviceManagedNetworksDeleteDeviceManagedNetworkType $type = null,
	) {
	}
}
