<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayLocationsLocation
{
	public function __construct(
		/** Indicate whether this location is the default location. */
		public ?bool $clientDefault = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Indicate the identifier of the pair of IPv4 addresses assigned to this location. */
		public ?string $dnsDestinationIpsId = null,
		/** Specify the UUID of the IPv6 block brought to the gateway so that this location's IPv6 address is allocated from the Bring Your Own IPv6 (BYOIPv6) block rather than the standard Cloudflare IPv6 block. */
		public ?string $dnsDestinationIpv6BlockId = null,
		/** Specify the DNS over HTTPS domain that receives DNS requests. Gateway automatically generates this value. */
		public ?string $dohSubdomain = null,
		/** Indicate whether the location must resolve EDNS queries. */
		public ?bool $ecsSupport = null,
		/** Configure the destination endpoints for this location. */
		public ?ZeroTrustGatewayLocationsLocationEndpoints $endpoints = null,
		public ?string $id = null,
		/** Defines the automatically generated IPv6 destination IP assigned to this location. Gateway counts all DNS requests sent to this IP as requests under this location. */
		public ?string $ip = null,
		/** Show the primary destination IPv4 address from the pair identified dns_destination_ips_id. This field read-only. */
		public ?string $ipv4Destination = null,
		/** Show the backup destination IPv4 address from the pair identified dns_destination_ips_id. This field read-only. */
		public ?string $ipv4DestinationBackup = null,
		/** Specify the location name. */
		public ?string $name = null,
		/** Specify the list of network ranges from which requests at this location originate. The list takes effect only if it is non-empty and the IPv4 endpoint is enabled for this location. */
		public ?array $networks = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
