<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchCreateInstancePublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchCreateInstancePublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchCreateInstancePublicEndpointParamsMcp $mcp = null,
		public ?AiSearchCreateInstancePublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchCreateInstancePublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
