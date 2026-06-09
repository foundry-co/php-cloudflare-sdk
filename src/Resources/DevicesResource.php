<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DevicesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List devices (deprecated)
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\DevicesDevices
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices', \FoundryCo\Cloudflare\Responses\DevicesDevices::class, []);
	}


	/**
	 * List device settings profiles
	 */
	public function policies(): \FoundryCo\Cloudflare\Responses\DevicesPolicies
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policies', \FoundryCo\Cloudflare\Responses\DevicesPolicies::class, []);
	}


	/**
	 * Get the default device settings profile
	 */
	public function policy(): \FoundryCo\Cloudflare\Responses\DevicesPolicy
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policy', \FoundryCo\Cloudflare\Responses\DevicesPolicy::class, []);
	}


	/**
	 * Create a device settings profile
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DevicesCreateDeviceSettingsPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicesPolicy
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/policy', \FoundryCo\Cloudflare\Responses\DevicesPolicy::class, $request);
	}


	/**
	 * Update the default device settings profile
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\DevicesUpdateDefaultDeviceSettingsPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicesPolicy
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/policy', \FoundryCo\Cloudflare\Responses\DevicesPolicy::class, $request);
	}


	/**
	 * Get the Split Tunnel exclude list
	 */
	public function exclude(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policy/exclude', null, []);
	}


	/**
	 * Set the Split Tunnel exclude list
	 */
	public function devicesSetSplitTunnelExcludeList(): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/policy/exclude', null, null);
	}


	/**
	 * Get your Local Domain Fallback list
	 */
	public function fallbackDomains(): \FoundryCo\Cloudflare\Responses\DevicesList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policy/fallback_domains', \FoundryCo\Cloudflare\Responses\DevicesList::class, []);
	}


	/**
	 * Set your Local Domain Fallback list
	 */
	public function devicesSetLocalDomainFallbackList(): \FoundryCo\Cloudflare\Responses\DevicesList
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/policy/fallback_domains', \FoundryCo\Cloudflare\Responses\DevicesList::class, null);
	}


	/**
	 * Get the Split Tunnel include list
	 */
	public function include(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policy/include', null, []);
	}


	/**
	 * Set the Split Tunnel include list
	 */
	public function devicesSetSplitTunnelIncludeList(): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/policy/include', null, null);
	}


	/**
	 * Get device settings profile by ID
	 */
	public function get(string $policyId): \FoundryCo\Cloudflare\Responses\DevicesId
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policy/' . $policyId, \FoundryCo\Cloudflare\Responses\DevicesId::class, []);
	}


	/**
	 * Update a device settings profile
	 */
	public function devicesUpdateDeviceSettingsPolicy(
		string $policyId,
		\FoundryCo\Cloudflare\Requests\DevicesUpdateDeviceSettingsPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicesPolicy
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/policy/' . $policyId, \FoundryCo\Cloudflare\Responses\DevicesPolicy::class, $request);
	}


	/**
	 * Delete a device settings profile
	 */
	public function delete(string $policyId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/policy/' . $policyId);
	}


	/**
	 * Get the Split Tunnel exclude list for a device settings profile
	 */
	public function devicesGetSplitTunnelExcludeListForADeviceSettingsPolicy(string $policyId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policy/' . $policyId . '/exclude', null, []);
	}


	/**
	 * Set the Split Tunnel exclude list for a device settings profile
	 */
	public function devicesSetSplitTunnelExcludeListForADeviceSettingsPolicy(string $policyId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/policy/' . $policyId . '/exclude', null, null);
	}


	/**
	 * Get the Local Domain Fallback list for a device settings profile
	 */
	public function devicesGetLocalDomainFallbackListForADeviceSettingsPolicy(
		string $policyId,
	): \FoundryCo\Cloudflare\Responses\DevicesPolicy
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policy/' . $policyId . '/fallback_domains', \FoundryCo\Cloudflare\Responses\DevicesPolicy::class, []);
	}


	/**
	 * Set the Local Domain Fallback list for a device settings profile
	 */
	public function devicesSetLocalDomainFallbackListForADeviceSettingsPolicy(
		string $policyId,
	): \FoundryCo\Cloudflare\Responses\DevicesPolicy
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/policy/' . $policyId . '/fallback_domains', \FoundryCo\Cloudflare\Responses\DevicesPolicy::class, null);
	}


	/**
	 * Get the Split Tunnel include list for a device settings profile
	 */
	public function devicesGetSplitTunnelIncludeListForADeviceSettingsPolicy(string $policyId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/policy/' . $policyId . '/include', null, []);
	}


	/**
	 * Set the Split Tunnel include list for a device settings profile
	 */
	public function devicesSetSplitTunnelIncludeListForADeviceSettingsPolicy(string $policyId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/policy/' . $policyId . '/include', null, null);
	}


	/**
	 * Revoke devices (deprecated)
	 */
	public function revoke(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/revoke', null, null);
	}


	/**
	 * Unrevoke devices (deprecated)
	 */
	public function unrevoke(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/unrevoke', null, null);
	}


	/**
	 * Get device (deprecated)
	 */
	public function devices(string $deviceId): \FoundryCo\Cloudflare\Responses\DevicesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/' . $deviceId, \FoundryCo\Cloudflare\Responses\DevicesDetails::class, []);
	}


	/**
	 * Get override codes (deprecated)
	 */
	public function overrideCodes(string $deviceId): \FoundryCo\Cloudflare\Responses\DevicesDevice
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/' . $deviceId . '/override_codes', \FoundryCo\Cloudflare\Responses\DevicesDevice::class, []);
	}


	/**
	 * Get device certificate provisioning status
	 */
	public function certificates(): \FoundryCo\Cloudflare\Responses\DevicesCertificates
	{
		return $this->client->get('/zones/' . $this->zoneId . '/devices/policy/certificates', \FoundryCo\Cloudflare\Responses\DevicesCertificates::class, []);
	}


	/**
	 * Update device certificate provisioning status
	 */
	public function devicesUpdatePolicyCertificates(
		\FoundryCo\Cloudflare\Requests\DevicesUpdatePolicyCertificatesRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicesCertificates
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/devices/policy/certificates', \FoundryCo\Cloudflare\Responses\DevicesCertificates::class, $request);
	}
}
