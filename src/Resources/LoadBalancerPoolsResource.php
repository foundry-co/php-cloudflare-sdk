<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(?string $monitor = null): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPools
	{
		return $this->client->get('/user/load_balancers/pools', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPools::class, ['monitor' => $monitor ?? null]);
	}


	/**
	 * Create Pool
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsCreatePoolRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPool
	{
		return $this->client->post('/user/load_balancers/pools', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPool::class, $request);
	}


	/**
	 * Patch Pools
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsPatchPoolsRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPools
	{
		return $this->client->patch('/user/load_balancers/pools', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPools::class, $request);
	}


	/**
	 * Pool Details
	 */
	public function get(string $poolId): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsDetails
	{
		return $this->client->get('/user/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsDetails::class, []);
	}


	/**
	 * Update Pool
	 */
	public function updatePut(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsUpdatePoolRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPool
	{
		return $this->client->put('/user/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPool::class, $request);
	}


	/**
	 * Patch Pool
	 */
	public function updatePatch(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsPatchPoolRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPool
	{
		return $this->client->patch('/user/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPool::class, $request);
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
	public function health(string $poolId): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsDetails
	{
		return $this->client->get('/user/load_balancers/pools/' . $poolId . '/health', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsDetails::class, []);
	}


	/**
	 * Preview Pool
	 */
	public function preview(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerPoolsPreviewPoolRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPool
	{
		return $this->client->post('/user/load_balancers/pools/' . $poolId . '/preview', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsPool::class, $request);
	}


	/**
	 * List Pool References
	 */
	public function references(string $poolId): \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsReferences
	{
		return $this->client->get('/user/load_balancers/pools/' . $poolId . '/references', \FoundryCo\Cloudflare\Responses\LoadBalancerPoolsReferences::class, []);
	}
}
