<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicGreTunnelsUpdateGreTunnelModifiedGreTunnel
{
	public function __construct(
		/** The IP address assigned to the Cloudflare side of the GRE tunnel. */
		public ?string $cloudflareGreEndpoint = null,
		/** The IP address assigned to the customer side of the GRE tunnel. */
		public ?string $customerGreEndpoint = null,
		/** Identifier */
		public ?string $id = null,
		/** A 31-bit prefix (/31 in CIDR notation) supporting two hosts, one for each side of the tunnel. Select the subnet from the following private IP space: 10.0.0.0–10.255.255.255, 172.16.0.0–172.31.255.255, 192.168.0.0–192.168.255.255. */
		public ?string $interfaceAddress = null,
		/** The name of the tunnel. The name cannot contain spaces or special characters, must be 15 characters or less, and cannot share a name with another GRE tunnel. */
		public ?string $name = null,
		/** True if automatic stateful return routing should be enabled for a tunnel, false otherwise. Requires the `coupler_integration` account flag to be enabled; requests setting this to `true` without that flag will be rejected. */
		public ?bool $automaticReturnRouting = null,
		public ?MagicGreTunnelsUpdateGreTunnelModifiedGreTunnelBgp $bgp = null,
		public ?MagicGreTunnelsUpdateGreTunnelModifiedGreTunnelBgpStatus $bgpStatus = null,
		/** The date and time the tunnel was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** An optional description of the GRE tunnel. */
		public ?string $description = null,
		public ?MagicGreTunnelsUpdateGreTunnelModifiedGreTunnelHealthCheck $healthCheck = null,
		/** A 127 bit IPV6 prefix from within the virtual_subnet6 prefix space with the address being the first IP of the subnet and not same as the address of virtual_subnet6. Eg if virtual_subnet6 is 2606:54c1:7:0:a9fe:12d2::/127 , interface_address6 could be 2606:54c1:7:0:a9fe:12d2:1:200/127 */
		public ?string $interfaceAddress6 = null,
		/** The date and time the tunnel was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Maximum Transmission Unit (MTU) in bytes for the GRE tunnel. The minimum value is 576. */
		public ?int $mtu = null,
		/** Time To Live (TTL) in number of hops of the GRE tunnel. */
		public ?int $ttl = null,
	) {
	}
}
