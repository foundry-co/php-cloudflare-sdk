<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CallsAppsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List apps
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/calls/apps', \FoundryCo\Cloudflare\Responses\CallsAppsList::class, []);
	}


	/**
	 * Create a new app
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CallsAppsCreateANewAppRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/calls/apps', \FoundryCo\Cloudflare\Responses\CallsAppsCreateANewApp::class, $request);
	}


	/**
	 * Retrieve app details
	 */
	public function get(string $appId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/calls/apps/' . $appId, \FoundryCo\Cloudflare\Responses\CallsAppsRetrieveAppDetails::class, []);
	}


	/**
	 * Edit app details
	 */
	public function update(
		string $appId,
		\FoundryCo\Cloudflare\Requests\CallsAppsUpdateAppDetailsRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/calls/apps/' . $appId, \FoundryCo\Cloudflare\Responses\CallsAppsUpdateAppDetails::class, $request);
	}


	/**
	 * Delete app
	 */
	public function delete(string $appId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/calls/apps/' . $appId);
	}
}
