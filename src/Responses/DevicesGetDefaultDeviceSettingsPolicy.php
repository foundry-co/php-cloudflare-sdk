<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicesGetDefaultDeviceSettingsPolicy
{
	public function __construct(
		/** Whether to allow the user to switch WARP between modes. */
		public ?bool $allowModeSwitch = null,
		/** Whether to receive update notifications when a new version of the client is available. */
		public ?bool $allowUpdates = null,
		/** Whether to allow devices to leave the organization. */
		public ?bool $allowedToLeave = null,
		/** The amount of time in seconds to reconnect after having been disabled. */
		public ?float $autoConnect = null,
		/** Turn on the captive portal after the specified amount of time. */
		public ?float $captivePortal = null,
		/** Whether the policy will be applied to matching devices. */
		public ?bool $default = null,
		/** If the `dns_server` field of a fallback domain is not present, the client will fall back to a best guess of the default/system DNS resolvers unless this policy option is set to `true`. */
		public ?bool $disableAutoFallback = null,
		/** List of DNS search suffixes to apply to clients. Suffixes are evaluated in order. Use an empty array to clear. */
		public ?array $dnsSearchSuffixes = null,
		/** Whether the policy will be applied to matching devices. */
		public ?bool $enabled = null,
		/** List of routes excluded in the WARP client's tunnel. */
		public ?array $exclude = null,
		/** Whether to add Microsoft IPs to Split Tunnel exclusions. */
		public ?bool $excludeOfficeIps = null,
		public ?array $fallbackDomains = null,
		public ?string $gatewayUniqueId = null,
		/** List of routes included in the WARP client's tunnel. */
		public ?array $include = null,
		public ?string $policyId = null,
		/** Determines if the operating system will register WARP's local interface IP with your on-premises DNS server. */
		public ?bool $registerInterfaceIpWithDns = null,
		/** Determines whether the WARP client indicates to SCCM that it is inside a VPN boundary. (Windows only). */
		public ?bool $sccmVpnBoundarySupport = null,
		public ?DevicesGetDefaultDeviceSettingsPolicyServiceModeV2 $serviceModeV2 = null,
		/** The URL to launch when the Send Feedback button is clicked. */
		public ?string $supportUrl = null,
		/** Whether to allow the user to turn off the WARP switch and disconnect the client. */
		public ?bool $switchLocked = null,
		/** Determines which tunnel protocol to use. */
		public ?string $tunnelProtocol = null,
		/** Virtual network access settings for the device. */
		public ?DevicesGetDefaultDeviceSettingsPolicyVirtualNetworks $virtualNetworks = null,
	) {
	}
}
