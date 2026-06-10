<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/networks', \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksListDeviceManagedNetworks::class, []);
	}


	/**
	 * Create a device managed network
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DeviceManagedNetworksCreateDeviceManagedNetworkRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/networks', \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksCreateDeviceManagedNetwork::class, $request);
	}


	/**
	 * Get device managed network details
	 */
	public function get(string $networkId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/networks/' . $networkId, \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksDeviceManagedNetworkDetails::class, []);
	}


	/**
	 * Update a device managed network
	 */
	public function update(
		string $networkId,
		\FoundryCo\Cloudflare\Requests\DeviceManagedNetworksUpdateDeviceManagedNetworkRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/networks/' . $networkId, \FoundryCo\Cloudflare\Responses\DeviceManagedNetworksUpdateDeviceManagedNetwork::class, $request);
	}


	/**
	 * Delete a device managed network
	 */
	public function delete(string $networkId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/networks/' . $networkId);
	}
}
