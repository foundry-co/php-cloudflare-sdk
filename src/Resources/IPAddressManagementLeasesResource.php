<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAddressManagementLeasesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Leases
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\IPAddressManagementLeasesLeases
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/leases', \FoundryCo\Cloudflare\Responses\IPAddressManagementLeasesLeases::class, []);
	}
}
