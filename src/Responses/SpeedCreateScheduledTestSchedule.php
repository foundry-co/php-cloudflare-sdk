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
readonly class SpeedCreateScheduledTestSchedule
{
	public function __construct(
		/** The frequency of the test. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedCreateScheduledTestScheduleFrequency $frequency = null,
		/** A test region. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedCreateScheduledTestScheduleRegion $region = null,
		/** A URL. */
		public ?string $url = null,
	) {
	}
}
