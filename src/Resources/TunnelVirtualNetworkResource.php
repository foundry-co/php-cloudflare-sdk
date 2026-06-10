<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TunnelVirtualNetworkResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List virtual networks
	 */
	public function list(
		?string $id = null,
		?string $name = null,
		?bool $isDefault = null,
		?bool $isDefaultNetwork = null,
		?bool $isDeleted = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/teamnet/virtual_networks', \FoundryCo\Cloudflare\Responses\TunnelVirtualNetworkListVirtualNetworks::class, ['id' => $id ?? null, 'name' => $name ?? null, 'isDefault' => $isDefault ?? null, 'isDefaultNetwork' => $isDefaultNetwork ?? null, 'isDeleted' => $isDeleted ?? null]);
	}


	/**
	 * Create a virtual network
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\TunnelVirtualNetworkCreateAVirtualNetworkRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/teamnet/virtual_networks', null, $request);
	}


	/**
	 * Get a virtual network
	 */
	public function get(
		string $virtualNetworkId,
		\FoundryCo\Cloudflare\Requests\TunnelVirtualNetworkGetRequest $request,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/teamnet/virtual_networks/' . $virtualNetworkId, null, []);
	}


	/**
	 * Update a virtual network
	 */
	public function update(
		string $virtualNetworkId,
		\FoundryCo\Cloudflare\Requests\TunnelVirtualNetworkUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/teamnet/virtual_networks/' . $virtualNetworkId, null, $request);
	}


	/**
	 * Delete a virtual network
	 */
	public function delete(string $virtualNetworkId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/teamnet/virtual_networks/' . $virtualNetworkId);
	}
}
