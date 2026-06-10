<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * IP address information for the ISP hop. Fields marked as PII-gated (`name`, `address`, `netmask`, and all `location` sub-fields) will be returned as the literal string `"REDACTED"` for callers that do not have the PII permission. `asn`, `aso`, and `version` are always returned regardless of PII access.
 */
readonly class DexEndpointsListDeviceIspsIspsItemIp
{
	public function __construct(
		/** IP address. Returned as `"REDACTED"` without PII permission. */
		public ?string $address = null,
		/** Autonomous System Number */
		public ?int $asn = null,
		/** Autonomous System Organization name */
		public ?string $aso = null,
		/**
		 * Geographic location information. All fields are returned as the literal string `"REDACTED"` for callers that do not have the PII permission.
		 */
		public ?DexEndpointsListDeviceIspsIspsItemIpLocation $location = null,
		/** Named IP address (reverse DNS hostname when available). Returned as `"REDACTED"` without PII permission. */
		public ?string $name = null,
		/** Network mask. Returned as `"REDACTED"` without PII permission. */
		public ?string $netmask = null,
		/** IP version (`1` for IPv4, `2` for IPv6, `0` if unknown) */
		public ?int $version = null,
	) {
	}
}
