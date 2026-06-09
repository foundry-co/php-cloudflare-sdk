<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(?string $monitor = null): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPools
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/pools', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPools::class, ['monitor' => $monitor ?? null]);
	}


	/**
	 * Create Pool
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsCreatePoolRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPool
	{
		return $this->client->post('/accounts/' . $this->accountId . '/load_balancers/pools', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPool::class, $request);
	}


	/**
	 * Patch Pools
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsPatchPoolsRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPools
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/load_balancers/pools', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPools::class, $request);
	}


	/**
	 * Pool Details
	 */
	public function get(string $poolId): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsDetails::class, []);
	}


	/**
	 * Update Pool
	 */
	public function pools(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsUpdatePoolRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPool
	{
		return $this->client->put('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPool::class, $request);
	}


	/**
	 * Patch Pool
	 */
	public function accountLoadBalancerPoolsPatchPool(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsPatchPoolRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPool
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPool::class, $request);
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
	public function health(string $poolId): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId . '/health', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsDetails::class, []);
	}


	/**
	 * Preview Pool
	 */
	public function preview(
		string $poolId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerPoolsPreviewPoolRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPool
	{
		return $this->client->post('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId . '/preview', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsPool::class, $request);
	}


	/**
	 * List Pool References
	 */
	public function references(string $poolId): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsReferences
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/pools/' . $poolId . '/references', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerPoolsReferences::class, []);
	}
}
