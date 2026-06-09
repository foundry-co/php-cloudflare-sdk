<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BotSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Zone Bot Management Config
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/bot_management', null, []);
	}


	/**
	 * Update Zone Bot Management Config
	 */
	public function update(): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/bot_management', null, null);
	}
}
