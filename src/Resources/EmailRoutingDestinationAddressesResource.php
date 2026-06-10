<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EmailRoutingDestinationAddressesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List destination addresses
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\EmailRoutingDestinationAddressesDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\EmailRoutingDestinationAddressesVerified $verified = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/routing/addresses', \FoundryCo\Cloudflare\Responses\EmailRoutingDestinationAddressesListDestinationAddresses::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null, 'verified' => $verified ?? null]);
	}


	/**
	 * Create a destination address
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\EmailRoutingDestinationAddressesCreateADestinationAddressRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/routing/addresses', \FoundryCo\Cloudflare\Responses\EmailRoutingDestinationAddressesCreateADestinationAddress::class, $request);
	}


	/**
	 * Get a destination address
	 */
	public function get(string $destinationAddressIdentifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/routing/addresses/' . $destinationAddressIdentifier, \FoundryCo\Cloudflare\Responses\EmailRoutingDestinationAddressesGetADestinationAddress::class, []);
	}


	/**
	 * Delete destination address
	 */
	public function delete(string $destinationAddressIdentifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email/routing/addresses/' . $destinationAddressIdentifier);
	}
}
