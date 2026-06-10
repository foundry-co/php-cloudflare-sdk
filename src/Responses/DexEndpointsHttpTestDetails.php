<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsHttpTestDetails
{
	public function __construct(
		/** The url of the HTTP synthetic application test */
		public ?string $host = null,
		public ?DexEndpointsHttpTestDetailsHttpStats $httpStats = null,
		public ?array $httpStatsByColo = null,
		/** The interval at which the HTTP synthetic application test is set to run. */
		public ?string $interval = null,
		public ?\FoundryCo\Cloudflare\Enums\DexEndpointsHttpTestDetailsKind $kind = null,
		/** The HTTP method to use when running the test */
		public ?string $method = null,
		/** The name of the HTTP synthetic application test */
		public ?string $name = null,
		public ?array $targetPolicies = null,
		public ?bool $targeted = null,
	) {
	}
}
