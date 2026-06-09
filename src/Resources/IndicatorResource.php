<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IndicatorResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Lists indicators
	 */
	public function get(
		string $datasetId,
		?float $page = null,
		?float $pageSize = null,
		?string $name = null,
		?string $indicatorType = null,
		?array $relatedEvent = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/indicators', null, ['page' => $page ?? null, 'pageSize' => $pageSize ?? null, 'name' => $name ?? null, 'indicatorType' => $indicatorType ?? null, 'relatedEvent' => $relatedEvent ?? null]);
	}


	/**
	 * Creates multiple indicators in bulk
	 */
	public function create(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\PostIndicatorCreateBulkRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/indicators/bulk', null, $request);
	}


	/**
	 * Creates a new indicator
	 */
	public function postIndicatorCreate(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\PostIndicatorCreateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/indicators/create', null, $request);
	}


	/**
	 * List mirrored tags for an indicator dataset
	 */
	public function tags(string $datasetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/indicators/tags', null, []);
	}


	/**
	 * Reads an indicator
	 */
	public function indicators(string $datasetId, string $indicatorId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/indicators/' . $indicatorId, null, []);
	}


	/**
	 * Updates an indicator
	 */
	public function update(
		string $datasetId,
		string $indicatorId,
		\FoundryCo\Cloudflare\Requests\PatchIndicatorUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/indicators/' . $indicatorId, null, $request);
	}


	/**
	 * Deletes an indicator
	 */
	public function delete(string $datasetId, string $indicatorId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/indicators/' . $indicatorId);
	}


	/**
	 * Lists indicators across multiple datasets
	 */
	public function list(
		?array $datasetIds = null,
		?float $page = null,
		?float $pageSize = null,
		?array $search = null,
		?string $name = null,
		?string $indicatorType = null,
		?array $relatedEvents = null,
		?array $tags = null,
		?array $tagSearch = null,
		?\DateTimeImmutable $createdAfter = null,
		?\DateTimeImmutable $createdBefore = null,
		?float $relatedEventsLimit = null,
		?bool $includeTags = null,
		?bool $includeTotalCount = null,
		?\FoundryCo\Cloudflare\Enums\IndicatorFormat $format = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/indicators', null, ['datasetIds' => $datasetIds ?? null, 'page' => $page ?? null, 'pageSize' => $pageSize ?? null, 'search' => $search ?? null, 'name' => $name ?? null, 'indicatorType' => $indicatorType ?? null, 'relatedEvents' => $relatedEvents ?? null, 'tags' => $tags ?? null, 'tagSearch' => $tagSearch ?? null, 'createdAfter' => $createdAfter ?? null, 'createdBefore' => $createdBefore ?? null, 'relatedEventsLimit' => $relatedEventsLimit ?? null, 'includeTags' => $includeTags ?? null, 'includeTotalCount' => $includeTotalCount ?? null, 'format' => $format ?? null]);
	}
}
