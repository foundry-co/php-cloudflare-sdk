<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A custom DHCP option to include in DHCP responses.
 */
readonly class MagicSiteLansCreateLanRequestStaticAddressingDhcpServerDhcpOptionsItem
{
	public function __construct(
		/** DHCP option number (1-254). Options 0 and 255 are reserved by RFC 2132. Options 3, 6, and 51 are not allowed because they conflict with connector-managed configuration. */
		public int $code,
		/**
		 * The type of the option value. text: a string (max 255 bytes). hex: colon-separated hex bytes (e.g. "01:04:aa:bb:cc", max 255 bytes). ip: an IPv4 address (e.g. "10.20.30.40"). byte: an unsigned integer 0-255 (1 byte). short: an unsigned integer 0-65535 (2 bytes). integer: an unsigned integer 0-4294967295 (4 bytes).
		 */
		public \FoundryCo\Cloudflare\Enums\MagicSiteLansCreateLanRequestStaticAddressingDhcpServerDhcpOptionsItemType $type,
		/** The option value, interpreted according to the type field. */
		public string $value,
	) {
	}
}
