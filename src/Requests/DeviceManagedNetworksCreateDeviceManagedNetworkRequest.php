<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a device managed network
 */
readonly class DeviceManagedNetworksCreateDeviceManagedNetworkRequest
{
	public function __construct(
		/** The configuration object containing information for the WARP client to detect the managed network. */
		public mixed $config,
		/** The name of the device managed network. This name must be unique. */
		public string $name,
		/** The type of device managed network. */
		public \FoundryCo\Cloudflare\Enums\DeviceManagedNetworksCreateDeviceManagedNetworkRequestType $type,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config,
		    'name' => $this->name,
		    'type' => $this->type->value,
		], fn ($v) => $v !== null);
	}
}
