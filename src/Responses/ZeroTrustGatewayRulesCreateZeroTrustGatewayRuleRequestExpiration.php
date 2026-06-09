<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Defines the expiration time stamp and default duration of a DNS policy. Takes precedence over the policy's `schedule` configuration, if any. This  does not apply to HTTP or network policies. Settable only for `dns` rules.
 */
readonly class ZeroTrustGatewayRulesCreateZeroTrustGatewayRuleRequestExpiration
{
	public function __construct(
		public mixed $expiresAt,
		/** Defines the default duration a policy active in minutes. Must set in order to use the `reset_expiration` endpoint on this rule. */
		public ?int $duration = null,
		/** Indicates whether the policy is expired. */
		public ?bool $expired = null,
	) {
	}
}
