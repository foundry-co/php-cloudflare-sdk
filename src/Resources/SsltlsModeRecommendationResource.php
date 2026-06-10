<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SsltlsModeRecommendationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * SSL/TLS Recommendation
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ssl/recommendation', \FoundryCo\Cloudflare\Responses\SslTlsModeRecommendationSslTlsRecommendation::class, []);
	}
}
