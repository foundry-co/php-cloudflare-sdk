<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets', \FoundryCo\Cloudflare\Responses\AigConfigListDataset::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'name' => $name ?? null, 'enable' => $enable ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new Dataset
	 */
	public function create(
		string $gatewayId,
		\FoundryCo\Cloudflare\Requests\AigConfigCreateDatasetRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets', \FoundryCo\Cloudflare\Responses\AigConfigCreateDataset::class, $request);
	}


	/**
	 * Fetch a Dataset
	 */
	public function datasets(string $gatewayId, string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets/' . $id, \FoundryCo\Cloudflare\Responses\AigConfigFetchDataset::class, []);
	}


	/**
	 * Update a Dataset
	 */
	public function update(
		string $gatewayId,
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigUpdateDatasetRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets/' . $id, \FoundryCo\Cloudflare\Responses\AigConfigUpdateDataset::class, $request);
	}


	/**
	 * Delete a Dataset
	 */
	public function delete(string $gatewayId, string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/datasets/' . $id);
	}
}
