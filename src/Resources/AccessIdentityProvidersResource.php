<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessIdentityProvidersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Access identity providers
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/identity_providers', null, []);
	}


	/**
	 * Add an Access identity provider
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/identity_providers', null, null);
	}


	/**
	 * Get an Access identity provider
	 */
	public function get(string $identityProviderId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/identity_providers/' . $identityProviderId, null, []);
	}


	/**
	 * Update an Access identity provider
	 */
	public function update(string $identityProviderId): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/identity_providers/' . $identityProviderId, null, null);
	}


	/**
	 * Delete an Access identity provider
	 */
	public function delete(string $identityProviderId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/identity_providers/' . $identityProviderId);
	}
}
