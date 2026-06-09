<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\Web3HostnameHostnames
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames', \FoundryCo\Cloudflare\Responses\Web3HostnameHostnames::class, []);
	}


	/**
	 * Create Web3 Hostname
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\Web3HostnameCreateWeb3HostnameRequest $request,
	): \FoundryCo\Cloudflare\Responses\Web3HostnameHostname
	{
		return $this->client->post('/zones/' . $this->zoneId . '/web3/hostnames', \FoundryCo\Cloudflare\Responses\Web3HostnameHostname::class, $request);
	}


	/**
	 * Web3 Hostname Details
	 */
	public function get(string $identifier): \FoundryCo\Cloudflare\Responses\Web3HostnameDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier, \FoundryCo\Cloudflare\Responses\Web3HostnameDetails::class, []);
	}


	/**
	 * Edit Web3 Hostname
	 */
	public function update(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\Web3HostnameEditWeb3HostnameRequest $request,
	): \FoundryCo\Cloudflare\Responses\Web3HostnameHostname
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier, \FoundryCo\Cloudflare\Responses\Web3HostnameHostname::class, $request);
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
	public function contentList(string $identifier): \FoundryCo\Cloudflare\Responses\Web3HostnameDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list', \FoundryCo\Cloudflare\Responses\Web3HostnameDetails::class, []);
	}


	/**
	 * Update IPFS Universal Path Gateway Content List
	 */
	public function web3HostnameUpdateIpfsUniversalPathGatewayContentList(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\Web3HostnameUpdateIpfsUniversalPathGatewayContentListRequest $request,
	): \FoundryCo\Cloudflare\Responses\Web3HostnameList
	{
		return $this->client->put('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list', \FoundryCo\Cloudflare\Responses\Web3HostnameList::class, $request);
	}


	/**
	 * List IPFS Universal Path Gateway Content List Entries
	 */
	public function entries(string $identifier): \FoundryCo\Cloudflare\Responses\Web3HostnameEntries
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries', \FoundryCo\Cloudflare\Responses\Web3HostnameEntries::class, []);
	}


	/**
	 * Create IPFS Universal Path Gateway Content List Entry
	 */
	public function web3HostnameCreateIpfsUniversalPathGatewayContentListEntry(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\Web3HostnameCreateIpfsUniversalPathGatewayContentListEntryRequest $request,
	): \FoundryCo\Cloudflare\Responses\Web3HostnameEntry
	{
		return $this->client->post('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries', \FoundryCo\Cloudflare\Responses\Web3HostnameEntry::class, $request);
	}


	/**
	 * IPFS Universal Path Gateway Content List Entry Details
	 */
	public function web3HostnameIpfsUniversalPathGatewayContentListEntryDetails(
		string $contentListEntryIdentifier,
		string $identifier,
	): \FoundryCo\Cloudflare\Responses\Web3HostnameDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries/' . $contentListEntryIdentifier, \FoundryCo\Cloudflare\Responses\Web3HostnameDetails::class, []);
	}


	/**
	 * Edit IPFS Universal Path Gateway Content List Entry
	 */
	public function web3HostnameEditIpfsUniversalPathGatewayContentListEntry(
		string $contentListEntryIdentifier,
		string $identifier,
		\FoundryCo\Cloudflare\Requests\Web3HostnameEditIpfsUniversalPathGatewayContentListEntryRequest $request,
	): \FoundryCo\Cloudflare\Responses\Web3HostnameEntry
	{
		return $this->client->put('/zones/' . $this->zoneId . '/web3/hostnames/' . $identifier . '/ipfs_universal_path/content_list/entries/' . $contentListEntryIdentifier, \FoundryCo\Cloudflare\Responses\Web3HostnameEntry::class, $request);
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
