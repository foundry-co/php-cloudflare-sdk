<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class FiltersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List filters
	 */
	public function list(
		mixed $paused = null,
		?string $expression = null,
		?string $description = null,
		?string $ref = null,
		?float $page = null,
		?float $perPage = null,
		?string $id = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/filters', \FoundryCo\Cloudflare\Responses\FiltersListFilters::class, ['paused' => $paused ?? null, 'expression' => $expression ?? null, 'description' => $description ?? null, 'ref' => $ref ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'id' => $id ?? null]);
	}


	/**
	 * Create filters
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/filters', null, null);
	}


	/**
	 * Update filters
	 */
	public function update(): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/filters', \FoundryCo\Cloudflare\Responses\FiltersUpdateFilters::class, null);
	}


	/**
	 * Delete filters
	 */
	public function delete(?array $id = null): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/filters');
	}


	/**
	 * Get a filter
	 */
	public function get(string $filterId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\FiltersGetAFilter::class, []);
	}


	/**
	 * Update a filter
	 */
	public function filters(string $filterId, \FoundryCo\Cloudflare\Requests\FiltersUpdateAFilterRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\FiltersUpdateAFilter::class, $request);
	}


	/**
	 * Delete a filter
	 */
	public function filtersDeleteAFilter(string $filterId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/filters/' . $filterId);
	}
}
