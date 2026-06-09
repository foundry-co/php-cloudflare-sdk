<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UserAgentBlockingRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List User Agent Blocking rules
	 */
	public function list(
		?float $page = null,
		mixed $description = null,
		?float $perPage = null,
		?string $userAgent = null,
		?bool $paused = null,
	): \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesRules
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/ua_rules', \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesRules::class, ['page' => $page ?? null, 'description' => $description ?? null, 'perPage' => $perPage ?? null, 'userAgent' => $userAgent ?? null, 'paused' => $paused ?? null]);
	}


	/**
	 * Create a User Agent Blocking rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\UserAgentBlockingRulesCreateAUserAgentBlockingRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesRule
	{
		return $this->client->post('/zones/' . $this->zoneId . '/firewall/ua_rules', \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesRule::class, $request);
	}


	/**
	 * Get a User Agent Blocking rule
	 */
	public function get(string $uaRuleId): \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesRule
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/ua_rules/' . $uaRuleId, \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesRule::class, []);
	}


	/**
	 * Update a User Agent Blocking rule
	 */
	public function update(
		string $uaRuleId,
		\FoundryCo\Cloudflare\Requests\UserAgentBlockingRulesUpdateAUserAgentBlockingRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesRule
	{
		return $this->client->put('/zones/' . $this->zoneId . '/firewall/ua_rules/' . $uaRuleId, \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesRule::class, $request);
	}


	/**
	 * Delete a User Agent Blocking rule
	 */
	public function delete(string $uaRuleId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/firewall/ua_rules/' . $uaRuleId);
	}
}
