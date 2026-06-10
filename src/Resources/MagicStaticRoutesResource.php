<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicStaticRoutesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Routes
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/routes', \FoundryCo\Cloudflare\Responses\MagicStaticRoutesListRoutes::class, []);
	}


	/**
	 * Create a Route
	 */
	public function create(\FoundryCo\Cloudflare\Requests\MagicStaticRoutesCreateRoutesRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/routes', \FoundryCo\Cloudflare\Responses\MagicStaticRoutesCreateRoutes::class, $request);
	}


	/**
	 * Update Many Routes
	 */
	public function update(\FoundryCo\Cloudflare\Requests\MagicStaticRoutesUpdateManyRoutesRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/routes', \FoundryCo\Cloudflare\Responses\MagicStaticRoutesUpdateManyRoutes::class, $request);
	}


	/**
	 * Delete Many Routes
	 */
	public function delete(\FoundryCo\Cloudflare\Requests\MagicStaticRoutesDeleteManyRoutesRequest $request): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/routes');
	}


	/**
	 * Route Details
	 */
	public function get(string $routeId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/routes/' . $routeId, \FoundryCo\Cloudflare\Responses\MagicStaticRoutesRouteDetails::class, []);
	}


	/**
	 * Update Route
	 */
	public function routes(
		string $routeId,
		\FoundryCo\Cloudflare\Requests\MagicStaticRoutesUpdateRouteRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/routes/' . $routeId, \FoundryCo\Cloudflare\Responses\MagicStaticRoutesUpdateRoute::class, $request);
	}


	/**
	 * Delete Route
	 */
	public function magicStaticRoutesDeleteRoute(string $routeId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/routes/' . $routeId);
	}
}
