<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PpcConfigResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Set can_be_enabled setting on zones
	 */
	public function update(\FoundryCo\Cloudflare\Requests\PayPerCrawlsetZonesCanBeEnabledRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/pay-per-crawl/zones_can_be_enabled', null, $request);
	}


	/**
	 * Gets the can_be_enabled zone setting
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PayPerCrawlqueryZonesCanBeEnabledRequest $request,
	): \FoundryCo\Cloudflare\Responses\PpcConfigCrawlqueryZonesCanBeEnabled
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pay-per-crawl/zones_can_be_enabled/query', \FoundryCo\Cloudflare\Responses\PpcConfigCrawlqueryZonesCanBeEnabled::class, $request);
	}


	/**
	 * Get the pay-per-crawl config
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\PpcConfigCrawlgetConfig
	{
		return $this->client->get('/zones/' . $this->zoneId . '/pay-per-crawl/configuration', \FoundryCo\Cloudflare\Responses\PpcConfigCrawlgetConfig::class, []);
	}


	/**
	 * Creates pay-per-crawl config for a zone
	 */
	public function configuration(
		\FoundryCo\Cloudflare\Requests\PayPerCrawlcreateConfigRequest $request,
	): \FoundryCo\Cloudflare\Responses\PpcConfigCrawlcreateConfig
	{
		return $this->client->post('/zones/' . $this->zoneId . '/pay-per-crawl/configuration', \FoundryCo\Cloudflare\Responses\PpcConfigCrawlcreateConfig::class, $request);
	}


	/**
	 * Changes pay-per-crawl config for a zone
	 */
	public function payPerCrawlpatchConfig(
		\FoundryCo\Cloudflare\Requests\PayPerCrawlpatchConfigRequest $request,
	): \FoundryCo\Cloudflare\Responses\PpcConfigCrawlpatchConfig
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/pay-per-crawl/configuration', \FoundryCo\Cloudflare\Responses\PpcConfigCrawlpatchConfig::class, $request);
	}
}
