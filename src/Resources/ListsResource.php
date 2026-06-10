<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ListsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get lists
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rules/lists', \FoundryCo\Cloudflare\Responses\ListsGetLists::class, []);
	}


	/**
	 * Create a list
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ListsCreateAListRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/rules/lists', \FoundryCo\Cloudflare\Responses\ListsCreateAList::class, $request);
	}


	/**
	 * Get bulk operation status
	 */
	public function get(string $operationId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rules/lists/bulk_operations/' . $operationId, null, []);
	}


	/**
	 * Get a list
	 */
	public function lists(string $listId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rules/lists/' . $listId, \FoundryCo\Cloudflare\Responses\ListsGetAList::class, []);
	}


	/**
	 * Update a list
	 */
	public function update(string $listId, \FoundryCo\Cloudflare\Requests\ListsUpdateAListRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/rules/lists/' . $listId, \FoundryCo\Cloudflare\Responses\ListsUpdateAList::class, $request);
	}


	/**
	 * Delete a list
	 */
	public function delete(string $listId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/rules/lists/' . $listId);
	}


	/**
	 * Get list items
	 */
	public function items(string $listId, ?string $cursor = null, ?int $perPage = null, ?string $search = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rules/lists/' . $listId . '/items', null, ['cursor' => $cursor ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create list items
	 */
	public function listsCreateListItems(string $listId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/rules/lists/' . $listId . '/items', \FoundryCo\Cloudflare\Responses\ListsCreateListItems::class, null);
	}


	/**
	 * Update all list items
	 */
	public function listsUpdateAllListItems(string $listId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/rules/lists/' . $listId . '/items', \FoundryCo\Cloudflare\Responses\ListsUpdateAllListItems::class, null);
	}


	/**
	 * Delete list items
	 */
	public function listsDeleteListItems(
		string $listId,
		\FoundryCo\Cloudflare\Requests\ListsDeleteListItemsRequest $request,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/rules/lists/' . $listId . '/items');
	}


	/**
	 * Get a list item
	 */
	public function listsGetAListItem(string $itemId, string $listId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rules/lists/' . $listId . '/items/' . $itemId, null, []);
	}
}
