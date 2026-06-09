<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringDevices
{
	public function __construct(
		/** Cloudflare colo */
		public string $colo,
		/** Device identifier (UUID v4) */
		public string $deviceId,
		/** The mode under which the WARP client is run */
		public string $mode,
		/** Operating system */
		public string $platform,
		/** Network status */
		public string $status,
		/** Timestamp in ISO format */
		public string $timestamp,
		/** WARP client version */
		public string $version,
		public ?bool $alwaysOn = null,
		public ?bool $batteryCharging = null,
		public ?int $batteryCycles = null,
		public ?float $batteryPct = null,
		public ?string $connectionType = null,
		public ?float $cpuPct = null,
		public ?array $cpuPctByApp = null,
		public ?DEXSyntheticApplicationMonitoringDevicesDeviceIpv4 $deviceIpv4 = null,
		public ?DEXSyntheticApplicationMonitoringDevicesDeviceIpv6 $deviceIpv6 = null,
		/** Device identifier (human readable) */
		public ?string $deviceName = null,
		/** Deprecated: use registrationId. Device registration identifier (UUID v4). */
		public ?string $deviceRegistration = null,
		public ?int $diskReadBps = null,
		public ?float $diskUsagePct = null,
		public ?int $diskWriteBps = null,
		public ?string $dohSubdomain = null,
		public ?float $estimatedLossPct = null,
		public ?bool $firewallEnabled = null,
		public ?DEXSyntheticApplicationMonitoringDevicesGatewayIpv4 $gatewayIpv4 = null,
		public ?DEXSyntheticApplicationMonitoringDevicesGatewayIpv6 $gatewayIpv6 = null,
		public ?float $handshakeLatencyMs = null,
		public ?DEXSyntheticApplicationMonitoringDevicesIspIpv4 $ispIpv4 = null,
		public ?DEXSyntheticApplicationMonitoringDevicesIspIpv6 $ispIpv6 = null,
		public ?string $metal = null,
		public ?int $networkRcvdBps = null,
		public ?int $networkSentBps = null,
		public ?string $networkSsid = null,
		/** User contact email address */
		public ?string $personEmail = null,
		public ?int $ramAvailableKb = null,
		public ?float $ramUsedPct = null,
		public ?array $ramUsedPctByApp = null,
		/** Device registration identifier (UUID v4). On multi-user devices, this uniquely identifies a user's registration on the device. */
		public ?string $registrationId = null,
		public ?bool $switchLocked = null,
		public ?int $wifiStrengthDbm = null,
	) {
	}
}
