<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPAsnsAsnsItem
{
	public function __construct(
		public int $asn,
		/** AS's customer cone size. */
		public int $coneSize,
		/** Alpha-2 code for the AS's registration country. */
		public string $country,
		/** Number of IPv4 addresses originated by the AS. */
		public int $ipv4Count,
		/** Number of IPv6 addresses originated by the AS. */
		public string $ipv6Count,
		/** Name of the AS. */
		public string $name,
		/** Number of total IP prefixes originated by the AS. */
		public int $pfxsCount,
		/** Number of RPKI invalid prefixes originated by the AS. */
		public int $rpkiInvalid,
		/** Number of RPKI unknown prefixes originated by the AS. */
		public int $rpkiUnknown,
		/** Number of RPKI valid prefixes originated by the AS. */
		public int $rpkiValid,
	) {
	}
}
