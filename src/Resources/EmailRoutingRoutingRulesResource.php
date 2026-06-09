<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EmailRoutingRoutingRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List routing rules
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesEnabled $enabled = null,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing/rules', \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRules::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'enabled' => $enabled ?? null]);
	}


	/**
	 * Create routing rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\EmailRoutingRoutingRulesCreateRoutingRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/rules', \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule::class, $request);
	}


	/**
	 * Get catch-all rule
	 */
	public function catchAll(): \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing/rules/catch_all', \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule::class, []);
	}


	/**
	 * Update catch-all rule
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\EmailRoutingRoutingRulesUpdateCatchAllRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule
	{
		return $this->client->put('/zones/' . $this->zoneId . '/email/routing/rules/catch_all', \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule::class, $request);
	}


	/**
	 * Get routing rule
	 */
	public function get(string $ruleIdentifier): \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing/rules/' . $ruleIdentifier, \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule::class, []);
	}


	/**
	 * Update routing rule
	 */
	public function rules(
		string $ruleIdentifier,
		\FoundryCo\Cloudflare\Requests\EmailRoutingRoutingRulesUpdateRoutingRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule
	{
		return $this->client->put('/zones/' . $this->zoneId . '/email/routing/rules/' . $ruleIdentifier, \FoundryCo\Cloudflare\Responses\EmailRoutingRoutingRulesRule::class, $request);
	}


	/**
	 * Delete routing rule
	 */
	public function delete(string $ruleIdentifier): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/email/routing/rules/' . $ruleIdentifier);
	}
}
