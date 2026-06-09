<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DeviceManagedNetworksDetails
{
	public function __construct(
		/** The configuration object containing information for the WARP client to detect the managed network. */
		public mixed $config = null,
		/** The name of the device managed network. This name must be unique. */
		public ?string $name = null,
		/** API UUID. */
		public ?string $networkId = null,
		/** The type of device managed network. */
		public ?\FoundryCo\Cloudflare\Enums\DeviceManagedNetworksDetailsType $type = null,
	) {
	}
}
