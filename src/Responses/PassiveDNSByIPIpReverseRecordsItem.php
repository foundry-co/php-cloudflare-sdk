<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PassiveDNSByIPIpReverseRecordsItem
{
	public function __construct(
		/** First seen date of the DNS record during the time period. */
		public ?\DateTimeImmutable $firstSeen = null,
		/** Hostname that the IP was observed resolving to. */
		public ?string $hostname = null,
		/** Last seen date of the DNS record during the time period. */
		public ?\DateTimeImmutable $lastSeen = null,
	) {
	}
}
