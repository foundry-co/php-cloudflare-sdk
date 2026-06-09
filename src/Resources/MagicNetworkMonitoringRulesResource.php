<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRules
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mnm/rules', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRules::class, []);
	}


	/**
	 * Create rules
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringRulesCreateRulesRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRules
	{
		return $this->client->post('/accounts/' . $this->accountId . '/mnm/rules', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRules::class, $request);
	}


	/**
	 * Update rules
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringRulesUpdateRulesRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRules
	{
		return $this->client->put('/accounts/' . $this->accountId . '/mnm/rules', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRules::class, $request);
	}


	/**
	 * Get rule
	 */
	public function get(string $ruleId): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRule
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mnm/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRule::class, []);
	}


	/**
	 * Update rule
	 */
	public function rules(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringRulesUpdateRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRule
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/mnm/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRule::class, $request);
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
	public function advertisement(string $ruleId): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRule
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/mnm/rules/' . $ruleId . '/advertisement', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringRulesRule::class, null);
	}
}
