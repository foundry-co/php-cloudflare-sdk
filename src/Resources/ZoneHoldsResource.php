<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/hold', \FoundryCo\Cloudflare\Responses\Zones0HoldGet::class, []);
	}


	/**
	 * Create Zone Hold
	 */
	public function create(?bool $includeSubdomains = null): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/hold', \FoundryCo\Cloudflare\Responses\Zones0HoldPost::class, null);
	}


	/**
	 * Update Zone Hold
	 */
	public function update(\FoundryCo\Cloudflare\Requests\Zones0HoldPatchRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/hold', \FoundryCo\Cloudflare\Responses\Zones0HoldPatch::class, $request);
	}


	/**
	 * Remove Zone Hold
	 */
	public function delete(?string $holdAfter = null): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/hold');
	}
}
