<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustRiskScoringIntegrationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List all risk score integrations for the account.
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations', \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsList::class, []);
	}


	/**
	 * Create new risk score integration.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpZtRiskScoreIntegrationCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations', \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsCreate::class, $request);
	}


	/**
	 * Get risk score integration by reference id.
	 */
	public function get(string $referenceId): \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsId
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations/reference_id/' . $referenceId, \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsId::class, []);
	}


	/**
	 * Get risk score integration by id.
	 */
	public function integrations(
		string $integrationId,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations/' . $integrationId, \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsGet::class, []);
	}


	/**
	 * Update a risk score integration.
	 */
	public function update(
		string $integrationId,
		\FoundryCo\Cloudflare\Requests\DlpZtRiskScoreIntegrationUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations/' . $integrationId, \FoundryCo\Cloudflare\Responses\ZeroTrustRiskScoringIntegrationsUpdate::class, $request);
	}


	/**
	 * Delete a risk score integration.
	 */
	public function delete(string $integrationId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations/' . $integrationId);
	}
}
