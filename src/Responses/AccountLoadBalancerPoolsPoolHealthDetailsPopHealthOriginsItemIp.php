<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountLoadBalancerPoolsPoolHealthDetailsPopHealthOriginsItemIp
{
	public function __construct(
		/** Failure reason. */
		public ?string $failureReason = null,
		/** Origin health status. */
		public ?bool $healthy = null,
		/** Response code from origin health check. */
		public ?float $responseCode = null,
		/** Origin RTT (Round Trip Time) response. */
		public ?string $rtt = null,
	) {
	}
}
