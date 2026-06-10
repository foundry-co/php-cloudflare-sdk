<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AppsResource
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
		return $this->client->get('/accounts/' . $this->accountId . '/flagship/apps', \FoundryCo\Cloudflare\Responses\FlagshipListApps::class, []);
	}


	/**
	 * Create app
	 */
	public function create(\FoundryCo\Cloudflare\Requests\FlagshipCreateAppRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/flagship/apps', \FoundryCo\Cloudflare\Responses\FlagshipCreateApp::class, $request);
	}


	/**
	 * Get app
	 */
	public function get(string $appId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/flagship/apps/' . $appId, \FoundryCo\Cloudflare\Responses\FlagshipGetApp::class, []);
	}


	/**
	 * Update app
	 */
	public function update(string $appId, \FoundryCo\Cloudflare\Requests\FlagshipUpdateAppRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/flagship/apps/' . $appId, \FoundryCo\Cloudflare\Responses\FlagshipUpdateApp::class, $request);
	}


	/**
	 * Delete app
	 */
	public function delete(string $appId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/flagship/apps/' . $appId);
	}


	/**
	 * Fetch all apps
	 */
	public function apps(
		?int $pageNo = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\AppsSortOrder $sortOrder = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/apps', null, ['pageNo' => $pageNo ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'sortOrder' => $sortOrder ?? null]);
	}


	/**
	 * Create App
	 */
	public function createApp(\FoundryCo\Cloudflare\Requests\CreateAppRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/apps', null, $request);
	}


	/**
	 * Fetch app details
	 */
	public function getApp(string $appId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/apps/' . $appId, null, []);
	}
}
