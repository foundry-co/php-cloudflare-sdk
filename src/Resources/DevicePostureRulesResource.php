<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DevicePostureRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List device posture rules
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/posture', \FoundryCo\Cloudflare\Responses\DevicePostureRulesListDevicePostureRules::class, []);
	}


	/**
	 * Create a device posture rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DevicePostureRulesCreateDevicePostureRuleRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/posture', \FoundryCo\Cloudflare\Responses\DevicePostureRulesCreateDevicePostureRule::class, $request);
	}


	/**
	 * Get device posture rule details
	 */
	public function get(string $ruleId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/posture/' . $ruleId, \FoundryCo\Cloudflare\Responses\DevicePostureRulesDevicePostureRulesDetails::class, []);
	}


	/**
	 * Update a device posture rule
	 */
	public function update(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\DevicePostureRulesUpdateDevicePostureRuleRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/posture/' . $ruleId, \FoundryCo\Cloudflare\Responses\DevicePostureRulesUpdateDevicePostureRule::class, $request);
	}


	/**
	 * Delete a device posture rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/posture/' . $ruleId);
	}
}
