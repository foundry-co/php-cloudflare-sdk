<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAddressManagementBGPPrefixesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List BGP Prefixes
	 */
	public function get(string $prefixId): \FoundryCo\Cloudflare\Responses\IPAddressManagementBGPPrefixesPrefixes
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bgp/prefixes', \FoundryCo\Cloudflare\Responses\IPAddressManagementBGPPrefixesPrefixes::class, []);
	}


	/**
	 * Create BGP Prefix
	 */
	public function create(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\IpAddressManagementPrefixesCreateBgpPrefixRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementBGPPrefixesPrefix
	{
		return $this->client->post('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bgp/prefixes', \FoundryCo\Cloudflare\Responses\IPAddressManagementBGPPrefixesPrefix::class, $request);
	}


	/**
	 * Fetch BGP Prefix
	 */
	public function prefixes(
		string $prefixId,
		string $bgpPrefixId,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementBGPPrefixesPrefix
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bgp/prefixes/' . $bgpPrefixId, \FoundryCo\Cloudflare\Responses\IPAddressManagementBGPPrefixesPrefix::class, []);
	}


	/**
	 * Update BGP Prefix
	 */
	public function update(
		string $prefixId,
		string $bgpPrefixId,
		\FoundryCo\Cloudflare\Requests\IpAddressManagementPrefixesUpdateBgpPrefixRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementBGPPrefixesPrefix
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bgp/prefixes/' . $bgpPrefixId, \FoundryCo\Cloudflare\Responses\IPAddressManagementBGPPrefixesPrefix::class, $request);
	}


	/**
	 * Delete BGP Prefix
	 */
	public function delete(string $prefixId, string $bgpPrefixId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bgp/prefixes/' . $bgpPrefixId);
	}
}
