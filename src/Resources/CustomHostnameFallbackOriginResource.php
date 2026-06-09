<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomHostnameFallbackOriginResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Fallback Origin for Custom Hostnames
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\CustomHostnameFallbackOriginForAZoneHostnames
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_hostnames/fallback_origin', \FoundryCo\Cloudflare\Responses\CustomHostnameFallbackOriginForAZoneHostnames::class, []);
	}


	/**
	 * Update Fallback Origin for Custom Hostnames
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\CustomHostnameFallbackOriginForAZoneUpdateFallbackOriginForCustomHostnamesRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomHostnameFallbackOriginForAZoneHostnames
	{
		return $this->client->put('/zones/' . $this->zoneId . '/custom_hostnames/fallback_origin', \FoundryCo\Cloudflare\Responses\CustomHostnameFallbackOriginForAZoneHostnames::class, $request);
	}


	/**
	 * Delete Fallback Origin for Custom Hostnames
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/custom_hostnames/fallback_origin');
	}
}
