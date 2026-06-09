<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(
		?float $page = null,
		?float $limit = null,
	): \FoundryCo\Cloudflare\Responses\CollectionsCollectionList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections', \FoundryCo\Cloudflare\Responses\CollectionsCollectionList::class, ['page' => $page ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Create a new collection
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\CollectionsCollectionCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections', \FoundryCo\Cloudflare\Responses\CollectionsCollectionCreate::class, null);
	}


	/**
	 * Get collection
	 */
	public function get(string $collectionId): \FoundryCo\Cloudflare\Responses\CollectionsCollectionGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId, \FoundryCo\Cloudflare\Responses\CollectionsCollectionGet::class, []);
	}


	/**
	 * Update collection
	 */
	public function update(
		string $collectionId,
		\FoundryCo\Cloudflare\Requests\PatchCollectionUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\CollectionsCollectionUpdate
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId, \FoundryCo\Cloudflare\Responses\CollectionsCollectionUpdate::class, $request);
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
	public function columns(
		string $collectionId,
		\FoundryCo\Cloudflare\Requests\PostColumnAddRequest $request,
	): \FoundryCo\Cloudflare\Responses\CollectionsColumnAdd
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/columns', \FoundryCo\Cloudflare\Responses\CollectionsColumnAdd::class, $request);
	}


	/**
	 * Update column
	 */
	public function patchColumnUpdate(
		string $collectionId,
		string $columnId,
		\FoundryCo\Cloudflare\Requests\PatchColumnUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\CollectionsColumnUpdate
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/columns/' . $columnId, \FoundryCo\Cloudflare\Responses\CollectionsColumnUpdate::class, $request);
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
	public function items(
		string $collectionId,
		?string $cursor = null,
		?float $limit = null,
	): \FoundryCo\Cloudflare\Responses\CollectionsItemQuery
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items', \FoundryCo\Cloudflare\Responses\CollectionsItemQuery::class, ['cursor' => $cursor ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Get collection item
	 */
	public function getItemGet(string $collectionId, string $itemId): \FoundryCo\Cloudflare\Responses\CollectionsItemGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items/' . $itemId, \FoundryCo\Cloudflare\Responses\CollectionsItemGet::class, []);
	}


	/**
	 * Update collection item
	 */
	public function patchItemUpdate(
		string $collectionId,
		string $itemId,
		\FoundryCo\Cloudflare\Requests\PatchItemUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\CollectionsItemUpdate
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items/' . $itemId, \FoundryCo\Cloudflare\Responses\CollectionsItemUpdate::class, $request);
	}


	/**
	 * Delete collection item
	 */
	public function deleteItemDelete(string $collectionId, string $itemId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items/' . $itemId);
	}
}
