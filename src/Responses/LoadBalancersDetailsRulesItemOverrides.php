<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A collection of overrides to apply to the load balancer when this rule's condition is true. All fields are optional.
 */
readonly class LoadBalancersDetailsRulesItemOverrides
{
	public function __construct(
		public ?array $adaptiveRouting = null,
		public ?array $countryPools = null,
		public ?array $defaultPools = null,
		public ?array $fallbackPool = null,
		public ?array $locationStrategy = null,
		public ?array $popPools = null,
		public ?array $randomSteering = null,
		public ?array $regionPools = null,
		public ?array $sessionAffinity = null,
		public ?array $sessionAffinityAttributes = null,
		public ?array $sessionAffinityTtl = null,
		public ?array $steeringPolicy = null,
		public ?array $ttl = null,
	) {
	}
}
