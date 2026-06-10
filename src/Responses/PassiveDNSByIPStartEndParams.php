<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PassiveDNSByIPStartEndParams
{
	public function __construct(
		/** Defaults to the current date. */
		public ?\DateTimeImmutable $end = null,
		/** Defaults to 30 days before the end parameter value. */
		public ?\DateTimeImmutable $start = null,
	) {
	}
}
