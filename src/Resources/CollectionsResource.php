<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CollectionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List collections
	 */
	public function list(?float $page = null, ?float $limit = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections', \FoundryCo\Cloudflare\Responses\GetCollectionList::class, ['page' => $page ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Create a new collection
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections', \FoundryCo\Cloudflare\Responses\PostCollectionCreate::class, null);
	}


	/**
	 * Get collection
	 */
	public function get(string $collectionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId, \FoundryCo\Cloudflare\Responses\GetCollectionGet::class, []);
	}


	/**
	 * Update collection
	 */
	public function update(
		string $collectionId,
		\FoundryCo\Cloudflare\Requests\PatchCollectionUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId, \FoundryCo\Cloudflare\Responses\PatchCollectionUpdate::class, $request);
	}


	/**
	 * Delete collection
	 */
	public function delete(string $collectionId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId);
	}


	/**
	 * Add column to collection
	 */
	public function columns(string $collectionId, \FoundryCo\Cloudflare\Requests\PostColumnAddRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/columns', \FoundryCo\Cloudflare\Responses\PostColumnAdd::class, $request);
	}


	/**
	 * Update column
	 */
	public function patchColumnUpdate(
		string $collectionId,
		string $columnId,
		\FoundryCo\Cloudflare\Requests\PatchColumnUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/columns/' . $columnId, \FoundryCo\Cloudflare\Responses\PatchColumnUpdate::class, $request);
	}


	/**
	 * Delete column
	 */
	public function deleteColumnDelete(string $collectionId, string $columnId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/columns/' . $columnId);
	}


	/**
	 * Export collection to CSV, JSONL, or Markdown
	 */
	public function export(string $collectionId, ?bool $includeIds = null, ?string $accept = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/export', null, ['includeIds' => $includeIds ?? null, 'accept' => $accept ?? null]);
	}


	/**
	 * Query collection items
	 */
	public function items(string $collectionId, ?string $cursor = null, ?float $limit = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items', \FoundryCo\Cloudflare\Responses\GetItemQuery::class, ['cursor' => $cursor ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Get collection item
	 */
	public function getItemGet(string $collectionId, string $itemId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items/' . $itemId, \FoundryCo\Cloudflare\Responses\GetItemGet::class, []);
	}


	/**
	 * Update collection item
	 */
	public function patchItemUpdate(
		string $collectionId,
		string $itemId,
		\FoundryCo\Cloudflare\Requests\PatchItemUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items/' . $itemId, \FoundryCo\Cloudflare\Responses\PatchItemUpdate::class, $request);
	}


	/**
	 * Delete collection item
	 */
	public function deleteItemDelete(string $collectionId, string $itemId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items/' . $itemId);
	}
}
