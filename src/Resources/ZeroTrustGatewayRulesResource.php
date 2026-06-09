<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustGatewayRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Zero Trust Gateway rules
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRules
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/rules', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRules::class, []);
	}


	/**
	 * Create a Zero Trust Gateway rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayRulesCreateZeroTrustGatewayRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/rules', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRule::class, $request);
	}


	/**
	 * Patch multiple Zero Trust Gateway rules
	 */
	public function update(): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRules
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/gateway/rules', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRules::class, null);
	}


	/**
	 * List Zero Trust Gateway rules inherited from the parent account
	 */
	public function tenant(): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesTenant
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/rules/tenant', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesTenant::class, []);
	}


	/**
	 * Get Zero Trust Gateway rule details.
	 */
	public function get(string $ruleId): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesDetails::class, []);
	}


	/**
	 * Update a Zero Trust Gateway rule
	 */
	public function rules(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRule
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRule::class, $request);
	}


	/**
	 * Patch a Zero Trust Gateway rule
	 */
	public function zeroTrustGatewayRulesPatchZeroTrustGatewayRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayRulesPatchZeroTrustGatewayRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRule
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/gateway/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRule::class, $request);
	}


	/**
	 * Delete a Zero Trust Gateway rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/gateway/rules/' . $ruleId);
	}


	/**
	 * Reset the expiration of a Zero Trust Gateway Rule
	 */
	public function resetExpiration(string $ruleId): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/rules/' . $ruleId . '/reset_expiration', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesRule::class, null);
	}
}
