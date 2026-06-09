<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DeviceManagedNetworksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List your device managed networks
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksNetworks
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/networks', \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksNetworks::class, []);
	}


	/**
	 * Create a device managed network
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DeviceManagedNetworksCreateDeviceManagedNetworkRequest $request,
	): \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksNetwork
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/networks', \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksNetwork::class, $request);
	}


	/**
	 * Get device managed network details
	 */
	public function get(string $networkId): \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/networks/' . $networkId, \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksDetails::class, []);
	}


	/**
	 * Update a device managed network
	 */
	public function update(
		string $networkId,
		\FoundryCo\Cloudflare\Requests\DeviceManagedNetworksUpdateDeviceManagedNetworkRequest $request,
	): \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksNetwork
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/networks/' . $networkId, \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksNetwork::class, $request);
	}


	/**
	 * Delete a device managed network
	 */
	public function delete(string $networkId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/networks/' . $networkId);
	}
}
