<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Client IP restrictions.
 */
readonly class AccountApiTokensTokenDetailsConditionRequestIp
{
	public function __construct(
		/** List of IPv4/IPv6 CIDR addresses. */
		public ?array $in = null,
		/** List of IPv4/IPv6 CIDR addresses. */
		public ?array $notIn = null,
	) {
	}
}
