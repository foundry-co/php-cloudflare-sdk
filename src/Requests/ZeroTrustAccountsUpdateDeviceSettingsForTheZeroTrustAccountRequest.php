<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update device settings for a Zero Trust account
 */
readonly class ZeroTrustAccountsUpdateDeviceSettingsForTheZeroTrustAccountRequest
{
	public function __construct(
		/** Sets the time limit, in seconds, that a user can use an override code to bypass WARP. */
		public ?float $disableForTime = null,
		/** Controls whether the external emergency disconnect feature is enabled. */
		public ?bool $externalEmergencySignalEnabled = null,
		/** The SHA256 fingerprint (64 hexadecimal characters) of the HTTPS server certificate for the external_emergency_signal_url. If provided, the WARP client will use this value to verify the server's identity. The device will ignore any response if the server's certificate fingerprint does not exactly match this value. */
		public ?string $externalEmergencySignalFingerprint = null,
		/** The interval at which the WARP client fetches the emergency disconnect signal, formatted as a duration string (e.g., "5m", "2m30s", "1h"). Minimum 30 seconds. */
		public ?string $externalEmergencySignalInterval = null,
		/** The HTTPS URL from which to fetch the emergency disconnect signal. Must use HTTPS and have an IPv4 or IPv6 address as the host. */
		public ?string $externalEmergencySignalUrl = null,
		/** Enable gateway proxy filtering on TCP. */
		public ?bool $gatewayProxyEnabled = null,
		/** Enable gateway proxy filtering on UDP. */
		public ?bool $gatewayUdpProxyEnabled = null,
		/** Enable installation of cloudflare managed root certificate. */
		public ?bool $rootCertificateInstallationEnabled = null,
		/** Enable using CGNAT virtual IPv4. */
		public ?bool $useZtVirtualIp = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'disable_for_time' => $this->disableForTime,
		    'external_emergency_signal_enabled' => $this->externalEmergencySignalEnabled,
		    'external_emergency_signal_fingerprint' => $this->externalEmergencySignalFingerprint,
		    'external_emergency_signal_interval' => $this->externalEmergencySignalInterval,
		    'external_emergency_signal_url' => $this->externalEmergencySignalUrl,
		    'gateway_proxy_enabled' => $this->gatewayProxyEnabled,
		    'gateway_udp_proxy_enabled' => $this->gatewayUdpProxyEnabled,
		    'root_certificate_installation_enabled' => $this->rootCertificateInstallationEnabled,
		    'use_zt_virtual_ip' => $this->useZtVirtualIp,
		], fn ($v) => $v !== null);
	}
}
