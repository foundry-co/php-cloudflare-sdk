<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update IPsec Tunnel
 */
readonly class MagicIpsecTunnelsUpdateIpsecTunnelRequest
{
	public function __construct(
		/** The IP address assigned to the Cloudflare side of the IPsec tunnel. */
		public string $cloudflareEndpoint,
		/** A 31-bit prefix (/31 in CIDR notation) supporting two hosts, one for each side of the tunnel. Select the subnet from the following private IP space: 10.0.0.0–10.255.255.255, 172.16.0.0–172.31.255.255, 192.168.0.0–192.168.255.255. */
		public string $interfaceAddress,
		/** The name of the IPsec tunnel. The name cannot share a name with other tunnels. */
		public string $name,
		/** True if automatic stateful return routing should be enabled for a tunnel, false otherwise. Requires the `coupler_integration` account flag to be enabled; requests setting this to `true` without that flag will be rejected. */
		public ?bool $automaticReturnRouting = null,
		public ?\FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsUpdateIpsecTunnelRequestBgp $bgp = null,
		public ?\FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsUpdateIpsecTunnelRequestCustomRemoteIdentities $customRemoteIdentities = null,
		/** The IP address assigned to the customer side of the IPsec tunnel. Not required, but must be set for proactive traceroutes to work. */
		public ?string $customerEndpoint = null,
		/** An optional description forthe IPsec tunnel. */
		public ?string $description = null,
		public ?\FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsUpdateIpsecTunnelRequestHealthCheck $healthCheck = null,
		/** A 127 bit IPV6 prefix from within the virtual_subnet6 prefix space with the address being the first IP of the subnet and not same as the address of virtual_subnet6. Eg if virtual_subnet6 is 2606:54c1:7:0:a9fe:12d2::/127 , interface_address6 could be 2606:54c1:7:0:a9fe:12d2:1:200/127 */
		public ?string $interfaceAddress6 = null,
		/** A randomly generated or provided string for use in the IPsec tunnel. */
		public ?string $psk = null,
		/** If `true`, then IPsec replay protection will be supported in the Cloudflare-to-customer direction. */
		public ?bool $replayProtection = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cloudflare_endpoint' => $this->cloudflareEndpoint,
		    'interface_address' => $this->interfaceAddress,
		    'name' => $this->name,
		    'automatic_return_routing' => $this->automaticReturnRouting,
		    'bgp' => $this->bgp?->toArray(),
		    'custom_remote_identities' => $this->customRemoteIdentities?->toArray(),
		    'customer_endpoint' => $this->customerEndpoint,
		    'description' => $this->description,
		    'health_check' => $this->healthCheck?->toArray(),
		    'interface_address6' => $this->interfaceAddress6,
		    'psk' => $this->psk,
		    'replay_protection' => $this->replayProtection,
		], fn ($v) => $v !== null);
	}
}
