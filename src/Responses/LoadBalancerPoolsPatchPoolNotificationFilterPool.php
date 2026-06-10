<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Filter options for a particular resource type (pool or origin). Use null to reset.
 */
readonly class LoadBalancerPoolsPatchPoolNotificationFilterPool
{
	public function __construct(
		/** If set true, disable notifications for this type of resource (pool or origin). */
		public ?bool $disable = null,
		/** If present, send notifications only for this health status (e.g. false for only DOWN events). Use null to reset (all events). */
		public ?bool $healthy = null,
	) {
	}
}
