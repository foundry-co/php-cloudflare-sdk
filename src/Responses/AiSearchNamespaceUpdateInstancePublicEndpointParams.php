<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceUpdateInstancePublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchNamespaceUpdateInstancePublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchNamespaceUpdateInstancePublicEndpointParamsMcp $mcp = null,
		public ?AiSearchNamespaceUpdateInstancePublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchNamespaceUpdateInstancePublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
