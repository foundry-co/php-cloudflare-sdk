<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DatasetResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Lists all datasets in an account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset', null, []);
	}


	/**
	 * Creates a dataset
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostDatasetCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/create', null, $request);
	}


	/**
	 * Reads a dataset
	 */
	public function get(string $datasetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId, null, []);
	}


	/**
	 * Updates an existing dataset
	 */
	public function dataset(string $datasetId, \FoundryCo\Cloudflare\Requests\PostDatasetUpdateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId, null, $request);
	}


	/**
	 * Updates an existing dataset
	 */
	public function update(string $datasetId, \FoundryCo\Cloudflare\Requests\PatchDatasetUpdateRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId, null, $request);
	}


	/**
	 * Delete a dataset
	 */
	public function delete(string $datasetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId);
	}
}
