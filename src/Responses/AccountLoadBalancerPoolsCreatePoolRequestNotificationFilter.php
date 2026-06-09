<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Filter pool and origin health notifications by resource type or health status. Use null to reset.
 */
readonly class AccountLoadBalancerPoolsCreatePoolRequestNotificationFilter
{
	public function __construct(
		/** Filter options for a particular resource type (pool or origin). Use null to reset. */
		public ?AccountLoadBalancerPoolsCreatePoolRequestNotificationFilterOrigin $origin = null,
		/** Filter options for a particular resource type (pool or origin). Use null to reset. */
		public ?AccountLoadBalancerPoolsCreatePoolRequestNotificationFilterPool $pool = null,
	) {
	}
}
