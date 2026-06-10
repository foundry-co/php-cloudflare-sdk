<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicInterconnectsListInterconnectDetailsInterconnect
{
	public function __construct(
		/** True if automatic stateful return routing should be enabled for a tunnel, false otherwise. Requires the `coupler_integration` account flag to be enabled; requests setting this to `true` without that flag will be rejected. */
		public ?bool $automaticReturnRouting = null,
		/** The name of the interconnect. The name cannot share a name with other tunnels. */
		public ?string $coloName = null,
		/** The date and time the tunnel was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** An optional description of the interconnect. */
		public ?string $description = null,
		/** The configuration specific to GRE interconnects. */
		public ?MagicInterconnectsListInterconnectDetailsInterconnectGre $gre = null,
		public ?MagicInterconnectsListInterconnectDetailsInterconnectHealthCheck $healthCheck = null,
		/** Identifier */
		public ?string $id = null,
		/** A 31-bit prefix (/31 in CIDR notation) supporting two hosts, one for each side of the tunnel. Select the subnet from the following private IP space: 10.0.0.0–10.255.255.255, 172.16.0.0–172.31.255.255, 192.168.0.0–192.168.255.255. */
		public ?string $interfaceAddress = null,
		/** A 127 bit IPV6 prefix from within the virtual_subnet6 prefix space with the address being the first IP of the subnet and not same as the address of virtual_subnet6. Eg if virtual_subnet6 is 2606:54c1:7:0:a9fe:12d2::/127 , interface_address6 could be 2606:54c1:7:0:a9fe:12d2:1:200/127 */
		public ?string $interfaceAddress6 = null,
		/** The date and time the tunnel was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The Maximum Transmission Unit (MTU) in bytes for the interconnect. The minimum value is 576. */
		public ?int $mtu = null,
		/** The name of the interconnect. The name cannot share a name with other tunnels. */
		public ?string $name = null,
		public mixed $virtualPortReservationId = null,
	) {
	}
}
