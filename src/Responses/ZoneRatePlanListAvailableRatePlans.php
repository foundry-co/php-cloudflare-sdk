<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneRatePlanListAvailableRatePlans
{
	public function __construct(
		/** Array of available components values for the plan. */
		public ?array $components = null,
		/** The monetary unit in which pricing information is displayed. */
		public ?string $currency = null,
		/** The duration of the plan subscription. */
		public ?float $duration = null,
		/** The frequency at which you will be billed for this plan. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneRatePlanListAvailableRatePlansFrequency $frequency = null,
		/** Plan identifier tag. */
		public ?string $id = null,
		/** The plan name. */
		public ?string $name = null,
	) {
	}
}
