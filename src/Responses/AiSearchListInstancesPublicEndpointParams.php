<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchListInstancesPublicEndpointParams
{
	public function __construct(
		public ?array $authorizedHosts = null,
		public ?AiSearchListInstancesPublicEndpointParamsChatCompletionsEndpoint $chatCompletionsEndpoint = null,
		public ?bool $enabled = null,
		public ?AiSearchListInstancesPublicEndpointParamsMcp $mcp = null,
		public ?AiSearchListInstancesPublicEndpointParamsRateLimit $rateLimit = null,
		public ?AiSearchListInstancesPublicEndpointParamsSearchEndpoint $searchEndpoint = null,
	) {
	}
}
