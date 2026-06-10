<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Zero Trust Gateway location
 */
readonly class ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationRequest
{
	public function __construct(
		/** Specify the location name. */
		public string $name,
		/** Indicate whether this location is the default location. */
		public ?bool $clientDefault = null,
		/** Specify the identifier of the pair of IPv4 addresses assigned to this location. When creating a location, if this field is absent or set to null, the pair of shared IPv4 addresses (0e4a32c6-6fb8-4858-9296-98f51631e8e6) is auto-assigned. When updating a location, if this field is absent or set to null, the pre-assigned pair remains unchanged. */
		public ?string $dnsDestinationIpsId = null,
		/** Indicate whether the location must resolve EDNS queries. */
		public ?bool $ecsSupport = null,
		/** Configure the destination endpoints for this location. */
		public ?\FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationRequestEndpoints $endpoints = null,
		/** Specify the list of network ranges from which requests at this location originate. The list takes effect only if it is non-empty and the IPv4 endpoint is enabled for this location. */
		public ?array $networks = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'client_default' => $this->clientDefault,
		    'dns_destination_ips_id' => $this->dnsDestinationIpsId,
		    'ecs_support' => $this->ecsSupport,
		    'endpoints' => $this->endpoints?->toArray(),
		    'networks' => $this->networks,
		], fn ($v) => $v !== null);
	}
}
