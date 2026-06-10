<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRoutesAsnsAsnsItem
{
	public function __construct(
		public ?int $asn = null,
		/** AS's customer cone size. */
		public ?int $coneSize = null,
		/** Alpha-2 code for the AS's registration country. */
		public ?string $country = null,
		/** Number of IPv4 addresses originated by the AS. */
		public ?int $ipv4Count = null,
		/** Number of IPv6 addresses originated by the AS. */
		public ?string $ipv6Count = null,
		/** Name of the AS. */
		public ?string $name = null,
		/** Number of total IP prefixes originated by the AS. */
		public ?int $pfxsCount = null,
		/** Number of RPKI invalid prefixes originated by the AS. */
		public ?int $rpkiInvalid = null,
		/** Number of RPKI unknown prefixes originated by the AS. */
		public ?int $rpkiUnknown = null,
		/** Number of RPKI valid prefixes originated by the AS. */
		public ?int $rpkiValid = null,
	) {
	}
}
