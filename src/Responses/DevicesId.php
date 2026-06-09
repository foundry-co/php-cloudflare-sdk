<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicesId
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
		/** Whether the policy is the default policy for an account. */
		public ?bool $default = null,
		/** A description of the policy. */
		public ?string $description = null,
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
		/** The amount of time in minutes a user is allowed access to their LAN. A value of 0 will allow LAN access until the next WARP reconnection, such as a reboot or a laptop waking from sleep. Note that this field is omitted from the response if null or unset. */
		public ?float $lanAllowMinutes = null,
		/** The size of the subnet for the local access network. Note that this field is omitted from the response if null or unset. */
		public ?float $lanAllowSubnetSize = null,
		/** The wirefilter expression to match devices. Available values: "identity.email", "identity.groups.id", "identity.groups.name", "identity.groups.email", "identity.service_token_uuid", "identity.saml_attributes", "network", "os.name", "os.version". */
		public ?string $match = null,
		/** The name of the device settings profile. */
		public ?string $name = null,
		public ?string $policyId = null,
		/** The precedence of the policy. Lower values indicate higher precedence. Policies will be evaluated in ascending order of this field. */
		public ?float $precedence = null,
		/** Determines if the operating system will register WARP's local interface IP with your on-premises DNS server. */
		public ?bool $registerInterfaceIpWithDns = null,
		/** Determines whether the WARP client indicates to SCCM that it is inside a VPN boundary. (Windows only). */
		public ?bool $sccmVpnBoundarySupport = null,
		public ?DevicesIdServiceModeV2 $serviceModeV2 = null,
		/** The URL to launch when the Send Feedback button is clicked. */
		public ?string $supportUrl = null,
		/** Whether to allow the user to turn off the WARP switch and disconnect the client. */
		public ?bool $switchLocked = null,
		public ?array $targetTests = null,
		/** Determines which tunnel protocol to use. */
		public ?string $tunnelProtocol = null,
		/** Virtual network access settings for the device. */
		public ?DevicesIdVirtualNetworks $virtualNetworks = null,
	) {
	}
}
