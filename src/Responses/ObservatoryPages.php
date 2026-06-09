<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ObservatoryPages
{
	public function __construct(
		/** A test region with a label. */
		public ?ObservatoryPagesRegion $region = null,
		/** The frequency of the test. */
		public ?\FoundryCo\Cloudflare\Enums\ObservatoryPagesScheduleFrequency $scheduleFrequency = null,
		public ?array $tests = null,
		/** A URL. */
		public ?string $url = null,
	) {
	}
}
