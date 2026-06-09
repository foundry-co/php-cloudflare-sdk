<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\DLPDatasetsAll
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/datasets', \FoundryCo\Cloudflare\Responses\DLPDatasetsAll::class, []);
	}


	/**
	 * Create a new dataset
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpDatasetsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPDatasetsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets', \FoundryCo\Cloudflare\Responses\DLPDatasetsCreate::class, $request);
	}


	/**
	 * Fetch a specific dataset
	 */
	public function get(string $datasetId): \FoundryCo\Cloudflare\Responses\DLPDatasetsRead
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\DLPDatasetsRead::class, []);
	}


	/**
	 * Update details about a dataset
	 */
	public function update(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\DlpDatasetsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPDatasetsUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\DLPDatasetsUpdate::class, $request);
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
	public function upload(string $datasetId): \FoundryCo\Cloudflare\Responses\DLPDatasetsVersion
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId . '/upload', \FoundryCo\Cloudflare\Responses\DLPDatasetsVersion::class, null);
	}


	/**
	 * Upload a new version of a dataset
	 */
	public function dlpDatasetsUploadVersion(
		string $datasetId,
		int $version,
	): \FoundryCo\Cloudflare\Responses\DLPDatasetsVersion
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId . '/upload/' . $version, \FoundryCo\Cloudflare\Responses\DLPDatasetsVersion::class, null);
	}


	/**
	 * Sets the column information for a multi-column upload
	 */
	public function versions(string $datasetId, int $version): \FoundryCo\Cloudflare\Responses\DLPDatasetsColumns
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId . '/versions/' . $version, \FoundryCo\Cloudflare\Responses\DLPDatasetsColumns::class, null);
	}


	/**
	 * Upload a new version of a multi-column dataset
	 */
	public function entries(
		string $datasetId,
		int $version,
		string $entryId,
	): \FoundryCo\Cloudflare\Responses\DLPDatasetsColumn
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/datasets/' . $datasetId . '/versions/' . $version . '/entries/' . $entryId, \FoundryCo\Cloudflare\Responses\DLPDatasetsColumn::class, null);
	}
}
