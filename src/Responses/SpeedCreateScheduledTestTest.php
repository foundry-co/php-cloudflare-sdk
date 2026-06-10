<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpeedCreateScheduledTestTest
{
	public function __construct(
		public ?\DateTimeImmutable $date = null,
		/** The Lighthouse report. */
		public ?SpeedCreateScheduledTestTestDesktopReport $desktopReport = null,
		/** UUID. */
		public ?string $id = null,
		/** The Lighthouse report. */
		public ?SpeedCreateScheduledTestTestMobileReport $mobileReport = null,
		/** A test region with a label. */
		public ?SpeedCreateScheduledTestTestRegion $region = null,
		/** The frequency of the test. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedCreateScheduledTestTestScheduleFrequency $scheduleFrequency = null,
		/** A URL. */
		public ?string $url = null,
	) {
	}
}
