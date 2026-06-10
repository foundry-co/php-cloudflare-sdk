<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchDeleteInstancePublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchDeleteInstancePublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchDeleteInstancePublicEndpointParamsMcp $mcp = null,
		public ?AiSearchDeleteInstancePublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchDeleteInstancePublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
