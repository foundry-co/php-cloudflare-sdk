<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WAFRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List WAF rules
	 */
	public function get(
		string $packageId,
		?\FoundryCo\Cloudflare\Enums\WAFRulesMode $mode = null,
		mixed $groupId = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\WAFRulesOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\WAFRulesDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\WAFRulesMatch $match = null,
		?string $description = null,
		?string $priority = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/packages/' . $packageId . '/rules', null, ['mode' => $mode ?? null, 'groupId' => $groupId ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'match' => $match ?? null, 'description' => $description ?? null, 'priority' => $priority ?? null]);
	}


	/**
	 * Get a WAF rule
	 */
	public function rules(string $ruleId, string $packageId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/packages/' . $packageId . '/rules/' . $ruleId, null, []);
	}


	/**
	 * Update a WAF rule
	 */
	public function update(
		string $ruleId,
		string $packageId,
		\FoundryCo\Cloudflare\Requests\WafRulesUpdateAWafRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/firewall/waf/packages/' . $packageId . '/rules/' . $ruleId, null, $request);
	}
}
