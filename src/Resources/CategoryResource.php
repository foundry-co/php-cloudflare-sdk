<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CategoryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Lists categories across multiple datasets
	 */
	public function list(?array $datasetIds = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/categories', null, ['datasetIds' => $datasetIds ?? null]);
	}


	/**
	 * Lists categories
	 */
	public function catalog(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/categories/catalog', null, []);
	}


	/**
	 * Creates a new category
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostCategoryCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/categories/create', null, $request);
	}


	/**
	 * Reads a category
	 */
	public function get(string $categoryId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/categories/' . $categoryId, null, []);
	}


	/**
	 * Updates a category
	 */
	public function categories(
		string $categoryId,
		\FoundryCo\Cloudflare\Requests\PostCategoryUpdateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/categories/' . $categoryId, null, $request);
	}


	/**
	 * Updates a category
	 */
	public function update(string $categoryId, \FoundryCo\Cloudflare\Requests\PatchCategoryUpdateRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/categories/' . $categoryId, null, $request);
	}


	/**
	 * Deletes a category
	 */
	public function delete(string $categoryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/categories/' . $categoryId);
	}


	/**
	 * List application categories
	 */
	public function getCategories(
		?int $limit = null,
		?int $offset = null,
	): \FoundryCo\Cloudflare\Responses\CategoryGetCategories
	{
		return $this->client->get('/accounts/' . $this->accountId . '/resource-library/categories', \FoundryCo\Cloudflare\Responses\CategoryGetCategories::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Get application category
	 */
	public function getCategoryById(string $id): \FoundryCo\Cloudflare\Responses\CategoryGetCategoryById
	{
		return $this->client->get('/accounts/' . $this->accountId . '/resource-library/categories/' . $id, \FoundryCo\Cloudflare\Responses\CategoryGetCategoryById::class, []);
	}
}
