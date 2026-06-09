<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DevicePostureIntegrationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List your device posture integrations
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsIntegrations
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/posture/integration', \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsIntegrations::class, []);
	}


	/**
	 * Create a device posture integration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DevicePostureIntegrationsCreateDevicePostureIntegrationRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsIntegration
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/posture/integration', \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsIntegration::class, $request);
	}


	/**
	 * Get device posture integration details
	 */
	public function get(string $integrationId): \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/posture/integration/' . $integrationId, \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsDetails::class, []);
	}


	/**
	 * Update a device posture integration
	 */
	public function update(
		string $integrationId,
		\FoundryCo\Cloudflare\Requests\DevicePostureIntegrationsUpdateDevicePostureIntegrationRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsIntegration
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/posture/integration/' . $integrationId, \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsIntegration::class, $request);
	}


	/**
	 * Delete a device posture integration
	 */
	public function delete(string $integrationId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/posture/integration/' . $integrationId);
	}
}
