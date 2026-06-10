<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceCreateInstanceRequestPublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchNamespaceCreateInstanceRequestPublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchNamespaceCreateInstanceRequestPublicEndpointParamsMcp $mcp = null,
		public ?AiSearchNamespaceCreateInstanceRequestPublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchNamespaceCreateInstanceRequestPublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
