<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsListDeviceIspsIspsItem
{
	public function __construct(
		/** The test that generated this result */
		public ?string $testId = null,
		/** The specific test result */
		public ?string $testResultId = null,
		/** Timestamp of when the ISP was observed */
		public ?\DateTimeImmutable $timeStart = null,
		/**
		 * IP address information for the ISP hop. Fields marked as PII-gated (`name`, `address`, `netmask`, and all `location` sub-fields) will be returned as the literal string `"REDACTED"` for callers that do not have the PII permission. `asn`, `aso`, and `version` are always returned regardless of PII access.
		 */
		public ?DexEndpointsListDeviceIspsIspsItemIp $ip = null,
	) {
	}
}
