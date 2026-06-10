<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A collection of fields used to directly respond to the eyeball instead of routing to a pool. If a fixed_response is supplied the rule will be marked as terminates.
 */
readonly class LoadBalancersCreateLoadBalancerRulesItemFixedResponse
{
	public function __construct(
		/** The http 'Content-Type' header to include in the response. */
		public ?string $contentType = null,
		/** The http 'Location' header to include in the response. */
		public ?string $location = null,
		/** Text to include as the http body. */
		public ?string $messageBody = null,
		/** The http status code to respond with. */
		public ?int $statusCode = null,
	) {
	}
}
