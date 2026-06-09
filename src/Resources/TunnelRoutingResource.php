<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TunnelRoutingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List tunnel routes
	 */
	public function list(
		?string $comment = null,
		?bool $isDeleted = null,
		mixed $networkSubset = null,
		mixed $networkSuperset = null,
		?string $existedAt = null,
		?string $tunnelId = null,
		?string $routeId = null,
		?array $tunTypes = null,
		?string $virtualNetworkId = null,
		?float $perPage = null,
		?float $page = null,
	): \FoundryCo\Cloudflare\Responses\TunnelRoutingRoutes
	{
		return $this->client->get('/accounts/' . $this->accountId . '/teamnet/routes', \FoundryCo\Cloudflare\Responses\TunnelRoutingRoutes::class, ['comment' => $comment ?? null, 'isDeleted' => $isDeleted ?? null, 'networkSubset' => $networkSubset ?? null, 'networkSuperset' => $networkSuperset ?? null, 'existedAt' => $existedAt ?? null, 'tunnelId' => $tunnelId ?? null, 'routeId' => $routeId ?? null, 'tunTypes' => $tunTypes ?? null, 'virtualNetworkId' => $virtualNetworkId ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null]);
	}


	/**
	 * Create a tunnel route
	 */
	public function create(\FoundryCo\Cloudflare\Requests\TunnelRouteCreateATunnelRouteRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/teamnet/routes', null, $request);
	}


	/**
	 * Get tunnel route by IP
	 */
	public function get(string $ip, ?string $virtualNetworkId = null, ?bool $defaultVirtualNetworkFallback = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/teamnet/routes/ip/' . $ip, null, ['virtualNetworkId' => $virtualNetworkId ?? null, 'defaultVirtualNetworkFallback' => $defaultVirtualNetworkFallback ?? null]);
	}


	/**
	 * Create a tunnel route (CIDR Endpoint)
	 */
	public function network(
		string $ipNetworkEncoded,
		\FoundryCo\Cloudflare\Requests\TunnelRouteCreateATunnelRouteWithCidrRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/teamnet/routes/network/' . $ipNetworkEncoded, null, $request);
	}


	/**
	 * Update a tunnel route (CIDR Endpoint)
	 */
	public function update(string $ipNetworkEncoded): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/teamnet/routes/network/' . $ipNetworkEncoded, null, null);
	}


	/**
	 * Delete a tunnel route (CIDR Endpoint)
	 */
	public function delete(
		string $ipNetworkEncoded,
		?string $virtualNetworkId = null,
		?\FoundryCo\Cloudflare\Enums\TunnelRoutingTunType $tunType = null,
		?string $tunnelId = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/teamnet/routes/network/' . $ipNetworkEncoded);
	}


	/**
	 * Get tunnel route
	 */
	public function routes(string $routeId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/teamnet/routes/' . $routeId, null, []);
	}


	/**
	 * Update a tunnel route
	 */
	public function tunnelRouteUpdateATunnelRoute(
		string $routeId,
		\FoundryCo\Cloudflare\Requests\TunnelRouteUpdateATunnelRouteRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/teamnet/routes/' . $routeId, null, $request);
	}


	/**
	 * Delete a tunnel route
	 */
	public function tunnelRouteDeleteATunnelRoute(string $routeId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/teamnet/routes/' . $routeId);
	}
}
