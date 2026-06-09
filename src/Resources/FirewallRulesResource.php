<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class FirewallRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List firewall rules
	 */
	public function list(
		?string $description = null,
		?string $action = null,
		?float $page = null,
		?float $perPage = null,
		?string $id = null,
		?bool $paused = null,
	): \FoundryCo\Cloudflare\Responses\FirewallRulesRules
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/rules', \FoundryCo\Cloudflare\Responses\FirewallRulesRules::class, ['description' => $description ?? null, 'action' => $action ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'id' => $id ?? null, 'paused' => $paused ?? null]);
	}


	/**
	 * Create firewall rules
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\FirewallRulesCreateFirewallRulesRequest $request,
	): \FoundryCo\Cloudflare\Responses\FirewallRulesRules
	{
		return $this->client->post('/zones/' . $this->zoneId . '/firewall/rules', \FoundryCo\Cloudflare\Responses\FirewallRulesRules::class, $request);
	}


	/**
	 * Update firewall rules
	 */
	public function update(): \FoundryCo\Cloudflare\Responses\FirewallRulesRules
	{
		return $this->client->put('/zones/' . $this->zoneId . '/firewall/rules', \FoundryCo\Cloudflare\Responses\FirewallRulesRules::class, null);
	}


	/**
	 * Update priority of firewall rules
	 */
	public function rules(): \FoundryCo\Cloudflare\Responses\FirewallRulesRules
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/firewall/rules', \FoundryCo\Cloudflare\Responses\FirewallRulesRules::class, null);
	}


	/**
	 * Delete firewall rules
	 */
	public function delete(\FoundryCo\Cloudflare\Requests\FirewallRulesDeleteFirewallRulesRequest $request): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/firewall/rules');
	}


	/**
	 * Get a firewall rule
	 */
	public function get(string $ruleId, mixed $id = null): \FoundryCo\Cloudflare\Responses\FirewallRulesRule
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\FirewallRulesRule::class, ['id' => $id ?? null]);
	}


	/**
	 * Update a firewall rule
	 */
	public function firewallRulesUpdateAFirewallRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\FirewallRulesUpdateAFirewallRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\FirewallRulesRule
	{
		return $this->client->put('/zones/' . $this->zoneId . '/firewall/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\FirewallRulesRule::class, $request);
	}


	/**
	 * Update priority of a firewall rule
	 */
	public function firewallRulesUpdatePriorityOfAFirewallRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\FirewallRulesUpdatePriorityOfAFirewallRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\FirewallRulesRule
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/firewall/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\FirewallRulesRule::class, $request);
	}


	/**
	 * Delete a firewall rule
	 */
	public function firewallRulesDeleteAFirewallRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\FirewallRulesDeleteAFirewallRuleRequest $request,
	): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/firewall/rules/' . $ruleId);
	}
}
