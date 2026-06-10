<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicNetworkMonitoringRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List rules
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mnm/rules', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesListRules::class, []);
	}


	/**
	 * Create rules
	 */
	public function create(\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringRulesCreateRulesRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/mnm/rules', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesCreateRules::class, $request);
	}


	/**
	 * Update rules
	 */
	public function update(\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringRulesUpdateRulesRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/mnm/rules', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesUpdateRules::class, $request);
	}


	/**
	 * Get rule
	 */
	public function get(string $ruleId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mnm/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesGetRule::class, []);
	}


	/**
	 * Update rule
	 */
	public function rules(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringRulesUpdateRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/mnm/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesUpdateRule::class, $request);
	}


	/**
	 * Delete rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/mnm/rules/' . $ruleId);
	}


	/**
	 * Update advertisement for rule
	 */
	public function advertisement(string $ruleId): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/mnm/rules/' . $ruleId . '/advertisement', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesUpdateAdvertisementForRule::class, null);
	}
}
