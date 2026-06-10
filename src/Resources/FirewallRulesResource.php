<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/rules', \FoundryCo\Cloudflare\Responses\FirewallRulesListFirewallRules::class, ['description' => $description ?? null, 'action' => $action ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'id' => $id ?? null, 'paused' => $paused ?? null]);
	}


	/**
	 * Create firewall rules
	 */
	public function create(\FoundryCo\Cloudflare\Requests\FirewallRulesCreateFirewallRulesRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/firewall/rules', \FoundryCo\Cloudflare\Responses\FirewallRulesCreateFirewallRules::class, $request);
	}


	/**
	 * Update firewall rules
	 */
	public function update(): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/firewall/rules', \FoundryCo\Cloudflare\Responses\FirewallRulesUpdateFirewallRules::class, null);
	}


	/**
	 * Update priority of firewall rules
	 */
	public function rules(): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/firewall/rules', \FoundryCo\Cloudflare\Responses\FirewallRulesUpdatePriorityOfFirewallRules::class, null);
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
	public function get(string $ruleId, mixed $id = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\FirewallRulesGetAFirewallRule::class, ['id' => $id ?? null]);
	}


	/**
	 * Update a firewall rule
	 */
	public function firewallRulesUpdateAFirewallRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\FirewallRulesUpdateAFirewallRuleRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/firewall/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\FirewallRulesUpdateAFirewallRule::class, $request);
	}


	/**
	 * Update priority of a firewall rule
	 */
	public function firewallRulesUpdatePriorityOfAFirewallRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\FirewallRulesUpdatePriorityOfAFirewallRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/firewall/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\FirewallRulesUpdatePriorityOfAFirewallRule::class, $request);
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
