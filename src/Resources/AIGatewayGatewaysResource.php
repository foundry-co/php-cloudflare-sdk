<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayGatewaysGateway
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways', \FoundryCo\Cloudflare\Responses\AIGatewayGatewaysGateway::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new Gateway
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AigConfigCreateGatewayRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayGatewaysGateway
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways', \FoundryCo\Cloudflare\Responses\AIGatewayGatewaysGateway::class, $request);
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
	public function gateways(string $id): \FoundryCo\Cloudflare\Responses\AIGatewayGatewaysGateway
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayGatewaysGateway::class, []);
	}


	/**
	 * Update a Gateway
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigUpdateGatewayRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayGatewaysGateway
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayGatewaysGateway::class, $request);
	}


	/**
	 * Delete a Gateway
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $id);
	}
}
