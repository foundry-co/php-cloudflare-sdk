<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustAccountsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get device settings for a Zero Trust account
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/settings', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount::class, []);
	}


	/**
	 * Update device settings for a Zero Trust account
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsUpdateDeviceSettingsForTheZeroTrustAccountRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/settings', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount::class, $request);
	}


	/**
	 * Patch device settings for a Zero Trust account
	 */
	public function settings(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsPatchDeviceSettingsForTheZeroTrustAccountRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/settings', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount::class, $request);
	}


	/**
	 * Reset device settings for a Zero Trust account with defaults. This turns off all proxying.
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/settings');
	}


	/**
	 * Get Zero Trust account information
	 */
	public function gateway(): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsInformation
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsInformation::class, []);
	}


	/**
	 * Create Zero Trust account
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount::class, null);
	}


	/**
	 * Get Zero Trust account configuration
	 */
	public function configuration(): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsConfiguration
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/configuration', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsConfiguration::class, []);
	}


	/**
	 * Update Zero Trust account configuration
	 */
	public function zeroTrustAccountsUpdateZeroTrustAccountConfiguration(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsConfiguration
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/configuration', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsConfiguration::class, $request);
	}


	/**
	 * Patch Zero Trust account configuration
	 */
	public function zeroTrustAccountsPatchZeroTrustAccountConfiguration(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsPatchZeroTrustAccountConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsConfiguration
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/gateway/configuration', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsConfiguration::class, $request);
	}


	/**
	 * Get Zero Trust certificate configuration
	 */
	public function customCertificate(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/configuration/custom_certificate', null, []);
	}


	/**
	 * Get gateway egress CIDRs pairs assigned to this account
	 */
	public function egressCidrPairs(): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsPairs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/egress_cidr_pairs', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsPairs::class, []);
	}


	/**
	 * Get logging settings for the Zero Trust account
	 */
	public function logging(): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/logging', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount::class, []);
	}


	/**
	 * Update Zero Trust account logging settings
	 */
	public function zeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccount(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/logging', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsAccount::class, $request);
	}
}
