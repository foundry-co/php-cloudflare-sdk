<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ArgoAnalyticsForGeolocationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Argo Analytics for a zone at different PoPs
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/analytics/latency/colos', null, []);
	}
}
