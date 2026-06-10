<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/settings', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsGetDeviceSettingsForZeroTrustAccount::class, []);
	}


	/**
	 * Update device settings for a Zero Trust account
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsUpdateDeviceSettingsForTheZeroTrustAccountRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/settings', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsUpdateDeviceSettingsForTheZeroTrustAccount::class, $request);
	}


	/**
	 * Patch device settings for a Zero Trust account
	 */
	public function settings(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsPatchDeviceSettingsForTheZeroTrustAccountRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/settings', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsPatchDeviceSettingsForTheZeroTrustAccount::class, $request);
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
	public function gateway(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsGetZeroTrustAccountInformation::class, []);
	}


	/**
	 * Create Zero Trust account
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsCreateZeroTrustAccount::class, null);
	}


	/**
	 * Get Zero Trust account configuration
	 */
	public function configuration(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/configuration', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsGetZeroTrustAccountConfiguration::class, []);
	}


	/**
	 * Update Zero Trust account configuration
	 */
	public function zeroTrustAccountsUpdateZeroTrustAccountConfiguration(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/configuration', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsUpdateZeroTrustAccountConfiguration::class, $request);
	}


	/**
	 * Patch Zero Trust account configuration
	 */
	public function zeroTrustAccountsPatchZeroTrustAccountConfiguration(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsPatchZeroTrustAccountConfigurationRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/gateway/configuration', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsPatchZeroTrustAccountConfiguration::class, $request);
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
	public function egressCidrPairs(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/egress_cidr_pairs', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsGetEgressCidrPairs::class, []);
	}


	/**
	 * Get logging settings for the Zero Trust account
	 */
	public function logging(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/logging', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsGetLoggingSettingsForTheZeroTrustAccount::class, []);
	}


	/**
	 * Update Zero Trust account logging settings
	 */
	public function zeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccount(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/logging', \FoundryCo\Cloudflare\Responses\ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccount::class, $request);
	}
}
