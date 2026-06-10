<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot Interface
 */
readonly class MconnConnectorTelemetrySnapshotsListLatestItemsItemInterfacesItem
{
	public function __construct(
		/** Name of the network interface */
		public ?string $name = null,
		/** UP/DOWN state of the network interface */
		public ?string $operstate = null,
		public ?array $ipAddresses = null,
		/** Speed of the network interface (bits per second) */
		public ?float $speed = null,
	) {
	}
}
