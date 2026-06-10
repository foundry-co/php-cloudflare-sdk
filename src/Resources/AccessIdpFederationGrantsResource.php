<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessIdpFederationGrantsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List IdP federation grants
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/idp_federation_grants', \FoundryCo\Cloudflare\Responses\AccessIdpFederationGrantsList::class, []);
	}


	/**
	 * Create an IdP federation grant
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccessIdpFederationGrantsCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/idp_federation_grants', \FoundryCo\Cloudflare\Responses\AccessIdpFederationGrantsCreate::class, $request);
	}


	/**
	 * Get an IdP federation grant
	 */
	public function get(string $grantId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/idp_federation_grants/' . $grantId, \FoundryCo\Cloudflare\Responses\AccessIdpFederationGrantsGet::class, []);
	}


	/**
	 * Delete an IdP federation grant
	 */
	public function delete(string $grantId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/idp_federation_grants/' . $grantId);
	}
}
