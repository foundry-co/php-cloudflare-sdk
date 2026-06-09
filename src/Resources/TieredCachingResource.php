<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TieredCachingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Tiered Caching setting
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\TieredCachingSetting
	{
		return $this->client->get('/zones/' . $this->zoneId . '/argo/tiered_caching', \FoundryCo\Cloudflare\Responses\TieredCachingSetting::class, []);
	}


	/**
	 * Patch Tiered Caching setting
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\TieredCachingPatchTieredCachingSettingRequest $request,
	): \FoundryCo\Cloudflare\Responses\TieredCachingSetting
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/argo/tiered_caching', \FoundryCo\Cloudflare\Responses\TieredCachingSetting::class, $request);
	}
}
