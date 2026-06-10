<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class LoadBalancerHealthcheckEventsListHealthcheckEventsOriginsItem
{
	public function __construct(
		/** The IP address (IPv4 or IPv6) of the origin, or its publicly addressable hostname. Hostnames entered here should resolve directly to the origin, and not be a hostname proxied by Cloudflare. To set an internal/reserved address, virtual_network_id must also be set. */
		public ?string $address = null,
		/** Whether the origin has changed health status. */
		public ?bool $changed = null,
		/** Whether to enable (the default) this origin within the pool. Disabled origins will not receive traffic and are excluded from health checks. The origin will only be disabled for the current pool. */
		public ?bool $enabled = null,
		/** Failure reason for un-healthy origin health check. */
		public ?string $failureReason = null,
		/** Whether the origin is reported as healthy. */
		public ?bool $healthy = null,
		/** The IP address (IPv4 or IPv6) of the origin. */
		public ?string $ip = null,
		/** A human-identifiable name for the origin. */
		public ?string $name = null,
	) {
	}
}
