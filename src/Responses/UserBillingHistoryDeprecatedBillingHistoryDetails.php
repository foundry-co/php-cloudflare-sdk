<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserBillingHistoryDeprecatedBillingHistoryDetails
{
	public function __construct(
		/** The billing item action. */
		public ?string $action = null,
		/** The amount associated with this billing item. */
		public ?float $amount = null,
		/** The monetary unit in which pricing information is displayed. */
		public ?string $currency = null,
		/** The billing item description. */
		public ?string $description = null,
		/** Billing item identifier tag. */
		public ?string $id = null,
		/** When the billing item was created. */
		public ?\DateTimeImmutable $occurredAt = null,
		/** The billing item type. */
		public ?string $type = null,
		public ?UserBillingHistoryDeprecatedBillingHistoryDetailsZone $zone = null,
	) {
	}
}
