<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures attributes for session affinity.
 */
readonly class LoadBalancersPatchLoadBalancerRequestSessionAffinityAttributes
{
	public function __construct(
		/** Configures the drain duration in seconds. This field is only used when session affinity is enabled on the load balancer. */
		public ?float $drainDuration = null,
		/** Configures the names of HTTP headers to base session affinity on when header `session_affinity` is enabled. At least one HTTP header name must be provided. To specify the exact cookies to be used, include an item in the following format: `"cookie:<cookie-name-1>,<cookie-name-2>"` (example) where everything after the colon is a comma-separated list of cookie names. Providing only `"cookie"` will result in all cookies being used. The default max number of HTTP header names that can be provided depends on your plan: 5 for Enterprise, 1 for all other plans. */
		public ?array $headers = null,
		/** When header `session_affinity` is enabled, this option can be used to specify how HTTP headers on load balancing requests will be used. The supported values are: - `"true"`: Load balancing requests must contain *all* of the HTTP headers specified by the `headers` session affinity attribute, otherwise sessions aren't created. - `"false"`: Load balancing requests must contain *at least one* of the HTTP headers specified by the `headers` session affinity attribute, otherwise sessions aren't created. */
		public ?bool $requireAllHeaders = null,
		/** Configures the SameSite attribute on session affinity cookie. Value "Auto" will be translated to "Lax" or "None" depending if Always Use HTTPS is enabled. Note: when using value "None", the secure attribute can not be set to "Never". */
		public ?\FoundryCo\Cloudflare\Enums\LoadBalancersPatchLoadBalancerRequestSessionAffinityAttributesSamesite $samesite = null,
		/** Configures the Secure attribute on session affinity cookie. Value "Always" indicates the Secure attribute will be set in the Set-Cookie header, "Never" indicates the Secure attribute will not be set, and "Auto" will set the Secure attribute depending if Always Use HTTPS is enabled. */
		public ?\FoundryCo\Cloudflare\Enums\LoadBalancersPatchLoadBalancerRequestSessionAffinityAttributesSecure $secure = null,
		/** Configures the zero-downtime failover between origins within a pool when session affinity is enabled. This feature is currently incompatible with Argo, Tiered Cache, and Bandwidth Alliance. The supported values are: - `"none"`: No failover takes place for sessions pinned to the origin (default). - `"temporary"`: Traffic will be sent to another other healthy origin until the originally pinned origin is available; note that this can potentially result in heavy origin flapping. - `"sticky"`: The session affinity cookie is updated and subsequent requests are sent to the new origin. Note: Zero-downtime failover with sticky sessions is currently not supported for session affinity by header. */
		public ?\FoundryCo\Cloudflare\Enums\LoadBalancersPatchLoadBalancerRequestSessionAffinityAttributesZeroDowntimeFailover $zeroDowntimeFailover = null,
	) {
	}
}
