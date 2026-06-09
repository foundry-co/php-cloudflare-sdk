<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single SPF component (mechanism) in the inspection tree.
 *
 * The `value` field includes the qualifier prefix (e.g., "-all", "~mx:example.com")
 * to match the raw SPF record syntax. The qualifier is also available separately
 * in the `result` field for programmatic access.
 */
readonly class EmailAuthSpfComponentsItem
{
	public function __construct(
		/**
		 * Number of DNS lookups this component requires (per RFC 7208).
		 * - MX, A, EXISTS, INCLUDE, REDIRECT, PTR: 1
		 * - IP4, IP6, ALL: 0
		 */
		public int $lookupCount,
		/** SPF mechanism result qualifier */
		public \FoundryCo\Cloudflare\Enums\EmailAuthSpfComponentsItemResult $result,
		/** Component type (UPPERCASE) */
		public \FoundryCo\Cloudflare\Enums\EmailAuthSpfComponentsItemType $type,
		/**
		 * Component value with qualifier prefix.
		 * For IP4/IP6, stores just the IP address (no "ip4:" or "ip6:" prefix).
		 * Examples: "203.0.113.1", "203.0.113.0/24", "2001:db8::1/64", "-all", "~mx:example.com", "include:_spf.example.com"
		 */
		public string $value,
		/**
		 * Nested SPF tree for INCLUDE or REDIRECT mechanisms.
		 * Only present for INCLUDE/REDIRECT components.
		 */
		public mixed $nested = null,
	) {
	}
}
