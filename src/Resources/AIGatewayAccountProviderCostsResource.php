<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayAccountProviderCostsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Account Provider Costs
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?bool $enable = null,
		?string $accountProviderId = null,
		?\FoundryCo\Cloudflare\Enums\AIGatewayAccountProviderCostsModelRule $modelRule = null,
		?string $costType = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayAccountProviderCostsCost
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/custom-providers/costs', \FoundryCo\Cloudflare\Responses\AIGatewayAccountProviderCostsCost::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'enable' => $enable ?? null, 'accountProviderId' => $accountProviderId ?? null, 'modelRule' => $modelRule ?? null, 'costType' => $costType ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new Account Provider Cost
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AigConfigCreateAccountProviderCostRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayAccountProviderCostsCost
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/custom-providers/costs', \FoundryCo\Cloudflare\Responses\AIGatewayAccountProviderCostsCost::class, $request);
	}


	/**
	 * Fetch a Account Provider Cost
	 */
	public function get(string $id): \FoundryCo\Cloudflare\Responses\AIGatewayAccountProviderCostsCost
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/custom-providers/costs/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayAccountProviderCostsCost::class, []);
	}


	/**
	 * Update a Account Provider Cost
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigUpdateAccountProviderCostRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayAccountProviderCostsCost
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-gateway/custom-providers/costs/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayAccountProviderCostsCost::class, $request);
	}


	/**
	 * Delete a Account Provider Cost
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/custom-providers/costs/' . $id);
	}
}
