<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountLoadBalancerPoolsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Pools
	 */
	public function list(?string $monitor = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/pools', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsListPools::class, ['monitor' => $monitor ?? null]);
	}


	/**
	 * Create Pool
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsCreatePoolRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/load_balancers/pools', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsCreatePool::class, $request);
	}


	/**
	 * Patch Pools
	 */
	public function update(\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsPatchPoolsRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/load_balancers/pools', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPatchPools::class, $request);
	}


	/**
	 * Pool Details
	 */
	public function get(string $poolId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPoolDetails::class, []);
	}


	/**
	 * Update Pool
	 */
	public function pools(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsUpdatePoolRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsUpdatePool::class, $request);
	}


	/**
	 * Patch Pool
	 */
	public function accountLoadBalancerPoolsPatchPool(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsPatchPoolRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPatchPool::class, $request);
	}


	/**
	 * Delete Pool
	 */
	public function delete(string $poolId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId);
	}


	/**
	 * Pool Health Details
	 */
	public function health(string $poolId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId . '/health', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPoolHealthDetails::class, []);
	}


	/**
	 * Preview Pool
	 */
	public function preview(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsPreviewPoolRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId . '/preview', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPreviewPool::class, $request);
	}


	/**
	 * List Pool References
	 */
	public function references(string $poolId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId . '/references', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsListPoolReferences::class, []);
	}
}
