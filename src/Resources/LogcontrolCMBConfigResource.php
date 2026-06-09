<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LogcontrolCMBConfigResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get CMB config
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\LogcontrolCMBConfigForAnAccountConfig
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/control/cmb/config', \FoundryCo\Cloudflare\Responses\LogcontrolCMBConfigForAnAccountConfig::class, []);
	}


	/**
	 * Update CMB config
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PostAccountsAccountIdLogsControlCmbConfigRequest $request,
	): \FoundryCo\Cloudflare\Responses\LogcontrolCMBConfigForAnAccountConfig
	{
		return $this->client->post('/accounts/' . $this->accountId . '/logs/control/cmb/config', \FoundryCo\Cloudflare\Responses\LogcontrolCMBConfigForAnAccountConfig::class, $request);
	}


	/**
	 * Delete CMB config
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/logs/control/cmb/config');
	}
}
