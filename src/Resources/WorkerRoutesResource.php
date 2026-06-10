<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/workers/routes', \FoundryCo\Cloudflare\Responses\WorkerRoutesListRoutes::class, []);
	}


	/**
	 * Create Route
	 */
	public function create(\FoundryCo\Cloudflare\Requests\WorkerRoutesCreateRouteRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/workers/routes', \FoundryCo\Cloudflare\Responses\WorkerRoutesCreateRoute::class, $request);
	}


	/**
	 * Get Route
	 */
	public function get(string $routeId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/workers/routes/' . $routeId, \FoundryCo\Cloudflare\Responses\WorkerRoutesGetRoute::class, []);
	}


	/**
	 * Update Route
	 */
	public function update(
		string $routeId,
		\FoundryCo\Cloudflare\Requests\WorkerRoutesUpdateRouteRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/workers/routes/' . $routeId, \FoundryCo\Cloudflare\Responses\WorkerRoutesUpdateRoute::class, $request);
	}


	/**
	 * Delete Route
	 */
	public function delete(string $routeId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/workers/routes/' . $routeId);
	}
}
