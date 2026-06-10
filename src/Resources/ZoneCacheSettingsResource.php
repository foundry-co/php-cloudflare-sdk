<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneCacheSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Cache Reserve setting
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/cache_reserve', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsGetCacheReserveSetting::class, []);
	}


	/**
	 * Change Cache Reserve setting
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeCacheReserveSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/cache_reserve', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeCacheReserveSetting::class, $request);
	}


	/**
	 * Get Cache Reserve Clear
	 */
	public function cacheReserveClear(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/cache_reserve_clear', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsGetCacheReserveClear::class, []);
	}


	/**
	 * Start Cache Reserve Clear
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/cache/cache_reserve_clear', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsStartCacheReserveClear::class, null);
	}


	/**
	 * Get Regional Tiered Cache setting
	 */
	public function regionalTieredCache(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/regional_tiered_cache', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsGetRegionalTieredCacheSetting::class, []);
	}


	/**
	 * Change Regional Tiered Cache setting
	 */
	public function zoneCacheSettingsChangeRegionalTieredCacheSetting(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeRegionalTieredCacheSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/regional_tiered_cache', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeRegionalTieredCacheSetting::class, $request);
	}


	/**
	 * Get variants setting
	 */
	public function variants(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/variants', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsGetVariantsSetting::class, []);
	}


	/**
	 * Change variants setting
	 */
	public function zoneCacheSettingsChangeVariantsSetting(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeVariantsSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/variants', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeVariantsSetting::class, $request);
	}


	/**
	 * Delete variants setting
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/cache/variants');
	}
}
