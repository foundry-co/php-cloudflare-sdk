<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceUpdateInstanceRequestPublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchNamespaceUpdateInstanceRequestPublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchNamespaceUpdateInstanceRequestPublicEndpointParamsMcp $mcp = null,
		public ?AiSearchNamespaceUpdateInstanceRequestPublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchNamespaceUpdateInstanceRequestPublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
