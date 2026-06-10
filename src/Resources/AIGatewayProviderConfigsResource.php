<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayProviderConfigsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Provider Configs
	 */
	public function get(string $gatewayId, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/provider_configs', \FoundryCo\Cloudflare\Responses\AigConfigListProviders::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a new Provider Configs
	 */
	public function create(
		string $gatewayId,
		\FoundryCo\Cloudflare\Requests\AigConfigCreateProvidersRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/provider_configs', \FoundryCo\Cloudflare\Responses\AigConfigCreateProviders::class, $request);
	}


	/**
	 * Update a Provider Configs
	 */
	public function update(
		string $gatewayId,
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigUpdateProvidersRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/provider_configs/' . $id, \FoundryCo\Cloudflare\Responses\AigConfigUpdateProviders::class, $request);
	}


	/**
	 * Delete a Provider Configs
	 */
	public function delete(string $gatewayId, string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/provider_configs/' . $id);
	}
}
