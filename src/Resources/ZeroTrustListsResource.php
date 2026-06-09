<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustListsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Zero Trust lists
	 */
	public function list(
		?\FoundryCo\Cloudflare\Enums\ZeroTrustListsType $type = null,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustListsLists
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/lists', \FoundryCo\Cloudflare\Responses\ZeroTrustListsLists::class, ['type' => $type ?? null]);
	}


	/**
	 * Create Zero Trust list
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZeroTrustListsCreateZeroTrustListRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustListsList
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/lists', \FoundryCo\Cloudflare\Responses\ZeroTrustListsList::class, $request);
	}


	/**
	 * Create Zero Trust list from CSV
	 */
	public function upload(): \FoundryCo\Cloudflare\Responses\ZeroTrustListsCsv
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/lists/upload', \FoundryCo\Cloudflare\Responses\ZeroTrustListsCsv::class, null);
	}


	/**
	 * Get Zero Trust list details
	 */
	public function get(string $listId): \FoundryCo\Cloudflare\Responses\ZeroTrustListsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/lists/' . $listId, \FoundryCo\Cloudflare\Responses\ZeroTrustListsDetails::class, []);
	}


	/**
	 * Update Zero Trust list
	 */
	public function update(
		string $listId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustListsUpdateZeroTrustListRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustListsList
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/lists/' . $listId, \FoundryCo\Cloudflare\Responses\ZeroTrustListsList::class, $request);
	}


	/**
	 * Patch Zero Trust list.
	 */
	public function lists(
		string $listId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustListsPatchZeroTrustListRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustListsList
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/gateway/lists/' . $listId, \FoundryCo\Cloudflare\Responses\ZeroTrustListsList::class, $request);
	}


	/**
	 * Delete Zero Trust list
	 */
	public function delete(string $listId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/gateway/lists/' . $listId);
	}


	/**
	 * Get Zero Trust list items
	 */
	public function items(string $listId): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/lists/' . $listId . '/items', \FoundryCo\Cloudflare\Responses\ZeroTrustListsItems::class, []);
	}
}
