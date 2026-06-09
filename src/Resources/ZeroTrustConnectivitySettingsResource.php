<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustConnectivitySettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Zero Trust Connectivity Settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zerotrust/connectivity_settings', null, []);
	}


	/**
	 * Updates the Zero Trust Connectivity Settings
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZeroTrustAccountsPatchConnectivitySettingsRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/zerotrust/connectivity_settings', null, $request);
	}
}
