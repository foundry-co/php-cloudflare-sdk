<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class GoogleTagGatewayResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Google Tag Gateway configuration
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/google-tag-gateway/config', \FoundryCo\Cloudflare\Responses\ZoneSettingsGetGoogleTagGatewayConfig::class, []);
	}


	/**
	 * Update Google Tag Gateway configuration
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneSettingsChangeGoogleTagGatewayConfigRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/settings/google-tag-gateway/config', \FoundryCo\Cloudflare\Responses\ZoneSettingsChangeGoogleTagGatewayConfig::class, $request);
	}
}
