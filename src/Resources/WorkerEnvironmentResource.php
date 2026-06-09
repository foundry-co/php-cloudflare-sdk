<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerEnvironmentResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get script content
	 */
	public function get(string $serviceName, string $environmentName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/services/' . $serviceName . '/environments/' . $environmentName . '/content', null, []);
	}


	/**
	 * Put script content
	 */
	public function update(
		string $serviceName,
		string $environmentName,
		?string $cFWORKERBODYPART = null,
		?string $cFWORKERMAINMODULEPART = null,
	): \FoundryCo\Cloudflare\Responses\WorkerEnvironmentContent
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/services/' . $serviceName . '/environments/' . $environmentName . '/content', \FoundryCo\Cloudflare\Responses\WorkerEnvironmentContent::class, null);
	}


	/**
	 * Get Script Settings
	 */
	public function settings(
		string $serviceName,
		string $environmentName,
	): \FoundryCo\Cloudflare\Responses\WorkerEnvironmentSettings
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/services/' . $serviceName . '/environments/' . $environmentName . '/settings', \FoundryCo\Cloudflare\Responses\WorkerEnvironmentSettings::class, []);
	}


	/**
	 * Patch Script Settings
	 */
	public function workerScriptEnvironmentPatchSettings(
		string $serviceName,
		string $environmentName,
		\FoundryCo\Cloudflare\Requests\WorkerScriptEnvironmentPatchSettingsRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkerEnvironmentSettings
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/services/' . $serviceName . '/environments/' . $environmentName . '/settings', \FoundryCo\Cloudflare\Responses\WorkerEnvironmentSettings::class, $request);
	}
}
