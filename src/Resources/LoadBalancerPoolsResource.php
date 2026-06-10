<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LoadBalancerPoolsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Pools
	 */
	public function list(?string $monitor = null): mixed
	{
		return $this->client->get('/user/load_balancers/pools', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsListPools::class, ['monitor' => $monitor ?? null]);
	}


	/**
	 * Create Pool
	 */
	public function create(\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsCreatePoolRequest $request): mixed
	{
		return $this->client->post('/user/load_balancers/pools', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsCreatePool::class, $request);
	}


	/**
	 * Patch Pools
	 */
	public function update(\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsPatchPoolsRequest $request): mixed
	{
		return $this->client->patch('/user/load_balancers/pools', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPatchPools::class, $request);
	}


	/**
	 * Pool Details
	 */
	public function get(string $poolId): mixed
	{
		return $this->client->get('/user/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPoolDetails::class, []);
	}


	/**
	 * Update Pool
	 */
	public function updatePut(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsUpdatePoolRequest $request,
	): mixed
	{
		return $this->client->put('/user/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsUpdatePool::class, $request);
	}


	/**
	 * Patch Pool
	 */
	public function updatePatch(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsPatchPoolRequest $request,
	): mixed
	{
		return $this->client->patch('/user/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPatchPool::class, $request);
	}


	/**
	 * Delete Pool
	 */
	public function delete(string $poolId): void
	{
		$this->client->delete('/user/load_balancers/pools/' . $poolId);
	}


	/**
	 * Pool Health Details
	 */
	public function health(string $poolId): mixed
	{
		return $this->client->get('/user/load_balancers/pools/' . $poolId . '/health', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPoolHealthDetails::class, []);
	}


	/**
	 * Preview Pool
	 */
	public function preview(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsPreviewPoolRequest $request,
	): mixed
	{
		return $this->client->post('/user/load_balancers/pools/' . $poolId . '/preview', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPreviewPool::class, $request);
	}


	/**
	 * List Pool References
	 */
	public function references(string $poolId): mixed
	{
		return $this->client->get('/user/load_balancers/pools/' . $poolId . '/references', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsListPoolReferences::class, []);
	}
}
