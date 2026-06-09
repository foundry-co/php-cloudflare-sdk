<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicNetworkMonitoringConfigurationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List account configuration
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationConfiguration
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mnm/config', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationConfiguration::class, []);
	}


	/**
	 * Create account configuration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringConfigurationCreateAccountConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationConfiguration
	{
		return $this->client->post('/accounts/' . $this->accountId . '/mnm/config', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationConfiguration::class, $request);
	}


	/**
	 * Update an entire account configuration
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringConfigurationUpdateAnEntireAccountConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationConfiguration
	{
		return $this->client->put('/accounts/' . $this->accountId . '/mnm/config', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationConfiguration::class, $request);
	}


	/**
	 * Update account configuration fields
	 */
	public function config(
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringConfigurationUpdateAccountConfigurationFieldsRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationFields
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/mnm/config', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationFields::class, $request);
	}


	/**
	 * Delete account configuration
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/mnm/config');
	}


	/**
	 * List rules and account configuration
	 */
	public function full(): \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationConfiguration
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mnm/config/full', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationConfiguration::class, []);
	}
}
