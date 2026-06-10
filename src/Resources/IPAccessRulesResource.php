<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAccessRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List IP Access rules
	 */
	public function list(
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAZoneMode $mode = null,
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAZoneConfigurationtarget $configurationtarget = null,
		?string $configurationvalue = null,
		?string $notes = null,
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAZoneMatch $match = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAZoneOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAZoneDirection $direction = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/access_rules/rules', \FoundryCo\Cloudflare\Responses\IpAccessRulesForAZoneListIpAccessRules::class, ['mode' => $mode ?? null, 'configurationtarget' => $configurationtarget ?? null, 'configurationvalue' => $configurationvalue ?? null, 'notes' => $notes ?? null, 'match' => $match ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create an IP Access rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\IpAccessRulesForAZoneCreateAnIpAccessRuleRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/firewall/access_rules/rules', \FoundryCo\Cloudflare\Responses\IpAccessRulesForAZoneCreateAnIpAccessRule::class, $request);
	}


	/**
	 * Update an IP Access rule
	 */
	public function update(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\IpAccessRulesForAZoneUpdateAnIpAccessRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/firewall/access_rules/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\IpAccessRulesForAZoneUpdateAnIpAccessRule::class, $request);
	}


	/**
	 * Delete an IP Access rule
	 */
	public function delete(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\IpAccessRulesForAZoneDeleteAnIpAccessRuleRequest $request,
	): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/firewall/access_rules/rules/' . $ruleId);
	}
}
