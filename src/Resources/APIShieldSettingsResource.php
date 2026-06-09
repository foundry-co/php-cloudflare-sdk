<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class APIShieldSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Retrieve information about specific configuration properties
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\APIShieldSettingsProperties
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/configuration', \FoundryCo\Cloudflare\Responses\APIShieldSettingsProperties::class, []);
	}


	/**
	 * Update configuration properties
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ApiShieldSettingsSetConfigurationPropertiesRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldSettingsProperties
	{
		return $this->client->put('/zones/' . $this->zoneId . '/api_gateway/configuration', \FoundryCo\Cloudflare\Responses\APIShieldSettingsProperties::class, $request);
	}
}
