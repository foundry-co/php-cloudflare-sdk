<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserBillingHistoryDetails
{
	public function __construct(
		/** The billing item action. */
		public string $action,
		/** The amount associated with this billing item. */
		public float $amount,
		/** The monetary unit in which pricing information is displayed. */
		public string $currency,
		/** The billing item description. */
		public string $description,
		/** Billing item identifier tag. */
		public string $id,
		/** When the billing item was created. */
		public \DateTimeImmutable $occurredAt,
		/** The billing item type. */
		public string $type,
		public UserBillingHistoryDetailsZone $zone,
	) {
	}
}
