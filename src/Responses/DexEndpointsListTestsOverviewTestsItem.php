<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsListTestsOverviewTestsItem
{
	public function __construct(
		/** date the test was created. */
		public ?string $created = null,
		/** the test description defined during configuration */
		public ?string $description = null,
		/** if true, then the test will run on targeted devices. Else, the test will not run. */
		public ?bool $enabled = null,
		public ?string $host = null,
		/** API Resource UUID tag. */
		public ?string $id = null,
		/** The interval at which the synthetic application test is set to run. */
		public ?string $interval = null,
		/** test type, http or traceroute */
		public ?\FoundryCo\Cloudflare\Enums\DexEndpointsListTestsOverviewTestsItemKind $kind = null,
		/** name given to this test */
		public ?string $name = null,
		public ?string $updated = null,
		public ?DexEndpointsListTestsOverviewTestsItemHttpResults $httpResults = null,
		public ?array $httpResultsByColo = null,
		/** for HTTP, the method to use when running the test */
		public ?string $method = null,
		public ?array $targetPolicies = null,
		public ?bool $targeted = null,
		public ?DexEndpointsListTestsOverviewTestsItemTracerouteResults $tracerouteResults = null,
		public ?array $tracerouteResultsByColo = null,
	) {
	}
}
