<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceListInstancesPublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchNamespaceListInstancesPublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchNamespaceListInstancesPublicEndpointParamsMcp $mcp = null,
		public ?AiSearchNamespaceListInstancesPublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchNamespaceListInstancesPublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
