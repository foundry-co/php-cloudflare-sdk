<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WAFRuleGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List WAF rule groups
	 */
	public function get(
		string $packageId,
		mixed $mode = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\WAFRuleGroupsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\WAFRuleGroupsDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\WAFRuleGroupsMatch $match = null,
		?string $name = null,
		?float $rulesCount = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/packages/' . $packageId . '/groups', \FoundryCo\Cloudflare\Responses\WafRuleGroupsListWafRuleGroups::class, ['mode' => $mode ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'match' => $match ?? null, 'name' => $name ?? null, 'rulesCount' => $rulesCount ?? null]);
	}


	/**
	 * Get a WAF rule group
	 */
	public function groups(string $groupId, string $packageId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/packages/' . $packageId . '/groups/' . $groupId, null, []);
	}


	/**
	 * Update a WAF rule group
	 */
	public function update(
		string $groupId,
		string $packageId,
		\FoundryCo\Cloudflare\Requests\WafRuleGroupsUpdateAWafRuleGroupRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/firewall/waf/packages/' . $packageId . '/groups/' . $groupId, null, $request);
	}
}
