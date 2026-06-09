<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CacheReserveClearResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Cache Reserve Clear
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/smart_shield/cache_reserve_clear', null, []);
	}


	/**
	 * Start Cache Reserve Clear
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/smart_shield/cache_reserve_clear', null, null);
	}
}
