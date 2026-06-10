<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mnm/config', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationListAccountConfiguration::class, []);
	}


	/**
	 * Create account configuration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringConfigurationCreateAccountConfigurationRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/mnm/config', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationCreateAccountConfiguration::class, $request);
	}


	/**
	 * Update an entire account configuration
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringConfigurationUpdateAnEntireAccountConfigurationRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/mnm/config', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationUpdateAnEntireAccountConfiguration::class, $request);
	}


	/**
	 * Update account configuration fields
	 */
	public function config(
		\FoundryCo\Cloudflare\Requests\MagicNetworkMonitoringConfigurationUpdateAccountConfigurationFieldsRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/mnm/config', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationUpdateAccountConfigurationFields::class, $request);
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
	public function full(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mnm/config/full', \FoundryCo\Cloudflare\Responses\MagicNetworkMonitoringConfigurationListRulesAndAccountConfiguration::class, []);
	}
}
