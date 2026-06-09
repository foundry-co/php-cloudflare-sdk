<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAddressManagementAddressMapsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Address Maps
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\IPAddressManagementAddressMapsMaps
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/address_maps', \FoundryCo\Cloudflare\Responses\IPAddressManagementAddressMapsMaps::class, []);
	}


	/**
	 * Create Address Map
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\IpAddressManagementAddressMapsCreateAddressMapRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementAddressMapsMap
	{
		return $this->client->post('/accounts/' . $this->accountId . '/addressing/address_maps', \FoundryCo\Cloudflare\Responses\IPAddressManagementAddressMapsMap::class, $request);
	}


	/**
	 * Address Map Details
	 */
	public function get(string $addressMapId): \FoundryCo\Cloudflare\Responses\IPAddressManagementAddressMapsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId, \FoundryCo\Cloudflare\Responses\IPAddressManagementAddressMapsDetails::class, []);
	}


	/**
	 * Update Address Map
	 */
	public function update(
		string $addressMapId,
		\FoundryCo\Cloudflare\Requests\IpAddressManagementAddressMapsUpdateAddressMapRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementAddressMapsMap
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId, \FoundryCo\Cloudflare\Responses\IPAddressManagementAddressMapsMap::class, $request);
	}


	/**
	 * Delete Address Map
	 */
	public function delete(string $addressMapId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId);
	}


	/**
	 * Add an account membership to an Address Map
	 */
	public function accounts(string $addressMapId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId . '/accounts/' . $this->accountId, null, null);
	}


	/**
	 * Remove an account membership from an Address Map
	 */
	public function ipAddressManagementAddressMapsRemoveAnAccountMembershipFromAnAddressMap(string $addressMapId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId . '/accounts/' . $this->accountId);
	}


	/**
	 * Add an IP to an Address Map
	 */
	public function ips(string $ipAddress, string $addressMapId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId . '/ips/' . $ipAddress, null, null);
	}


	/**
	 * Remove an IP from an Address Map
	 */
	public function ipAddressManagementAddressMapsRemoveAnIpFromAnAddressMap(
		string $ipAddress,
		string $addressMapId,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId . '/ips/' . $ipAddress);
	}


	/**
	 * Add a zone membership to an Address Map
	 */
	public function zones(string $addressMapId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId . '/zones/' . $this->zoneId, null, null);
	}


	/**
	 * Remove a zone membership from an Address Map
	 */
	public function ipAddressManagementAddressMapsRemoveAZoneMembershipFromAnAddressMap(string $addressMapId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/addressing/address_maps/' . $addressMapId . '/zones/' . $this->zoneId);
	}
}
