<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UniversalSSLSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Universal SSL Settings Details
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ssl/universal/settings', \FoundryCo\Cloudflare\Responses\UniversalSslSettingsForAZoneUniversalSslSettingsDetails::class, []);
	}


	/**
	 * Edit Universal SSL Settings
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\UniversalSslSettingsForAZoneEditUniversalSslSettingsRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/ssl/universal/settings', \FoundryCo\Cloudflare\Responses\UniversalSslSettingsForAZoneEditUniversalSslSettings::class, $request);
	}
}
