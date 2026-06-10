<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SSOResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get all SSO connectors
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/sso_connectors', \FoundryCo\Cloudflare\Responses\GetAllSsoConnectors::class, []);
	}


	/**
	 * Initialize new SSO connector
	 */
	public function create(\FoundryCo\Cloudflare\Requests\InitNewSsoConnectorRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/sso_connectors', \FoundryCo\Cloudflare\Responses\InitNewSsoConnector::class, $request);
	}


	/**
	 * Get single SSO connector
	 */
	public function get(mixed $ssoConnectorId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/sso_connectors/' . $ssoConnectorId, \FoundryCo\Cloudflare\Responses\GetSsoConnector::class, []);
	}


	/**
	 * Update SSO connector state
	 */
	public function update(
		mixed $ssoConnectorId,
		\FoundryCo\Cloudflare\Requests\UpdateSsoConnectorStateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/sso_connectors/' . $ssoConnectorId, \FoundryCo\Cloudflare\Responses\UpdateSsoConnectorState::class, $request);
	}


	/**
	 * Delete SSO connector
	 */
	public function delete(mixed $ssoConnectorId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/sso_connectors/' . $ssoConnectorId);
	}


	/**
	 * Begin SSO connector verification
	 */
	public function beginVerification(mixed $ssoConnectorId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/sso_connectors/' . $ssoConnectorId . '/begin_verification', null, null);
	}
}
