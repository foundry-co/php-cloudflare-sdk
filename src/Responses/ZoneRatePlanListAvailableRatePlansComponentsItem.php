<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneRatePlanListAvailableRatePlansComponentsItem
{
	public function __construct(
		/** The default amount allocated. */
		public ?float $default = null,
		/** The unique component. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneRatePlanListAvailableRatePlansComponentsItemName $name = null,
		/** The unit price of the addon. */
		public ?float $unitPrice = null,
	) {
	}
}
