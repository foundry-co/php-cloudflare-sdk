<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicSiteAppConfigsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List App Configs
	 */
	public function get(string $siteId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/app_configs', null, []);
	}


	/**
	 * Create a new App Config
	 */
	public function create(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSiteAppConfigsAddAppConfigRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/app_configs', null, $request);
	}


	/**
	 * Update an App Config
	 */
	public function update(
		string $siteId,
		string $appConfigId,
		\FoundryCo\Cloudflare\Requests\MagicSiteAppConfigsUpdateAppConfigRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/app_configs/' . $appConfigId, null, $request);
	}


	/**
	 * Update an App Config
	 */
	public function appConfigs(
		string $siteId,
		string $appConfigId,
		\FoundryCo\Cloudflare\Requests\MagicSiteAppConfigsPatchAppConfigRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/app_configs/' . $appConfigId, null, $request);
	}


	/**
	 * Delete App Config
	 */
	public function delete(string $siteId, string $appConfigId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/app_configs/' . $appConfigId);
	}
}
