<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicSiteNetflowConfigResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * NetFlow Configuration Details
	 */
	public function get(string $siteId): \FoundryCo\Cloudflare\Responses\MagicSiteNetFlowConfigDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/netflow_config', \FoundryCo\Cloudflare\Responses\MagicSiteNetFlowConfigDetails::class, []);
	}


	/**
	 * Create NetFlow Configuration
	 */
	public function create(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSiteNetflowConfigCreateNetflowConfigRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteNetFlowConfigConfig
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/netflow_config', \FoundryCo\Cloudflare\Responses\MagicSiteNetFlowConfigConfig::class, $request);
	}


	/**
	 * Update NetFlow Configuration
	 */
	public function update(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSiteNetflowConfigUpdateNetflowConfigRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteNetFlowConfigConfig
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/netflow_config', \FoundryCo\Cloudflare\Responses\MagicSiteNetFlowConfigConfig::class, $request);
	}


	/**
	 * Update NetFlow Configuration
	 */
	public function netflowConfig(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSiteNetflowConfigPatchNetflowConfigRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteNetFlowConfigConfig
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/netflow_config', \FoundryCo\Cloudflare\Responses\MagicSiteNetFlowConfigConfig::class, $request);
	}


	/**
	 * Delete NetFlow Configuration
	 */
	public function delete(string $siteId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/netflow_config');
	}
}
