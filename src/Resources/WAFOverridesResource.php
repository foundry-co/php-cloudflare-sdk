<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WAFOverridesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List WAF overrides
	 */
	public function list(?float $page = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/overrides', \FoundryCo\Cloudflare\Responses\WafOverridesListWafOverrides::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a WAF override
	 */
	public function create(\FoundryCo\Cloudflare\Requests\WafOverridesCreateAWafOverrideRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/firewall/waf/overrides', \FoundryCo\Cloudflare\Responses\WafOverridesCreateAWafOverride::class, $request);
	}


	/**
	 * Get a WAF override
	 */
	public function get(string $overridesId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/overrides/' . $overridesId, \FoundryCo\Cloudflare\Responses\WafOverridesGetAWafOverride::class, []);
	}


	/**
	 * Update WAF override
	 */
	public function update(
		string $overridesId,
		\FoundryCo\Cloudflare\Requests\WafOverridesUpdateWafOverrideRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/firewall/waf/overrides/' . $overridesId, \FoundryCo\Cloudflare\Responses\WafOverridesUpdateWafOverride::class, $request);
	}


	/**
	 * Delete a WAF override
	 */
	public function delete(string $overridesId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/firewall/waf/overrides/' . $overridesId);
	}
}
