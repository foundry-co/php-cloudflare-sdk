<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ObservatoryTest
{
	public function __construct(
		public ?\DateTimeImmutable $date = null,
		/** The Lighthouse report. */
		public ?ObservatoryTestDesktopReport $desktopReport = null,
		/** UUID. */
		public ?string $id = null,
		/** The Lighthouse report. */
		public ?ObservatoryTestMobileReport $mobileReport = null,
		/** A test region with a label. */
		public ?ObservatoryTestRegion $region = null,
		/** The frequency of the test. */
		public ?\FoundryCo\Cloudflare\Enums\ObservatoryTestScheduleFrequency $scheduleFrequency = null,
		/** A URL. */
		public ?string $url = null,
	) {
	}
}
