<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Filter pool and origin health notifications by resource type or health status. Use null to reset.
 */
readonly class AccountLoadBalancerPoolsUpdatePoolNotificationFilter
{
	public function __construct(
		/** Filter options for a particular resource type (pool or origin). Use null to reset. */
		public ?AccountLoadBalancerPoolsUpdatePoolNotificationFilterOrigin $origin = null,
		/** Filter options for a particular resource type (pool or origin). Use null to reset. */
		public ?AccountLoadBalancerPoolsUpdatePoolNotificationFilterPool $pool = null,
	) {
	}
}
