<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringOverviewTestsItem
{
	public function __construct(
		/** date the test was created. */
		public string $created,
		/** the test description defined during configuration */
		public string $description,
		/** if true, then the test will run on targeted devices. Else, the test will not run. */
		public bool $enabled,
		public string $host,
		/** API Resource UUID tag. */
		public string $id,
		/** The interval at which the synthetic application test is set to run. */
		public string $interval,
		/** test type, http or traceroute */
		public \FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringOverviewTestsItemKind $kind,
		/** name given to this test */
		public string $name,
		public string $updated,
		public ?DEXSyntheticApplicationMonitoringOverviewTestsItemHttpResults $httpResults = null,
		public ?array $httpResultsByColo = null,
		/** for HTTP, the method to use when running the test */
		public ?string $method = null,
		public ?array $targetPolicies = null,
		public ?bool $targeted = null,
		public ?DEXSyntheticApplicationMonitoringOverviewTestsItemTracerouteResults $tracerouteResults = null,
		public ?array $tracerouteResultsByColo = null,
	) {
	}
}
