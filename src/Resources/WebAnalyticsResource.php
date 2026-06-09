<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WebAnalyticsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Create a Web Analytics site
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WebAnalyticsCreateSiteRequest $request,
	): \FoundryCo\Cloudflare\Responses\WebAnalyticsSite
	{
		return $this->client->post('/accounts/' . $this->accountId . '/rum/site_info', \FoundryCo\Cloudflare\Responses\WebAnalyticsSite::class, $request);
	}


	/**
	 * List Web Analytics sites
	 */
	public function list(
		?float $perPage = null,
		?float $page = null,
		?\FoundryCo\Cloudflare\Enums\WebAnalyticsOrderBy $orderBy = null,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rum/site_info/list', \FoundryCo\Cloudflare\Responses\WebAnalyticsSites::class, ['perPage' => $perPage ?? null, 'page' => $page ?? null, 'orderBy' => $orderBy ?? null]);
	}


	/**
	 * Get a Web Analytics site
	 */
	public function get(string $siteId): \FoundryCo\Cloudflare\Responses\WebAnalyticsSite
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rum/site_info/' . $siteId, \FoundryCo\Cloudflare\Responses\WebAnalyticsSite::class, []);
	}


	/**
	 * Update a Web Analytics site
	 */
	public function update(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\WebAnalyticsUpdateSiteRequest $request,
	): \FoundryCo\Cloudflare\Responses\WebAnalyticsSite
	{
		return $this->client->put('/accounts/' . $this->accountId . '/rum/site_info/' . $siteId, \FoundryCo\Cloudflare\Responses\WebAnalyticsSite::class, $request);
	}


	/**
	 * Delete a Web Analytics site
	 */
	public function delete(string $siteId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/rum/site_info/' . $siteId);
	}


	/**
	 * Create a Web Analytics rule
	 */
	public function rule(
		string $rulesetId,
		\FoundryCo\Cloudflare\Requests\WebAnalyticsCreateRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\WebAnalyticsRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/rum/v2/' . $rulesetId . '/rule', \FoundryCo\Cloudflare\Responses\WebAnalyticsRule::class, $request);
	}


	/**
	 * Update a Web Analytics rule
	 */
	public function webAnalyticsUpdateRule(
		string $rulesetId,
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\WebAnalyticsUpdateRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\WebAnalyticsRule
	{
		return $this->client->put('/accounts/' . $this->accountId . '/rum/v2/' . $rulesetId . '/rule/' . $ruleId, \FoundryCo\Cloudflare\Responses\WebAnalyticsRule::class, $request);
	}


	/**
	 * Delete a Web Analytics rule
	 */
	public function webAnalyticsDeleteRule(string $rulesetId, string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/rum/v2/' . $rulesetId . '/rule/' . $ruleId);
	}


	/**
	 * List rules in Web Analytics ruleset
	 */
	public function rules(string $rulesetId): \FoundryCo\Cloudflare\Responses\WebAnalyticsRules
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rum/v2/' . $rulesetId . '/rules', \FoundryCo\Cloudflare\Responses\WebAnalyticsRules::class, []);
	}


	/**
	 * Update Web Analytics rules
	 */
	public function webAnalyticsModifyRules(
		string $rulesetId,
		\FoundryCo\Cloudflare\Requests\WebAnalyticsModifyRulesRequest $request,
	): \FoundryCo\Cloudflare\Responses\WebAnalyticsRules
	{
		return $this->client->post('/accounts/' . $this->accountId . '/rum/v2/' . $rulesetId . '/rules', \FoundryCo\Cloudflare\Responses\WebAnalyticsRules::class, $request);
	}


	/**
	 * Get RUM status for a zone
	 */
	public function rum(): \FoundryCo\Cloudflare\Responses\WebAnalyticsStatus
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/rum', \FoundryCo\Cloudflare\Responses\WebAnalyticsStatus::class, []);
	}


	/**
	 * Toggle RUM on/off for a zone
	 */
	public function webAnalyticsToggleRum(
		\FoundryCo\Cloudflare\Requests\WebAnalyticsToggleRumRequest $request,
	): \FoundryCo\Cloudflare\Responses\WebAnalyticsRum
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/rum', \FoundryCo\Cloudflare\Responses\WebAnalyticsRum::class, $request);
	}
}
