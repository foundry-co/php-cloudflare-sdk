<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(?\FoundryCo\Cloudflare\Enums\ZeroTrustListsType $type = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/lists', \FoundryCo\Cloudflare\Responses\ZeroTrustListsListZeroTrustLists::class, ['type' => $type ?? null]);
	}


	/**
	 * Create Zero Trust list
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ZeroTrustListsCreateZeroTrustListRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/lists', \FoundryCo\Cloudflare\Responses\ZeroTrustListsCreateZeroTrustList::class, $request);
	}


	/**
	 * Create Zero Trust list from CSV
	 */
	public function upload(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/lists/upload', \FoundryCo\Cloudflare\Responses\ZeroTrustListsCreateZeroTrustListFromCsv::class, null);
	}


	/**
	 * Get Zero Trust list details
	 */
	public function get(string $listId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/lists/' . $listId, \FoundryCo\Cloudflare\Responses\ZeroTrustListsZeroTrustListDetails::class, []);
	}


	/**
	 * Update Zero Trust list
	 */
	public function update(
		string $listId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustListsUpdateZeroTrustListRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/lists/' . $listId, \FoundryCo\Cloudflare\Responses\ZeroTrustListsUpdateZeroTrustList::class, $request);
	}


	/**
	 * Patch Zero Trust list.
	 */
	public function lists(
		string $listId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustListsPatchZeroTrustListRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/gateway/lists/' . $listId, \FoundryCo\Cloudflare\Responses\ZeroTrustListsPatchZeroTrustList::class, $request);
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
	public function items(string $listId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/lists/' . $listId . '/items', \FoundryCo\Cloudflare\Responses\ZeroTrustListsZeroTrustListItems::class, []);
	}
}
