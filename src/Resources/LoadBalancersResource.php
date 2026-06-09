<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LoadBalancersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Load Balancers
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\LoadBalancersBalancers
	{
		return $this->client->get('/zones/' . $this->zoneId . '/load_balancers', \FoundryCo\Cloudflare\Responses\LoadBalancersBalancers::class, []);
	}


	/**
	 * Create Load Balancer
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\LoadBalancersCreateLoadBalancerRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancersBalancer
	{
		return $this->client->post('/zones/' . $this->zoneId . '/load_balancers', \FoundryCo\Cloudflare\Responses\LoadBalancersBalancer::class, $request);
	}


	/**
	 * Load Balancer Details
	 */
	public function get(string $loadBalancerId): \FoundryCo\Cloudflare\Responses\LoadBalancersDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/load_balancers/' . $loadBalancerId, \FoundryCo\Cloudflare\Responses\LoadBalancersDetails::class, []);
	}


	/**
	 * Update Load Balancer
	 */
	public function update(
		string $loadBalancerId,
		\FoundryCo\Cloudflare\Requests\LoadBalancersUpdateLoadBalancerRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancersBalancer
	{
		return $this->client->put('/zones/' . $this->zoneId . '/load_balancers/' . $loadBalancerId, \FoundryCo\Cloudflare\Responses\LoadBalancersBalancer::class, $request);
	}


	/**
	 * Patch Load Balancer
	 */
	public function loadBalancers(
		string $loadBalancerId,
		\FoundryCo\Cloudflare\Requests\LoadBalancersPatchLoadBalancerRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancersBalancer
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/load_balancers/' . $loadBalancerId, \FoundryCo\Cloudflare\Responses\LoadBalancersBalancer::class, $request);
	}


	/**
	 * Delete Load Balancer
	 */
	public function delete(string $loadBalancerId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/load_balancers/' . $loadBalancerId);
	}
}
