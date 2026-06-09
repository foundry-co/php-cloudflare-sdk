<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomNameserversResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Account Custom Nameserver Related Zone Metadata
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_ns', null, []);
	}


	/**
	 * Set Account Custom Nameserver Related Zone Metadata
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\AccountLevelCustomNameserversUsageForAZoneSetAccountCustomNameserverRelatedZoneMetadataRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/custom_ns', null, $request);
	}
}
