<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TagResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List indicators related to a tag
	 */
	public function get(
		string $tagUuid,
		string $datasetId,
		?float $page = null,
		?float $pageSize = null,
		?string $indicatorType = null,
		?array $relatedEvent = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/tags/' . $tagUuid . '/indicators', null, ['page' => $page ?? null, 'pageSize' => $pageSize ?? null, 'indicatorType' => $indicatorType ?? null, 'relatedEvent' => $relatedEvent ?? null]);
	}


	/**
	 * Lists all tags (SoT)
	 */
	public function list(
		?float $page = null,
		?float $pageSize = null,
		?string $search = null,
		?string $categoryUuid = null,
		?array $filters = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/tags', null, ['page' => $page ?? null, 'pageSize' => $pageSize ?? null, 'search' => $search ?? null, 'categoryUuid' => $categoryUuid ?? null, 'filters' => $filters ?? null]);
	}


	/**
	 * Creates a new tag
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostTagCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/tags/create', null, $request);
	}


	/**
	 * Updates a tag (SoT)
	 */
	public function update(string $tagUuid, \FoundryCo\Cloudflare\Requests\PatchTagUpdateRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/tags/' . $tagUuid, null, $request);
	}


	/**
	 * Deletes a tag (SoT)
	 */
	public function delete(string $tagUuid): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/tags/' . $tagUuid);
	}
}
