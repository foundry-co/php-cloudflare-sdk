<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AISearchInstancesItemsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Items List.
	 */
	public function get(
		string $id,
		string $name,
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\AISearchInstancesItemsSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\AISearchInstancesItemsStatus $status = null,
		?string $source = null,
		?string $metadataFilter = null,
		?string $itemId = null,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItems
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items', \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItems::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'sortBy' => $sortBy ?? null, 'status' => $status ?? null, 'source' => $source ?? null, 'metadataFilter' => $metadataFilter ?? null, 'itemId' => $itemId ?? null]);
	}


	/**
	 * Upload Item.
	 */
	public function create(string $id, string $name): \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items', \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem::class, null);
	}


	/**
	 * Create or Update Item.
	 */
	public function update(
		string $id,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceInstanceCreateOrUpdateItemRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items', \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem::class, $request);
	}


	/**
	 * Get Item.
	 */
	public function items(
		string $id,
		string $itemId,
		string $name,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items/' . $itemId, \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem::class, []);
	}


	/**
	 * Sync Item.
	 */
	public function aiSearchNamespaceInstanceSyncItem(
		string $id,
		string $itemId,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceInstanceSyncItemRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items/' . $itemId, \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem::class, $request);
	}


	/**
	 * Delete Item.
	 */
	public function delete(string $id, string $itemId, string $name): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items/' . $itemId);
	}


	/**
	 * List Item Chunks.
	 */
	public function chunks(
		string $id,
		string $itemId,
		string $name,
		?int $limit = null,
		?int $offset = null,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsChunks
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items/' . $itemId . '/chunks', \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsChunks::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Download Item Content.
	 */
	public function download(string $id, string $itemId, string $name): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items/' . $itemId . '/download', null, []);
	}


	/**
	 * Item Logs.
	 */
	public function logs(
		string $id,
		string $itemId,
		string $name,
		?int $limit = null,
		?string $cursor = null,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/items/' . $itemId . '/logs', \FoundryCo\Cloudflare\Responses\AISearchInstancesItemsItem::class, ['limit' => $limit ?? null, 'cursor' => $cursor ?? null]);
	}
}
