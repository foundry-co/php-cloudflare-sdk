<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EnvironmentVariablesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List environment variables
	 */
	public function get(string $triggerUuid): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/triggers/' . $triggerUuid . '/environment_variables', null, []);
	}


	/**
	 * Upsert environment variables
	 */
	public function update(string $triggerUuid): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/builds/triggers/' . $triggerUuid . '/environment_variables', null, null);
	}


	/**
	 * Delete environment variable
	 */
	public function delete(string $triggerUuid, string $environmentVariableKey): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/builds/triggers/' . $triggerUuid . '/environment_variables/' . $environmentVariableKey);
	}
}
