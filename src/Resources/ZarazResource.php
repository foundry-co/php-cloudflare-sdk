<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZarazResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Zaraz configuration
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/zaraz/config', \FoundryCo\Cloudflare\Responses\GetZonesZoneIdentifierZarazConfig::class, []);
	}


	/**
	 * Update Zaraz configuration
	 */
	public function update(\FoundryCo\Cloudflare\Requests\PutZonesZoneIdentifierZarazConfigRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/settings/zaraz/config', \FoundryCo\Cloudflare\Responses\PutZonesZoneIdentifierZarazConfig::class, $request);
	}


	/**
	 * Get default Zaraz configuration
	 */
	public function default(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/zaraz/default', \FoundryCo\Cloudflare\Responses\GetZonesZoneIdentifierZarazDefault::class, []);
	}


	/**
	 * Export Zaraz configuration
	 */
	public function export(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/zaraz/export', null, []);
	}


	/**
	 * List Zaraz historical configuration records
	 */
	public function history(
		?int $offset = null,
		?int $limit = null,
		?\FoundryCo\Cloudflare\Enums\ZarazSortField $sortField = null,
		?\FoundryCo\Cloudflare\Enums\ZarazSortOrder $sortOrder = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/zaraz/history', \FoundryCo\Cloudflare\Responses\GetZonesZoneIdentifierZarazHistory::class, ['offset' => $offset ?? null, 'limit' => $limit ?? null, 'sortField' => $sortField ?? null, 'sortOrder' => $sortOrder ?? null]);
	}


	/**
	 * Restore Zaraz historical configuration by ID
	 */
	public function putZonesZoneIdentifierZarazHistory(): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/settings/zaraz/history', \FoundryCo\Cloudflare\Responses\PutZonesZoneIdentifierZarazHistory::class, null);
	}


	/**
	 * Get Zaraz historical configurations by ID(s)
	 */
	public function configs(?array $ids = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/zaraz/history/configs', null, ['ids' => $ids ?? null]);
	}


	/**
	 * Publish Zaraz preview configuration
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/settings/zaraz/publish', null, null);
	}


	/**
	 * Get Zaraz workflow
	 */
	public function workflow(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/zaraz/workflow', \FoundryCo\Cloudflare\Enums\GetZonesZoneIdentifierZarazWorkflow::class, []);
	}


	/**
	 * Update Zaraz workflow
	 */
	public function putZonesZoneIdentifierZarazWorkflow(): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/settings/zaraz/workflow', \FoundryCo\Cloudflare\Enums\PutZonesZoneIdentifierZarazWorkflow::class, null);
	}
}
