<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\DevicePostureRulesRules
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/posture', \FoundryCo\Cloudflare\Responses\DevicePostureRulesRules::class, []);
	}


	/**
	 * Create a device posture rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DevicePostureRulesCreateDevicePostureRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicePostureRulesRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/posture', \FoundryCo\Cloudflare\Responses\DevicePostureRulesRule::class, $request);
	}


	/**
	 * Get device posture rule details
	 */
	public function get(string $ruleId): \FoundryCo\Cloudflare\Responses\DevicePostureRulesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/posture/' . $ruleId, \FoundryCo\Cloudflare\Responses\DevicePostureRulesDetails::class, []);
	}


	/**
	 * Update a device posture rule
	 */
	public function update(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\DevicePostureRulesUpdateDevicePostureRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DevicePostureRulesRule
	{
		return $this->client->put('/accounts/' . $this->accountId . '/devices/posture/' . $ruleId, \FoundryCo\Cloudflare\Responses\DevicePostureRulesRule::class, $request);
	}


	/**
	 * Delete a device posture rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/posture/' . $ruleId);
	}
}
