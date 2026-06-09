<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayDatasetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Datasets
	 */
	public function get(
		string $gatewayId,
		?int $page = null,
		?int $perPage = null,
		?string $name = null,
		?bool $enable = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayDatasetsDataset
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets', \FoundryCo\Cloudflare\Responses\AIGatewayDatasetsDataset::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'name' => $name ?? null, 'enable' => $enable ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new Dataset
	 */
	public function create(
		string $gatewayId,
		\FoundryCo\Cloudflare\Requests\AigConfigCreateDatasetRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayDatasetsDataset
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets', \FoundryCo\Cloudflare\Responses\AIGatewayDatasetsDataset::class, $request);
	}


	/**
	 * Fetch a Dataset
	 */
	public function datasets(string $gatewayId, string $id): \FoundryCo\Cloudflare\Responses\AIGatewayDatasetsDataset
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayDatasetsDataset::class, []);
	}


	/**
	 * Update a Dataset
	 */
	public function update(
		string $gatewayId,
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigUpdateDatasetRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayDatasetsDataset
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayDatasetsDataset::class, $request);
	}


	/**
	 * Delete a Dataset
	 */
	public function delete(string $gatewayId, string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets/' . $id);
	}
}
