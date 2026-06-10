<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TriggersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Create trigger
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateTriggerRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/builds/triggers', null, $request);
	}


	/**
	 * Update trigger
	 */
	public function update(string $triggerUuid, \FoundryCo\Cloudflare\Requests\UpdateTriggerRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/builds/triggers/' . $triggerUuid, null, $request);
	}


	/**
	 * Delete trigger
	 */
	public function delete(string $triggerUuid): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/builds/triggers/' . $triggerUuid);
	}


	/**
	 * Create manual build
	 */
	public function builds(string $triggerUuid, \FoundryCo\Cloudflare\Requests\CreateManualBuildRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/builds/triggers/' . $triggerUuid . '/builds', null, $request);
	}


	/**
	 * Purge build cache
	 */
	public function purgeBuildCache(string $triggerUuid): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/builds/triggers/' . $triggerUuid . '/purge_build_cache', null, null);
	}
}
