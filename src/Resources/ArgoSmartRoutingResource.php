<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ArgoSmartRoutingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Argo Smart Routing setting
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ArgoSmartRoutingSetting
	{
		return $this->client->get('/zones/' . $this->zoneId . '/argo/smart_routing', \FoundryCo\Cloudflare\Responses\ArgoSmartRoutingSetting::class, []);
	}


	/**
	 * Patch Argo Smart Routing setting
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ArgoSmartRoutingPatchArgoSmartRoutingSettingRequest $request,
	): \FoundryCo\Cloudflare\Responses\ArgoSmartRoutingSetting
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/argo/smart_routing', \FoundryCo\Cloudflare\Responses\ArgoSmartRoutingSetting::class, $request);
	}
}
