<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(?bool $includeZones = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/explorer/datasets', \FoundryCo\Cloudflare\Responses\AccountsLogsExplorerDatasetsList::class, ['includeZones' => $includeZones ?? null]);
	}


	/**
	 * Create an account dataset
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountsLogsExplorerDatasetsCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/logs/explorer/datasets', \FoundryCo\Cloudflare\Responses\AccountsLogsExplorerDatasetsCreate::class, $request);
	}


	/**
	 * List available account datasets
	 */
	public function available(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/explorer/datasets/available', \FoundryCo\Cloudflare\Responses\AccountsLogsExplorerDatasetsAvailableList::class, []);
	}


	/**
	 * Get an account dataset
	 */
	public function get(string $datasetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/explorer/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\AccountsLogsExplorerDatasetsGet::class, []);
	}


	/**
	 * Update an account dataset
	 */
	public function update(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\AccountsLogsExplorerDatasetsUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/logs/explorer/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\AccountsLogsExplorerDatasetsUpdate::class, $request);
	}


	/**
	 * List zone datasets
	 */
	public function datasets(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/explorer/datasets', \FoundryCo\Cloudflare\Responses\ZonesLogsExplorerDatasetsList::class, []);
	}


	/**
	 * Create a zone dataset
	 */
	public function zonesLogsExplorerDatasetsCreate(
		\FoundryCo\Cloudflare\Requests\ZonesLogsExplorerDatasetsCreateRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logs/explorer/datasets', \FoundryCo\Cloudflare\Responses\ZonesLogsExplorerDatasetsCreate::class, $request);
	}


	/**
	 * List available zone datasets
	 */
	public function zonesLogsExplorerDatasetsAvailableList(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/explorer/datasets/available', \FoundryCo\Cloudflare\Responses\ZonesLogsExplorerDatasetsAvailableList::class, []);
	}


	/**
	 * Get a zone dataset
	 */
	public function zonesLogsExplorerDatasetsGet(string $datasetId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/explorer/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\ZonesLogsExplorerDatasetsGet::class, []);
	}


	/**
	 * Update a zone dataset
	 */
	public function zonesLogsExplorerDatasetsUpdate(
		string $datasetId,
		\FoundryCo\Cloudflare\Requests\ZonesLogsExplorerDatasetsUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/logs/explorer/datasets/' . $datasetId, \FoundryCo\Cloudflare\Responses\ZonesLogsExplorerDatasetsUpdate::class, $request);
	}
}
