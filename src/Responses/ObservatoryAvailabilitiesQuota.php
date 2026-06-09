<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ObservatoryAvailabilitiesQuota
{
	public function __construct(
		/** Cloudflare plan. */
		public ?string $plan = null,
		/** The number of tests available per plan. */
		public ?ObservatoryAvailabilitiesQuotaQuotasPerPlan $quotasPerPlan = null,
		/** The number of remaining schedules available. */
		public ?float $remainingSchedules = null,
		/** The number of remaining tests available. */
		public ?float $remainingTests = null,
		/** The number of schedules available per plan. */
		public ?ObservatoryAvailabilitiesQuotaScheduleQuotasPerPlan $scheduleQuotasPerPlan = null,
	) {
	}
}
