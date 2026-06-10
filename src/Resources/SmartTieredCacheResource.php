<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SmartTieredCacheResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Smart Tiered Cache setting
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/tiered_cache_smart_topology_enable', \FoundryCo\Cloudflare\Responses\SmartTieredCacheGetSmartTieredCacheSetting::class, []);
	}


	/**
	 * Create Smart Tiered Cache setting
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SmartTieredCacheCreateSmartTieredCacheSettingRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/cache/tiered_cache_smart_topology_enable', \FoundryCo\Cloudflare\Responses\SmartTieredCacheCreateSmartTieredCacheSetting::class, $request);
	}


	/**
	 * Patch Smart Tiered Cache setting
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\SmartTieredCachePatchSmartTieredCacheSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/tiered_cache_smart_topology_enable', \FoundryCo\Cloudflare\Responses\SmartTieredCachePatchSmartTieredCacheSetting::class, $request);
	}


	/**
	 * Delete Smart Tiered Cache setting
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/cache/tiered_cache_smart_topology_enable');
	}
}
