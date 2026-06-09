<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update the default device settings profile
 */
readonly class DevicesUpdateDefaultDeviceSettingsPolicyRequest
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
		/** If the `dns_server` field of a fallback domain is not present, the client will fall back to a best guess of the default/system DNS resolvers unless this policy option is set to `true`. */
		public ?bool $disableAutoFallback = null,
		/** List of DNS search suffixes to apply to clients. Suffixes are evaluated in order. Use an empty array to clear. */
		public ?array $dnsSearchSuffixes = null,
		/** List of routes excluded in the WARP client's tunnel. Both 'exclude' and 'include' cannot be set in the same request. */
		public ?array $exclude = null,
		/** Whether to add Microsoft IPs to Split Tunnel exclusions. */
		public ?bool $excludeOfficeIps = null,
		/** List of routes included in the WARP client's tunnel. Both 'exclude' and 'include' cannot be set in the same request. */
		public ?array $include = null,
		/** The amount of time in minutes a user is allowed access to their LAN. A value of 0 will allow LAN access until the next WARP reconnection, such as a reboot or a laptop waking from sleep. Note that this field is omitted from the response if null or unset. */
		public ?float $lanAllowMinutes = null,
		/** The size of the subnet for the local access network. Note that this field is omitted from the response if null or unset. */
		public ?float $lanAllowSubnetSize = null,
		/** Determines if the operating system will register WARP's local interface IP with your on-premises DNS server. */
		public ?bool $registerInterfaceIpWithDns = null,
		/** Determines whether the WARP client indicates to SCCM that it is inside a VPN boundary. (Windows only). */
		public ?bool $sccmVpnBoundarySupport = null,
		public ?\FoundryCo\Cloudflare\Responses\DevicesUpdateDefaultDeviceSettingsPolicyRequestServiceModeV2 $serviceModeV2 = null,
		/** The URL to launch when the Send Feedback button is clicked. */
		public ?string $supportUrl = null,
		/** Whether to allow the user to turn off the WARP switch and disconnect the client. */
		public ?bool $switchLocked = null,
		/** Determines which tunnel protocol to use. */
		public ?string $tunnelProtocol = null,
		/** Virtual network access settings for the device. */
		public ?\FoundryCo\Cloudflare\Responses\DevicesUpdateDefaultDeviceSettingsPolicyRequestVirtualNetworks $virtualNetworks = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allow_mode_switch' => $this->allowModeSwitch,
		    'allow_updates' => $this->allowUpdates,
		    'allowed_to_leave' => $this->allowedToLeave,
		    'auto_connect' => $this->autoConnect,
		    'captive_portal' => $this->captivePortal,
		    'disable_auto_fallback' => $this->disableAutoFallback,
		    'dns_search_suffixes' => $this->dnsSearchSuffixes,
		    'exclude' => $this->exclude,
		    'exclude_office_ips' => $this->excludeOfficeIps,
		    'include' => $this->include,
		    'lan_allow_minutes' => $this->lanAllowMinutes,
		    'lan_allow_subnet_size' => $this->lanAllowSubnetSize,
		    'register_interface_ip_with_dns' => $this->registerInterfaceIpWithDns,
		    'sccm_vpn_boundary_support' => $this->sccmVpnBoundarySupport,
		    'service_mode_v2' => $this->serviceModeV2?->toArray(),
		    'support_url' => $this->supportUrl,
		    'switch_locked' => $this->switchLocked,
		    'tunnel_protocol' => $this->tunnelProtocol,
		    'virtual_networks' => $this->virtualNetworks?->toArray(),
		], fn ($v) => $v !== null);
	}
}
