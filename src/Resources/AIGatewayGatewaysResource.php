<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayGatewaysResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Gateways
	 */
	public function list(?int $page = null, ?int $perPage = null, ?string $search = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways', \FoundryCo\Cloudflare\Responses\AigConfigListGateway::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new Gateway
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AigConfigCreateGatewayRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways', \FoundryCo\Cloudflare\Responses\AigConfigCreateGateway::class, $request);
	}


	/**
	 * Get Gateway URL
	 */
	public function get(string $gatewayId, string $provider): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/url/' . $provider, null, []);
	}


	/**
	 * Fetch a Gateway
	 */
	public function gateways(string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $id, \FoundryCo\Cloudflare\Responses\AigConfigFetchGateway::class, []);
	}


	/**
	 * Update a Gateway
	 */
	public function update(string $id, \FoundryCo\Cloudflare\Requests\AigConfigUpdateGatewayRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $id, \FoundryCo\Cloudflare\Responses\AigConfigUpdateGateway::class, $request);
	}


	/**
	 * Delete a Gateway
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $id);
	}
}
