<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class OauthClientsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List OAuth Clients
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/oauth_clients', \FoundryCo\Cloudflare\Responses\OauthClientsList::class, []);
	}


	/**
	 * Create OAuth Client
	 */
	public function create(\FoundryCo\Cloudflare\Requests\OauthClientsCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/oauth_clients', \FoundryCo\Cloudflare\Responses\OauthClientsCreate::class, $request);
	}


	/**
	 * OAuth Client Details
	 */
	public function get(string $oauthClientId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/oauth_clients/' . $oauthClientId, \FoundryCo\Cloudflare\Responses\OauthClientsGet::class, []);
	}


	/**
	 * Update OAuth Client
	 */
	public function update(
		string $oauthClientId,
		\FoundryCo\Cloudflare\Requests\OauthClientsUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/oauth_clients/' . $oauthClientId, \FoundryCo\Cloudflare\Responses\OauthClientsUpdate::class, $request);
	}


	/**
	 * Delete OAuth Client
	 */
	public function delete(string $oauthClientId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/oauth_clients/' . $oauthClientId);
	}


	/**
	 * Rotate OAuth Client Secret
	 */
	public function rotateSecret(string $oauthClientId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/oauth_clients/' . $oauthClientId . '/rotate_secret', \FoundryCo\Cloudflare\Responses\OauthClientsRotateSecret::class, null);
	}


	/**
	 * Delete Rotated OAuth Client Secret
	 */
	public function oauthClientsDeleteRotatedSecret(string $oauthClientId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/oauth_clients/' . $oauthClientId . '/rotate_secret');
	}


	/**
	 * List OAuth Scopes
	 */
	public function scopes(): mixed
	{
		return $this->client->get('/oauth/scopes', \FoundryCo\Cloudflare\Responses\OauthScopesList::class, []);
	}
}
