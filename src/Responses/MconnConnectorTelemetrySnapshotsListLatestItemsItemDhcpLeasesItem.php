<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot DHCP lease
 */
readonly class MconnConnectorTelemetrySnapshotsListLatestItemsItemDhcpLeasesItem
{
	public function __construct(
		/** Client ID of the device the IP Address was leased to */
		public ?string $clientId = null,
		/** Expiry time of the DHCP lease (seconds since the Unix epoch) */
		public ?float $expiryTime = null,
		/** Hostname of the device the IP Address was leased to */
		public ?string $hostname = null,
		/** Name of the network interface */
		public ?string $interfaceName = null,
		/** IP Address that was leased */
		public ?string $ipAddress = null,
		/** MAC Address of the device the IP Address was leased to */
		public ?string $macAddress = null,
	) {
	}
}
