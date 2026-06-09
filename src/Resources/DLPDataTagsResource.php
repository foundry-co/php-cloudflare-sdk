<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPDataTagsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve all data tags in a data tag category
	 */
	public function get(string $categoryId): \FoundryCo\Cloudflare\Responses\DLPDataTagsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags', \FoundryCo\Cloudflare\Responses\DLPDataTagsList::class, []);
	}


	/**
	 * Creates a new data tag.
	 */
	public function create(
		string $categoryId,
		\FoundryCo\Cloudflare\Requests\DlpDataTagsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPDataTagsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags', \FoundryCo\Cloudflare\Responses\DLPDataTagsCreate::class, $request);
	}


	/**
	 * Retrieve a specific data tag.
	 */
	public function dataTags(string $categoryId, string $tagId): \FoundryCo\Cloudflare\Responses\DLPDataTagsRead
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags/' . $tagId, \FoundryCo\Cloudflare\Responses\DLPDataTagsRead::class, []);
	}


	/**
	 * Update the attributes of a single data tag.
	 */
	public function update(
		string $categoryId,
		string $tagId,
		\FoundryCo\Cloudflare\Requests\DlpDataTagsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPDataTagsUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags/' . $tagId, \FoundryCo\Cloudflare\Responses\DLPDataTagsUpdate::class, $request);
	}


	/**
	 * Delete a single data tag.
	 */
	public function delete(string $categoryId, string $tagId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags/' . $tagId);
	}
}
