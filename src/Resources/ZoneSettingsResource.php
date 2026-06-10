<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get all zone settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings', null, []);
	}


	/**
	 * Edit multiple zone settings
	 */
	public function update(): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings', null, null);
	}


	/**
	 * Get aegis setting
	 */
	public function aegis(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/aegis', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsGetAegisSetting::class, []);
	}


	/**
	 * Change aegis setting
	 */
	public function zoneCacheSettingsChangeAegisSetting(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeAegisSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/aegis', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeAegisSetting::class, $request);
	}


	/**
	 * Get Cloudflare Fonts setting
	 */
	public function fonts(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/fonts', \FoundryCo\Cloudflare\Responses\ZoneSettingsGetFontsSetting::class, []);
	}


	/**
	 * Change Cloudflare Fonts setting
	 */
	public function zoneSettingsChangeFontsSetting(
		\FoundryCo\Cloudflare\Requests\ZoneSettingsChangeFontsSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/fonts', \FoundryCo\Cloudflare\Responses\ZoneSettingsChangeFontsSetting::class, $request);
	}


	/**
	 * Get Origin H2 Max Streams Setting
	 */
	public function originH2MaxStreams(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/origin_h2_max_streams', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsGetOriginH2MaxStreamsSetting::class, []);
	}


	/**
	 * Change Origin H2 Max Streams Setting
	 */
	public function zoneCacheSettingsChangeOriginH2MaxStreamsSetting(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeOriginH2MaxStreamsSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/origin_h2_max_streams', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeOriginH2MaxStreamsSetting::class, $request);
	}


	/**
	 * Get Origin Max HTTP Version Setting
	 */
	public function originMaxHttpVersion(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/origin_max_http_version', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsGetOriginMaxHttpVersionSetting::class, []);
	}


	/**
	 * Change Origin Max HTTP Version Setting
	 */
	public function zoneCacheSettingsChangeOriginMaxHttpVersionSetting(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeOriginMaxHttpVersionSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/origin_max_http_version', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeOriginMaxHttpVersionSetting::class, $request);
	}


	/**
	 * Get Cloudflare Speed Brain setting
	 */
	public function speedBrain(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/speed_brain', \FoundryCo\Cloudflare\Responses\ZoneSettingsGetSpeedBrainSetting::class, []);
	}


	/**
	 * Change Cloudflare Speed Brain setting
	 */
	public function zoneSettingsChangeSpeedBrainSetting(
		\FoundryCo\Cloudflare\Requests\ZoneSettingsChangeSpeedBrainSettingRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/speed_brain', \FoundryCo\Cloudflare\Responses\ZoneSettingsChangeSpeedBrainSetting::class, $request);
	}


	/**
	 * Get zone setting
	 */
	public function get(string $settingId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/' . $settingId, null, []);
	}


	/**
	 * Edit zone setting
	 */
	public function settings(string $settingId): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/' . $settingId, null, null);
	}
}
