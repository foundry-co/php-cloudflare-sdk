<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\CallsAppsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/calls/apps', \FoundryCo\Cloudflare\Responses\CallsAppsList::class, []);
	}


	/**
	 * Create a new app
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CallsAppsCreateANewAppRequest $request,
	): \FoundryCo\Cloudflare\Responses\CallsAppsApp
	{
		return $this->client->post('/accounts/' . $this->accountId . '/calls/apps', \FoundryCo\Cloudflare\Responses\CallsAppsApp::class, $request);
	}


	/**
	 * Retrieve app details
	 */
	public function get(string $appId): \FoundryCo\Cloudflare\Responses\CallsAppsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/calls/apps/' . $appId, \FoundryCo\Cloudflare\Responses\CallsAppsDetails::class, []);
	}


	/**
	 * Edit app details
	 */
	public function update(
		string $appId,
		\FoundryCo\Cloudflare\Requests\CallsAppsUpdateAppDetailsRequest $request,
	): \FoundryCo\Cloudflare\Responses\CallsAppsDetails
	{
		return $this->client->put('/accounts/' . $this->accountId . '/calls/apps/' . $appId, \FoundryCo\Cloudflare\Responses\CallsAppsDetails::class, $request);
	}


	/**
	 * Delete app
	 */
	public function delete(string $appId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/calls/apps/' . $appId);
	}
}
