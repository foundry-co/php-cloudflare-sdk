<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerAccountSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch Worker Account Settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/account-settings', \FoundryCo\Cloudflare\Responses\WorkerAccountSettingsFetchWorkerAccountSettings::class, []);
	}


	/**
	 * Create Worker Account Settings
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\WorkerAccountSettingsCreateWorkerAccountSettingsRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/account-settings', \FoundryCo\Cloudflare\Responses\WorkerAccountSettingsCreateWorkerAccountSettings::class, $request);
	}
}
