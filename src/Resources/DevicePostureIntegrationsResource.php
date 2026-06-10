<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/posture/integration', \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsListDevicePostureIntegrations::class, []);
	}


	/**
	 * Create a device posture integration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DevicePostureIntegrationsCreateDevicePostureIntegrationRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/posture/integration', \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsCreateDevicePostureIntegration::class, $request);
	}


	/**
	 * Get device posture integration details
	 */
	public function get(string $integrationId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/posture/integration/' . $integrationId, \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsDevicePostureIntegrationDetails::class, []);
	}


	/**
	 * Update a device posture integration
	 */
	public function update(
		string $integrationId,
		\FoundryCo\Cloudflare\Requests\DevicePostureIntegrationsUpdateDevicePostureIntegrationRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/posture/integration/' . $integrationId, \FoundryCo\Cloudflare\Responses\DevicePostureIntegrationsUpdateDevicePostureIntegration::class, $request);
	}


	/**
	 * Delete a device posture integration
	 */
	public function delete(string $integrationId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/posture/integration/' . $integrationId);
	}
}
