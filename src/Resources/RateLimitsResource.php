<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RateLimitsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List rate limits
	 */
	public function list(?float $page = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rate_limits', \FoundryCo\Cloudflare\Responses\RateLimitsForAZoneListRateLimits::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a rate limit
	 */
	public function create(\FoundryCo\Cloudflare\Requests\RateLimitsForAZoneCreateARateLimitRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/rate_limits', \FoundryCo\Cloudflare\Responses\RateLimitsForAZoneCreateARateLimit::class, $request);
	}


	/**
	 * Get a rate limit
	 */
	public function get(string $rateLimitId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rate_limits/' . $rateLimitId, \FoundryCo\Cloudflare\Responses\RateLimitsForAZoneGetARateLimit::class, []);
	}


	/**
	 * Update a rate limit
	 */
	public function update(
		string $rateLimitId,
		\FoundryCo\Cloudflare\Requests\RateLimitsForAZoneUpdateARateLimitRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/rate_limits/' . $rateLimitId, \FoundryCo\Cloudflare\Responses\RateLimitsForAZoneUpdateARateLimit::class, $request);
	}


	/**
	 * Delete a rate limit
	 */
	public function delete(string $rateLimitId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/rate_limits/' . $rateLimitId);
	}
}
