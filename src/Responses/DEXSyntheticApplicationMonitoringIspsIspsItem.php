<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringIspsIspsItem
{
	public function __construct(
		/** The test that generated this result */
		public string $testId,
		/** The specific test result */
		public string $testResultId,
		/** Timestamp of when the ISP was observed */
		public \DateTimeImmutable $timeStart,
		/**
		 * IP address information for the ISP hop. Fields marked as PII-gated (`name`, `address`, `netmask`, and all `location` sub-fields) will be returned as the literal string `"REDACTED"` for callers that do not have the PII permission. `asn`, `aso`, and `version` are always returned regardless of PII access.
		 */
		public ?DEXSyntheticApplicationMonitoringIspsIspsItemIp $ip = null,
	) {
	}
}
