<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function get(string $categoryId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags', \FoundryCo\Cloudflare\Responses\DlpDataTagsList::class, []);
	}


	/**
	 * Creates a new data tag.
	 */
	public function create(string $categoryId, \FoundryCo\Cloudflare\Requests\DlpDataTagsCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags', \FoundryCo\Cloudflare\Responses\DlpDataTagsCreate::class, $request);
	}


	/**
	 * Retrieve a specific data tag.
	 */
	public function dataTags(string $categoryId, string $tagId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags/' . $tagId, \FoundryCo\Cloudflare\Responses\DlpDataTagsRead::class, []);
	}


	/**
	 * Update the attributes of a single data tag.
	 */
	public function update(
		string $categoryId,
		string $tagId,
		\FoundryCo\Cloudflare\Requests\DlpDataTagsUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags/' . $tagId, \FoundryCo\Cloudflare\Responses\DlpDataTagsUpdate::class, $request);
	}


	/**
	 * Delete a single data tag.
	 */
	public function delete(string $categoryId, string $tagId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/data_tag_categories/' . $categoryId . '/data_tags/' . $tagId);
	}
}
