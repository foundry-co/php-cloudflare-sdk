<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/cache_reserve', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting::class, []);
	}


	/**
	 * Change Cache Reserve setting
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeCacheReserveSettingRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/cache_reserve', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting::class, $request);
	}


	/**
	 * Get Cache Reserve Clear
	 */
	public function cacheReserveClear(): \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsClear
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/cache_reserve_clear', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsClear::class, []);
	}


	/**
	 * Start Cache Reserve Clear
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsClear
	{
		return $this->client->post('/zones/' . $this->zoneId . '/cache/cache_reserve_clear', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsClear::class, null);
	}


	/**
	 * Get Regional Tiered Cache setting
	 */
	public function regionalTieredCache(): \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/regional_tiered_cache', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting::class, []);
	}


	/**
	 * Change Regional Tiered Cache setting
	 */
	public function zoneCacheSettingsChangeRegionalTieredCacheSetting(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeRegionalTieredCacheSettingRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/regional_tiered_cache', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting::class, $request);
	}


	/**
	 * Get variants setting
	 */
	public function variants(): \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/variants', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting::class, []);
	}


	/**
	 * Change variants setting
	 */
	public function zoneCacheSettingsChangeVariantsSetting(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeVariantsSettingRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/cache/variants', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsSetting::class, $request);
	}


	/**
	 * Delete variants setting
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/cache/variants');
	}
}
