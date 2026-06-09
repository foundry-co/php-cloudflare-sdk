<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\OAuthClientsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/oauth_clients', \FoundryCo\Cloudflare\Responses\OAuthClientsList::class, []);
	}


	/**
	 * Create OAuth Client
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\OauthClientsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\OAuthClientsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/oauth_clients', \FoundryCo\Cloudflare\Responses\OAuthClientsCreate::class, $request);
	}


	/**
	 * OAuth Client Details
	 */
	public function get(string $oauthClientId): \FoundryCo\Cloudflare\Responses\OAuthClientsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/oauth_clients/' . $oauthClientId, \FoundryCo\Cloudflare\Responses\OAuthClientsGet::class, []);
	}


	/**
	 * Update OAuth Client
	 */
	public function update(
		string $oauthClientId,
		\FoundryCo\Cloudflare\Requests\OauthClientsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\OAuthClientsUpdate
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/oauth_clients/' . $oauthClientId, \FoundryCo\Cloudflare\Responses\OAuthClientsUpdate::class, $request);
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
	public function rotateSecret(string $oauthClientId): \FoundryCo\Cloudflare\Responses\OAuthClientsSecret
	{
		return $this->client->post('/accounts/' . $this->accountId . '/oauth_clients/' . $oauthClientId . '/rotate_secret', \FoundryCo\Cloudflare\Responses\OAuthClientsSecret::class, null);
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
	public function scopes(): \FoundryCo\Cloudflare\Responses\OAuthClientsList
	{
		return $this->client->get('/oauth/scopes', \FoundryCo\Cloudflare\Responses\OAuthClientsList::class, []);
	}
}
