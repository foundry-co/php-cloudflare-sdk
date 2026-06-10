<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpeedListPages
{
	public function __construct(
		/** A test region with a label. */
		public ?SpeedListPagesRegion $region = null,
		/** The frequency of the test. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedListPagesScheduleFrequency $scheduleFrequency = null,
		public ?array $tests = null,
		/** A URL. */
		public ?string $url = null,
	) {
	}
}
