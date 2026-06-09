<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get the current settings for the active account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/settings', null, []);
	}


	/**
	 * Update the current settings for the active account
	 */
	public function update(\FoundryCo\Cloudflare\Requests\UpdateSettingsRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cni/settings', null, $request);
	}
}
