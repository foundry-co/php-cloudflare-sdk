<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpeedCreateTest
{
	public function __construct(
		public ?\DateTimeImmutable $date = null,
		/** The Lighthouse report. */
		public ?SpeedCreateTestDesktopReport $desktopReport = null,
		/** UUID. */
		public ?string $id = null,
		/** The Lighthouse report. */
		public ?SpeedCreateTestMobileReport $mobileReport = null,
		/** A test region with a label. */
		public ?SpeedCreateTestRegion $region = null,
		/** The frequency of the test. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedCreateTestScheduleFrequency $scheduleFrequency = null,
		/** A URL. */
		public ?string $url = null,
	) {
	}
}
