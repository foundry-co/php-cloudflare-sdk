<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAddressManagementDynamicAdvertisementResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Advertisement Status
	 */
	public function get(string $prefixId): \FoundryCo\Cloudflare\Responses\IPAddressManagementDynamicAdvertisementStatus
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bgp/status', \FoundryCo\Cloudflare\Responses\IPAddressManagementDynamicAdvertisementStatus::class, []);
	}


	/**
	 * Update Prefix Dynamic Advertisement Status
	 */
	public function update(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\IpAddressManagementDynamicAdvertisementUpdatePrefixDynamicAdvertisementStatusRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementDynamicAdvertisementStatus
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bgp/status', \FoundryCo\Cloudflare\Responses\IPAddressManagementDynamicAdvertisementStatus::class, $request);
	}
}
