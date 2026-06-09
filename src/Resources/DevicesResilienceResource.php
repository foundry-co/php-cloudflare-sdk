<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DevicesResilienceResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve Global WARP override state
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\DevicesResilienceOverride
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/resilience/disconnect', \FoundryCo\Cloudflare\Responses\DevicesResilienceOverride::class, []);
	}


	/**
	 * Set Global WARP override state
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DevicesResilienceSetGlobalWarpOverrideRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicesResilienceOverride
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/resilience/disconnect', \FoundryCo\Cloudflare\Responses\DevicesResilienceOverride::class, $request);
	}
}
