<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Counts per account plan.
 */
readonly class SpeedGetAvailabilitiesQuotaQuotasPerPlanValue
{
	public function __construct(
		public ?int $business = null,
		public ?int $enterprise = null,
		public ?int $free = null,
		public ?int $pro = null,
	) {
	}
}
