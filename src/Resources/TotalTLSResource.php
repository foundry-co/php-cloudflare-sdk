<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\TotalTLSDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/acm/total_tls', \FoundryCo\Cloudflare\Responses\TotalTLSDetails::class, []);
	}


	/**
	 * Enable or Disable Total TLS
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\TotalTlsEnableOrDisableTotalTlsRequest $request,
	): \FoundryCo\Cloudflare\Responses\TotalTLSTls
	{
		return $this->client->post('/zones/' . $this->zoneId . '/acm/total_tls', \FoundryCo\Cloudflare\Responses\TotalTLSTls::class, $request);
	}
}
