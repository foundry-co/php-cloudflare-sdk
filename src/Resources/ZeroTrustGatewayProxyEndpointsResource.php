<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustGatewayProxyEndpointsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List proxy endpoints
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/proxy_endpoints', null, []);
	}


	/**
	 * Create a proxy endpoint
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayProxyEndpointsCreateProxyEndpointRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/proxy_endpoints', null, $request);
	}


	/**
	 * Get a proxy endpoint
	 */
	public function get(string $proxyEndpointId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/proxy_endpoints/' . $proxyEndpointId, null, []);
	}


	/**
	 * Update a proxy endpoint
	 */
	public function update(
		string $proxyEndpointId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayProxyEndpointsUpdateProxyEndpointRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/gateway/proxy_endpoints/' . $proxyEndpointId, null, $request);
	}


	/**
	 * Delete a proxy endpoint
	 */
	public function delete(string $proxyEndpointId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/gateway/proxy_endpoints/' . $proxyEndpointId);
	}
}
