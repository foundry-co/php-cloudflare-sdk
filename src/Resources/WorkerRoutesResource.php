<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerRoutesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Routes
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\WorkerRoutesRoutes
	{
		return $this->client->get('/zones/' . $this->zoneId . '/workers/routes', \FoundryCo\Cloudflare\Responses\WorkerRoutesRoutes::class, []);
	}


	/**
	 * Create Route
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WorkerRoutesCreateRouteRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkerRoutesRoute
	{
		return $this->client->post('/zones/' . $this->zoneId . '/workers/routes', \FoundryCo\Cloudflare\Responses\WorkerRoutesRoute::class, $request);
	}


	/**
	 * Get Route
	 */
	public function get(string $routeId): \FoundryCo\Cloudflare\Responses\WorkerRoutesRoute
	{
		return $this->client->get('/zones/' . $this->zoneId . '/workers/routes/' . $routeId, \FoundryCo\Cloudflare\Responses\WorkerRoutesRoute::class, []);
	}


	/**
	 * Update Route
	 */
	public function update(
		string $routeId,
		\FoundryCo\Cloudflare\Requests\WorkerRoutesUpdateRouteRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkerRoutesRoute
	{
		return $this->client->put('/zones/' . $this->zoneId . '/workers/routes/' . $routeId, \FoundryCo\Cloudflare\Responses\WorkerRoutesRoute::class, $request);
	}


	/**
	 * Delete Route
	 */
	public function delete(string $routeId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/workers/routes/' . $routeId);
	}
}
