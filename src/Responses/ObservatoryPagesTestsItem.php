<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ObservatoryPagesTestsItem
{
	public function __construct(
		public ?\DateTimeImmutable $date = null,
		/** The Lighthouse report. */
		public ?ObservatoryPagesTestsItemDesktopReport $desktopReport = null,
		/** UUID. */
		public ?string $id = null,
		/** The Lighthouse report. */
		public ?ObservatoryPagesTestsItemMobileReport $mobileReport = null,
		/** A test region with a label. */
		public ?ObservatoryPagesTestsItemRegion $region = null,
		/** The frequency of the test. */
		public ?\FoundryCo\Cloudflare\Enums\ObservatoryPagesTestsItemScheduleFrequency $scheduleFrequency = null,
		/** A URL. */
		public ?string $url = null,
	) {
	}
}
