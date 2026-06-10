<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchFetchInstancePublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchFetchInstancePublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchFetchInstancePublicEndpointParamsMcp $mcp = null,
		public ?AiSearchFetchInstancePublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchFetchInstancePublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
