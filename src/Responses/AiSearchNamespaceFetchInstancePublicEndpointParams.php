<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceFetchInstancePublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchNamespaceFetchInstancePublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchNamespaceFetchInstancePublicEndpointParamsMcp $mcp = null,
		public ?AiSearchNamespaceFetchInstancePublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchNamespaceFetchInstancePublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
