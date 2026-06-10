<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustGatewayDNSDestinationIpv4AddressPairsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Zero Trust Gateway DNS destination IPv4 address pairs
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/dns_destination_ips', \FoundryCo\Cloudflare\Responses\ZeroTrustDnsDestinationIpsListDnsDestinationIps::class, []);
	}
}
