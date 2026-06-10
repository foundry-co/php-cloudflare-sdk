<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DeployHooksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List deploy hooks
	 */
	public function get(string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/workers/' . $scriptName . '/deploy_hooks', null, []);
	}


	/**
	 * Create deploy hook
	 */
	public function create(string $scriptName, \FoundryCo\Cloudflare\Requests\CreateDeployHookRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/builds/workers/' . $scriptName . '/deploy_hooks', null, $request);
	}


	/**
	 * Get deploy hook
	 */
	public function deployHooks(string $scriptName, string $deployHookUuid): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/workers/' . $scriptName . '/deploy_hooks/' . $deployHookUuid, null, []);
	}


	/**
	 * Update deploy hook
	 */
	public function update(
		string $scriptName,
		string $deployHookUuid,
		\FoundryCo\Cloudflare\Requests\UpdateDeployHookRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/builds/workers/' . $scriptName . '/deploy_hooks/' . $deployHookUuid, null, $request);
	}


	/**
	 * Delete deploy hook
	 */
	public function delete(string $scriptName, string $deployHookUuid): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/builds/workers/' . $scriptName . '/deploy_hooks/' . $deployHookUuid);
	}


	/**
	 * Trigger deploy hook
	 */
	public function triggerDeployHook(string $deployHookUuid): mixed
	{
		return $this->client->post('/workers/builds/deploy_hooks/' . $deployHookUuid, null, null);
	}
}
