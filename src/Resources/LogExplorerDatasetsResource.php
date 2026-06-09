<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LogExplorerDatasetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List account datasets
	 */
	public function list(?bool $includeZones = null): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/explorer/datasets', \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsList::class, ['includeZones' => $includeZones ?? null]);
	}


	/**
	 * Create an account dataset
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccountsLogsExplorerDatasetsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/logs/explorer/datasets', \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsCreate::class, $request);
	}


	/**
	 * List available account datasets
	 */
	public function available(): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/explorer/datasets/available', \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsList::class, []);
	}


	/**
	 * Get an account dataset
	 */
	public function get(string $datasetId): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/explorer/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsGet::class, []);
	}


	/**
	 * Update an account dataset
	 */
	public function update(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\AccountsLogsExplorerDatasetsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/logs/explorer/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsUpdate::class, $request);
	}


	/**
	 * List zone datasets
	 */
	public function datasets(): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsList
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/explorer/datasets', \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsList::class, []);
	}


	/**
	 * Create a zone dataset
	 */
	public function zonesLogsExplorerDatasetsCreate(
		\FoundryCo\Cloudflare\Requests\ZonesLogsExplorerDatasetsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsCreate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logs/explorer/datasets', \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsCreate::class, $request);
	}


	/**
	 * List available zone datasets
	 */
	public function zonesLogsExplorerDatasetsAvailableList(): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsList
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/explorer/datasets/available', \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsList::class, []);
	}


	/**
	 * Get a zone dataset
	 */
	public function zonesLogsExplorerDatasetsGet(
		string $datasetId,
	): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/explorer/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsGet::class, []);
	}


	/**
	 * Update a zone dataset
	 */
	public function zonesLogsExplorerDatasetsUpdate(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\ZonesLogsExplorerDatasetsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsUpdate
	{
		return $this->client->put('/zones/' . $this->zoneId . '/logs/explorer/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\LogExplorerDatasetsUpdate::class, $request);
	}
}
