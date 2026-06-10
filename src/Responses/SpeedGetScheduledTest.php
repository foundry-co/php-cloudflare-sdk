<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The test schedule.
 */
readonly class SpeedGetScheduledTest
{
	public function __construct(
		/** The frequency of the test. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedGetScheduledTestFrequency $frequency = null,
		/** A test region. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedGetScheduledTestRegion $region = null,
		/** A URL. */
		public ?string $url = null,
	) {
	}
}
