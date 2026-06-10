<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class Web3HostnameResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Web3 Hostnames
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames', \FoundryCo\Cloudflare\Responses\Web3HostnameListWeb3Hostnames::class, []);
	}


	/**
	 * Create Web3 Hostname
	 */
	public function create(\FoundryCo\Cloudflare\Requests\Web3HostnameCreateWeb3HostnameRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/web3/hostnames', \FoundryCo\Cloudflare\Responses\Web3HostnameCreateWeb3Hostname::class, $request);
	}


	/**
	 * Web3 Hostname Details
	 */
	public function get(string $identifier): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier, \FoundryCo\Cloudflare\Responses\Web3HostnameWeb3HostnameDetails::class, []);
	}


	/**
	 * Edit Web3 Hostname
	 */
	public function update(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\Web3HostnameEditWeb3HostnameRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier, \FoundryCo\Cloudflare\Responses\Web3HostnameEditWeb3Hostname::class, $request);
	}


	/**
	 * Delete Web3 Hostname
	 */
	public function delete(string $identifier): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier);
	}


	/**
	 * IPFS Universal Path Gateway Content List Details
	 */
	public function contentList(string $identifier): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list', \FoundryCo\Cloudflare\Responses\Web3HostnameIpfsUniversalPathGatewayContentListDetails::class, []);
	}


	/**
	 * Update IPFS Universal Path Gateway Content List
	 */
	public function web3HostnameUpdateIpfsUniversalPathGatewayContentList(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\Web3HostnameUpdateIpfsUniversalPathGatewayContentListRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list', \FoundryCo\Cloudflare\Responses\Web3HostnameUpdateIpfsUniversalPathGatewayContentList::class, $request);
	}


	/**
	 * List IPFS Universal Path Gateway Content List Entries
	 */
	public function entries(string $identifier): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries', \FoundryCo\Cloudflare\Responses\Web3HostnameListIpfsUniversalPathGatewayContentListEntries::class, []);
	}


	/**
	 * Create IPFS Universal Path Gateway Content List Entry
	 */
	public function web3HostnameCreateIpfsUniversalPathGatewayContentListEntry(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\Web3HostnameCreateIpfsUniversalPathGatewayContentListEntryRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries', \FoundryCo\Cloudflare\Responses\Web3HostnameCreateIpfsUniversalPathGatewayContentListEntry::class, $request);
	}


	/**
	 * IPFS Universal Path Gateway Content List Entry Details
	 */
	public function web3HostnameIpfsUniversalPathGatewayContentListEntryDetails(
		string $contentListEntryIdentifier,
		string $identifier,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries/' . $contentListEntryIdentifier, \FoundryCo\Cloudflare\Responses\Web3HostnameIpfsUniversalPathGatewayContentListEntryDetails::class, []);
	}


	/**
	 * Edit IPFS Universal Path Gateway Content List Entry
	 */
	public function web3HostnameEditIpfsUniversalPathGatewayContentListEntry(
		string $contentListEntryIdentifier,
		string $identifier,
		\FoundryCo\Cloudflare\Requests\Web3HostnameEditIpfsUniversalPathGatewayContentListEntryRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries/' . $contentListEntryIdentifier, \FoundryCo\Cloudflare\Responses\Web3HostnameEditIpfsUniversalPathGatewayContentListEntry::class, $request);
	}


	/**
	 * Delete IPFS Universal Path Gateway Content List Entry
	 */
	public function web3HostnameDeleteIpfsUniversalPathGatewayContentListEntry(
		string $contentListEntryIdentifier,
		string $identifier,
	): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries/' . $contentListEntryIdentifier);
	}
}
