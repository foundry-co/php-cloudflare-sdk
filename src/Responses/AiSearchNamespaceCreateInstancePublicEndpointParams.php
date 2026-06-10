<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceCreateInstancePublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchNamespaceCreateInstancePublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchNamespaceCreateInstancePublicEndpointParamsMcp $mcp = null,
		public ?AiSearchNamespaceCreateInstancePublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchNamespaceCreateInstancePublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
