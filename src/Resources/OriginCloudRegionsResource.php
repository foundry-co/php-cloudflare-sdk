<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class OriginCloudRegionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List origin cloud region mappings
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsList
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/origin_cloud_regions', \FoundryCo\Cloudflare\Responses\OriginCloudRegionsList::class, []);
	}


	/**
	 * Create an origin cloud region mapping
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\OriginCloudRegionsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsCreate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/cache/origin_cloud_regions', \FoundryCo\Cloudflare\Responses\OriginCloudRegionsCreate::class, $request);
	}


	/**
	 * Create or update an origin cloud region mapping
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\OriginCloudRegionsUpsertRequest $request,
	): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsUpsert
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/origin_cloud_regions', \FoundryCo\Cloudflare\Responses\OriginCloudRegionsUpsert::class, $request);
	}


	/**
	 * Batch create or update origin cloud region mappings
	 */
	public function batch(): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsUpsert
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/origin_cloud_regions/batch', \FoundryCo\Cloudflare\Responses\OriginCloudRegionsUpsert::class, null);
	}


	/**
	 * Batch delete origin cloud region mappings
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/cache/origin_cloud_regions/batch');
	}


	/**
	 * List supported cloud vendors and regions
	 */
	public function supportedRegions(): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsRegions
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/origin_cloud_regions/supported_regions', \FoundryCo\Cloudflare\Responses\OriginCloudRegionsRegions::class, []);
	}


	/**
	 * Get an origin cloud region mapping
	 */
	public function get(string $originIp): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/origin_cloud_regions/' . $originIp, \FoundryCo\Cloudflare\Responses\OriginCloudRegionsGet::class, []);
	}


	/**
	 * Delete an origin cloud region mapping
	 */
	public function originCloudRegions(string $originIp): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/cache/origin_cloud_regions/' . $originIp);
	}


	/**
	 * List origin cloud region mappings
	 */
	public function cloudRegions(
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin/cloud_regions', \FoundryCo\Cloudflare\Responses\OriginCloudRegionsList::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Batch create or replace origin cloud region mappings
	 */
	public function originCloudRegionsV2BatchUpsert(): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsUpsert
	{
		return $this->client->put('/zones/' . $this->zoneId . '/origin/cloud_regions/batch', \FoundryCo\Cloudflare\Responses\OriginCloudRegionsUpsert::class, null);
	}


	/**
	 * Batch delete origin cloud region mappings
	 */
	public function originCloudRegionsV2BatchDelete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/origin/cloud_regions/batch');
	}


	/**
	 * List supported cloud vendors and regions
	 */
	public function originCloudRegionsV2SupportedRegions(): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsRegions
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin/cloud_regions/supported_regions', \FoundryCo\Cloudflare\Responses\OriginCloudRegionsRegions::class, []);
	}


	/**
	 * Get an origin cloud region mapping
	 */
	public function originCloudRegionsV2Get(string $originIp): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin/cloud_regions/' . $originIp, \FoundryCo\Cloudflare\Responses\OriginCloudRegionsGet::class, []);
	}


	/**
	 * Create or replace an origin cloud region mapping
	 */
	public function originCloudRegionsV2Upsert(
		string $originIp,
		\FoundryCo\Cloudflare\Requests\OriginCloudRegionsV2UpsertRequest $request,
	): \FoundryCo\Cloudflare\Responses\OriginCloudRegionsUpsert
	{
		return $this->client->put('/zones/' . $this->zoneId . '/origin/cloud_regions/' . $originIp, \FoundryCo\Cloudflare\Responses\OriginCloudRegionsUpsert::class, $request);
	}


	/**
	 * Delete an origin cloud region mapping
	 */
	public function originCloudRegionsV2Delete(string $originIp): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/origin/cloud_regions/' . $originIp);
	}
}
