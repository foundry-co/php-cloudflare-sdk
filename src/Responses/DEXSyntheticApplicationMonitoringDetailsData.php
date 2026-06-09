<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The configuration object which contains the details for the WARP client to conduct the test.
 */
readonly class DEXSyntheticApplicationMonitoringDetailsData
{
	public function __construct(
		/** The desired endpoint to test. */
		public string $host,
		/** The type of test. */
		public \FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringDetailsDataKind $kind,
		/** The HTTP request method type. */
		public ?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringDetailsDataMethod $method = null,
	) {
	}
}
