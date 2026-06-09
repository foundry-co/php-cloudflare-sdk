<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TagcategoryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Lists all tag categories (SoT)
	 */
	public function list(?string $search = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/tags/categories', null, ['search' => $search ?? null]);
	}


	/**
	 * Creates a new tag category (SoT)
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostTagCategoryCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/tags/categories/create', null, $request);
	}


	/**
	 * Updates a tag category (SoT)
	 */
	public function update(
		string $categoryUuid,
		\FoundryCo\Cloudflare\Requests\PatchTagCategoryUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/tags/categories/' . $categoryUuid, null, $request);
	}


	/**
	 * Deletes a tag category (SoT)
	 */
	public function delete(string $categoryUuid): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/tags/categories/' . $categoryUuid);
	}
}
