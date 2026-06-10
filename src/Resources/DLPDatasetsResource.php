<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPDatasetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch all datasets
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/datasets', \FoundryCo\Cloudflare\Responses\DlpDatasetsReadAll::class, []);
	}


	/**
	 * Create a new dataset
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpDatasetsCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets', \FoundryCo\Cloudflare\Responses\DlpDatasetsCreate::class, $request);
	}


	/**
	 * Fetch a specific dataset
	 */
	public function get(string $datasetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\DlpDatasetsRead::class, []);
	}


	/**
	 * Update details about a dataset
	 */
	public function update(string $datasetId, \FoundryCo\Cloudflare\Requests\DlpDatasetsUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\DlpDatasetsUpdate::class, $request);
	}


	/**
	 * Delete a dataset
	 */
	public function delete(string $datasetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId);
	}


	/**
	 * Prepare to upload a new version of a dataset
	 */
	public function upload(string $datasetId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId . '/upload', \FoundryCo\Cloudflare\Responses\DlpDatasetsCreateVersion::class, null);
	}


	/**
	 * Upload a new version of a dataset
	 */
	public function dlpDatasetsUploadVersion(string $datasetId, int $version): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId . '/upload/' . $version, \FoundryCo\Cloudflare\Responses\DlpDatasetsUploadVersion::class, null);
	}


	/**
	 * Sets the column information for a multi-column upload
	 */
	public function versions(string $datasetId, int $version): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId . '/versions/' . $version, \FoundryCo\Cloudflare\Responses\DlpDatasetsDefineColumns::class, null);
	}


	/**
	 * Upload a new version of a multi-column dataset
	 */
	public function entries(string $datasetId, int $version, string $entryId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId . '/versions/' . $version . '/entries/' . $entryId, \FoundryCo\Cloudflare\Responses\DlpDatasetsUploadDatasetColumn::class, null);
	}
}
