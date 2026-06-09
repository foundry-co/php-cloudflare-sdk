<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneHoldsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Zone Hold
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneHoldsGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/hold', \FoundryCo\Cloudflare\Responses\ZoneHoldsGet::class, []);
	}


	/**
	 * Create Zone Hold
	 */
	public function create(?bool $includeSubdomains = null): \FoundryCo\Cloudflare\Responses\ZoneHoldsPost
	{
		return $this->client->post('/zones/' . $this->zoneId . '/hold', \FoundryCo\Cloudflare\Responses\ZoneHoldsPost::class, null);
	}


	/**
	 * Update Zone Hold
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\Zones0HoldPatchRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneHoldsPatch
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/hold', \FoundryCo\Cloudflare\Responses\ZoneHoldsPatch::class, $request);
	}


	/**
	 * Remove Zone Hold
	 */
	public function delete(?string $holdAfter = null): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/hold');
	}
}
