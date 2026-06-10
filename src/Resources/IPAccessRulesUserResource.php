<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAccessRulesUserResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List IP Access rules
	 */
	public function list(
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAUserMode $mode = null,
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAUserConfigurationtarget $configurationtarget = null,
		?string $configurationvalue = null,
		?string $notes = null,
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAUserMatch $match = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAUserOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAUserDirection $direction = null,
	): mixed
	{
		return $this->client->get('/user/firewall/access_rules/rules', \FoundryCo\Cloudflare\Responses\IpAccessRulesForAUserListIpAccessRules::class, ['mode' => $mode ?? null, 'configurationtarget' => $configurationtarget ?? null, 'configurationvalue' => $configurationvalue ?? null, 'notes' => $notes ?? null, 'match' => $match ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create an IP Access rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\IpAccessRulesForAUserCreateAnIpAccessRuleRequest $request,
	): mixed
	{
		return $this->client->post('/user/firewall/access_rules/rules', \FoundryCo\Cloudflare\Responses\IpAccessRulesForAUserCreateAnIpAccessRule::class, $request);
	}


	/**
	 * Get an IP Access rule
	 */
	public function get(string $ruleId): mixed
	{
		return $this->client->get('/user/firewall/access_rules/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\IpAccessRulesForAUserGetAnIpAccessRule::class, []);
	}


	/**
	 * Update an IP Access rule
	 */
	public function update(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\IpAccessRulesForAUserUpdateAnIpAccessRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/user/firewall/access_rules/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\IpAccessRulesForAUserUpdateAnIpAccessRule::class, $request);
	}


	/**
	 * Delete an IP Access rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/user/firewall/access_rules/rules/' . $ruleId);
	}
}
