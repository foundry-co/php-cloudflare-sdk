<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TotalTLSResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Total TLS Settings Details
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/acm/total_tls', \FoundryCo\Cloudflare\Responses\TotalTlsTotalTlsSettingsDetails::class, []);
	}


	/**
	 * Enable or Disable Total TLS
	 */
	public function create(\FoundryCo\Cloudflare\Requests\TotalTlsEnableOrDisableTotalTlsRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/acm/total_tls', \FoundryCo\Cloudflare\Responses\TotalTlsEnableOrDisableTotalTls::class, $request);
	}
}
