<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustGatewayLocationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Zero Trust Gateway locations
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsLocations
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/locations', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsLocations::class, []);
	}


	/**
	 * Create a Zero Trust Gateway location
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayLocationsCreateZeroTrustGatewayLocationRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsLocation
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/locations', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsLocation::class, $request);
	}


	/**
	 * Get Zero Trust Gateway location details
	 */
	public function get(string $locationId): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/locations/' . $locationId, \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsDetails::class, []);
	}


	/**
	 * Update a Zero Trust Gateway location
	 */
	public function update(
		string $locationId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsLocation
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/locations/' . $locationId, \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayLocationsLocation::class, $request);
	}


	/**
	 * Delete a Zero Trust Gateway location
	 */
	public function delete(string $locationId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/gateway/locations/' . $locationId);
	}
}
