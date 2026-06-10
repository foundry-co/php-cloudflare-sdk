<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations', \FoundryCo\Cloudflare\Responses\DlpZtRiskScoreIntegrationList::class, []);
	}


	/**
	 * Create new risk score integration.
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpZtRiskScoreIntegrationCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations', \FoundryCo\Cloudflare\Responses\DlpZtRiskScoreIntegrationCreate::class, $request);
	}


	/**
	 * Get risk score integration by reference id.
	 */
	public function get(string $referenceId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations/reference_id/' . $referenceId, \FoundryCo\Cloudflare\Responses\DlpZtRiskScoreIntegrationGetByReferenceId::class, []);
	}


	/**
	 * Get risk score integration by id.
	 */
	public function integrations(string $integrationId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations/' . $integrationId, \FoundryCo\Cloudflare\Responses\DlpZtRiskScoreIntegrationGet::class, []);
	}


	/**
	 * Update a risk score integration.
	 */
	public function update(
		string $integrationId,
		\FoundryCo\Cloudflare\Requests\DlpZtRiskScoreIntegrationUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations/' . $integrationId, \FoundryCo\Cloudflare\Responses\DlpZtRiskScoreIntegrationUpdate::class, $request);
	}


	/**
	 * Delete a risk score integration.
	 */
	public function delete(string $integrationId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/zt_risk_scoring/integrations/' . $integrationId);
	}
}
