<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\AccessIdPFederationGrantsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/idp_federation_grants', \FoundryCo\Cloudflare\Responses\AccessIdPFederationGrantsList::class, []);
	}


	/**
	 * Create an IdP federation grant
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccessIdpFederationGrantsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccessIdPFederationGrantsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/idp_federation_grants', \FoundryCo\Cloudflare\Responses\AccessIdPFederationGrantsCreate::class, $request);
	}


	/**
	 * Get an IdP federation grant
	 */
	public function get(string $grantId): \FoundryCo\Cloudflare\Responses\AccessIdPFederationGrantsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/idp_federation_grants/' . $grantId, \FoundryCo\Cloudflare\Responses\AccessIdPFederationGrantsGet::class, []);
	}


	/**
	 * Delete an IdP federation grant
	 */
	public function delete(string $grantId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/idp_federation_grants/' . $grantId);
	}
}
