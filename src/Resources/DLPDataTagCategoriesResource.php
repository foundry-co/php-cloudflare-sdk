<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPDataTagCategoriesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve all data tag categories in an account
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\DLPDataTagCategoriesList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_tag_categories', \FoundryCo\Cloudflare\Responses\DLPDataTagCategoriesList::class, []);
	}


	/**
	 * Creates a new data tag category.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpDataTagCategoriesCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPDataTagCategoriesCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/data_tag_categories', \FoundryCo\Cloudflare\Responses\DLPDataTagCategoriesCreate::class, $request);
	}


	/**
	 * Retrieve a specific data tag category.
	 */
	public function get(string $categoryId): \FoundryCo\Cloudflare\Responses\DLPDataTagCategoriesRead
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId, \FoundryCo\Cloudflare\Responses\DLPDataTagCategoriesRead::class, []);
	}


	/**
	 * Update the attributes of a single data tag category.
	 */
	public function update(
		string $categoryId,
		\FoundryCo\Cloudflare\Requests\DlpDataTagCategoriesUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPDataTagCategoriesUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId, \FoundryCo\Cloudflare\Responses\DLPDataTagCategoriesUpdate::class, $request);
	}


	/**
	 * Delete a single data tag category.
	 */
	public function delete(string $categoryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId);
	}
}
