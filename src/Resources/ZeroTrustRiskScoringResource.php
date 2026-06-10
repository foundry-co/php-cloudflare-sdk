<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustRiskScoringResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get all behaviors and associated configuration
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/behaviors', \FoundryCo\Cloudflare\Responses\DlpRiskScoreBehaviorsGet::class, []);
	}


	/**
	 * Update configuration for risk behaviors
	 */
	public function update(\FoundryCo\Cloudflare\Requests\DlpRiskScoreBehaviorsPutRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/zt_risk_scoring/behaviors', \FoundryCo\Cloudflare\Responses\DlpRiskScoreBehaviorsPut::class, $request);
	}


	/**
	 * Get risk score info for all users in the account
	 */
	public function summary(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/summary', \FoundryCo\Cloudflare\Responses\DlpRiskScoreSummaryGet::class, []);
	}


	/**
	 * Get risk event/score information for a specific user
	 */
	public function get(string $userId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zt_risk_scoring/' . $userId, \FoundryCo\Cloudflare\Responses\DlpRiskScoreSummaryGetForUser::class, []);
	}


	/**
	 * Clear the risk score for a particular user
	 */
	public function create(string $userId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/zt_risk_scoring/' . $userId . '/reset', null, null);
	}
}
