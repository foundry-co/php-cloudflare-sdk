<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Represents a single billable usage record.
 */
readonly class BillableUsageUsage
{
	public function __construct(
		/** Specifies the billing currency code (ISO 4217). */
		public string $billingCurrency,
		/** Indicates the start of the billing period. */
		public \DateTimeImmutable $billingPeriodStart,
		/** Indicates the end of the charge period. */
		public \DateTimeImmutable $chargePeriodEnd,
		/** Indicates the start of the charge period. */
		public \DateTimeImmutable $chargePeriodStart,
		/** Specifies the quantity consumed during this charge period. */
		public float $consumedQuantity,
		/** A display name for the unit of measurement used for the product (for example, "GB-months", "GB-seconds"). May be empty when the unit is implicit in the service name. */
		public string $consumedUnit,
		/** Specifies the cost for this charge period in the billing currency. */
		public float $contractedCost,
		/** Specifies the cumulated cost for the billing period in the billing currency. */
		public float $cumulatedContractedCost,
		/** Specifies the cumulated pricing quantity for the billing period. */
		public int $cumulatedPricingQuantity,
		/** Specifies the pricing quantity for this charge period. */
		public int $pricingQuantity,
		/** Identifies the Cloudflare service. */
		public string $serviceName,
		/** Identifies the product family for the Cloudflare service. */
		public ?string $serviceFamilyName = null,
		/** The identifier for the Cloudflare zone (zone tag). */
		public ?string $zoneId = null,
		/** The display name of the Cloudflare zone. */
		public ?string $zoneName = null,
	) {
	}
}
