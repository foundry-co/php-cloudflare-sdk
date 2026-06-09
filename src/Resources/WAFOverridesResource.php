<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\WAFOverridesOverrides
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/overrides', \FoundryCo\Cloudflare\Responses\WAFOverridesOverrides::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a WAF override
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WafOverridesCreateAWafOverrideRequest $request,
	): \FoundryCo\Cloudflare\Responses\WAFOverridesOverride
	{
		return $this->client->post('/zones/' . $this->zoneId . '/firewall/waf/overrides', \FoundryCo\Cloudflare\Responses\WAFOverridesOverride::class, $request);
	}


	/**
	 * Get a WAF override
	 */
	public function get(string $overridesId): \FoundryCo\Cloudflare\Responses\WAFOverridesOverride
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/overrides/' . $overridesId, \FoundryCo\Cloudflare\Responses\WAFOverridesOverride::class, []);
	}


	/**
	 * Update WAF override
	 */
	public function update(
		string $overridesId,
		\FoundryCo\Cloudflare\Requests\WafOverridesUpdateWafOverrideRequest $request,
	): \FoundryCo\Cloudflare\Responses\WAFOverridesOverride
	{
		return $this->client->put('/zones/' . $this->zoneId . '/firewall/waf/overrides/' . $overridesId, \FoundryCo\Cloudflare\Responses\WAFOverridesOverride::class, $request);
	}


	/**
	 * Delete a WAF override
	 */
	public function delete(string $overridesId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/firewall/waf/overrides/' . $overridesId);
	}
}
