<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class APIShieldWAFExpressionTemplatesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Generate fallthrough WAF expression template from a set of API hosts
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ApiShieldExpressionTemplatesFallthroughRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/api_gateway/expression-template/fallthrough', \FoundryCo\Cloudflare\Responses\ApiShieldExpressionTemplatesFallthrough::class, $request);
	}
}
