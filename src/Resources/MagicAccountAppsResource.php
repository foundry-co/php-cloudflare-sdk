<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicAccountAppsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Apps
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/apps', null, []);
	}


	/**
	 * Create a new App
	 */
	public function create(\FoundryCo\Cloudflare\Requests\MagicAccountAppsAddAppRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/apps', null, $request);
	}


	/**
	 * Update an App
	 */
	public function update(
		string $accountAppId,
		\FoundryCo\Cloudflare\Requests\MagicAccountAppsUpdateAppRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/apps/' . $accountAppId, null, $request);
	}


	/**
	 * Update an App
	 */
	public function apps(
		string $accountAppId,
		\FoundryCo\Cloudflare\Requests\MagicAccountAppsPatchAppRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/apps/' . $accountAppId, null, $request);
	}


	/**
	 * Delete Account App
	 */
	public function delete(string $accountAppId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/apps/' . $accountAppId);
	}
}
