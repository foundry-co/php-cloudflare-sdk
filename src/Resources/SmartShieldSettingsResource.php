<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SmartShieldSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Smart Shield Settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/smart_shield', null, []);
	}


	/**
	 * Patch Smart Shield Settings
	 */
	public function update(\FoundryCo\Cloudflare\Requests\SmartShieldPatchSettingsRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/smart_shield', null, $request);
	}
}
