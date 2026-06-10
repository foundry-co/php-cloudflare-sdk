<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Represents a single billable usage record.
 */
readonly class BillableUsageGetPaygoAccountUsage
{
	public function __construct(
		/** Specifies the billing currency code (ISO 4217). */
		public ?string $billingCurrency = null,
		/** Indicates the start of the billing period. */
		public ?\DateTimeImmutable $billingPeriodStart = null,
		/** Indicates the end of the charge period. */
		public ?\DateTimeImmutable $chargePeriodEnd = null,
		/** Indicates the start of the charge period. */
		public ?\DateTimeImmutable $chargePeriodStart = null,
		/** Specifies the quantity consumed during this charge period. */
		public ?float $consumedQuantity = null,
		/** A display name for the unit of measurement used for the product (for example, "GB-months", "GB-seconds"). May be empty when the unit is implicit in the service name. */
		public ?string $consumedUnit = null,
		/** Specifies the cost for this charge period in the billing currency. */
		public ?float $contractedCost = null,
		/** Specifies the cumulated cost for the billing period in the billing currency. */
		public ?float $cumulatedContractedCost = null,
		/** Specifies the cumulated pricing quantity for the billing period. */
		public ?int $cumulatedPricingQuantity = null,
		/** Specifies the pricing quantity for this charge period. */
		public ?int $pricingQuantity = null,
		/** Identifies the Cloudflare service. */
		public ?string $serviceName = null,
		/** Identifies the product family for the Cloudflare service. */
		public ?string $serviceFamilyName = null,
		/** The identifier for the Cloudflare zone (zone tag). */
		public ?string $zoneId = null,
		/** The display name of the Cloudflare zone. */
		public ?string $zoneName = null,
	) {
	}
}
