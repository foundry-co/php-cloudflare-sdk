<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PerHostnameTLSSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List TLS setting for hostnames
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\PerHostnameTLSSettingsSettingId $settingId,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/zones/' . $this->zoneId . '/hostnames/settings/' . $settingId, \FoundryCo\Cloudflare\Responses\PerHostnameTLSSettingsList::class, []);
	}


	/**
	 * Get TLS setting for hostname
	 */
	public function settings(
		\FoundryCo\Cloudflare\Enums\PerHostnameTLSSettingsSettingId $settingId,
		string $hostname,
	): \FoundryCo\Cloudflare\Responses\PerHostnameTLSSettingsGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/hostnames/settings/' . $settingId . '/' . $hostname, \FoundryCo\Cloudflare\Responses\PerHostnameTLSSettingsGet::class, []);
	}


	/**
	 * Edit TLS setting for hostname
	 */
	public function update(
		\FoundryCo\Cloudflare\Enums\PerHostnameTLSSettingsSettingId $settingId,
		string $hostname,
		\FoundryCo\Cloudflare\Requests\PerHostnameTlsSettingsPutRequest $request,
	): \FoundryCo\Cloudflare\Responses\PerHostnameTLSSettingsPut
	{
		return $this->client->put('/zones/' . $this->zoneId . '/hostnames/settings/' . $settingId . '/' . $hostname, \FoundryCo\Cloudflare\Responses\PerHostnameTLSSettingsPut::class, $request);
	}


	/**
	 * Delete TLS setting for hostname
	 */
	public function delete(
		\FoundryCo\Cloudflare\Enums\PerHostnameTLSSettingsSettingId $settingId,
		string $hostname,
	): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/hostnames/settings/' . $settingId . '/' . $hostname);
	}
}
