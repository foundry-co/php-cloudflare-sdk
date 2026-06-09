<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single cost and usage record for a metered product within a specific charge period, aligned with the FinOps FOCUS v1.3 specification.
 */
readonly class BillableUsageV2Usage
{
	public function __construct(
		/** Public identifier of the Cloudflare account (account tag). */
		public string $billingAccountId,
		/** Display name of the Cloudflare account. */
		public string $billingAccountName,
		/** Highest-level classification of a charge based on the nature of how it gets billed. Currently only "Usage" is supported. */
		public \FoundryCo\Cloudflare\Enums\BillableUsageV2UsageChargeCategory $chargeCategory,
		/** Self-contained summary of the charge's purpose and price. */
		public string $chargeDescription,
		/** Indicates how often a charge occurs. Currently only "Usage-Based" is supported. */
		public \FoundryCo\Cloudflare\Enums\BillableUsageV2UsageChargeFrequency $chargeFrequency,
		/** Exclusive end of the time interval during which the usage was consumed. */
		public \DateTimeImmutable $chargePeriodEnd,
		/** Inclusive start of the time interval during which the usage was consumed. */
		public \DateTimeImmutable $chargePeriodStart,
		/** Measured usage amount within the charge period. Reflects raw metered consumption before pricing transformations. */
		public float $consumedQuantity,
		/** Unit of measure for the consumed quantity (e.g., "GB", "Requests", "vCPU-Hours"). */
		public string $consumedUnit,
		/** Name of the entity providing the underlying infrastructure or platform. */
		public string $hostProviderName,
		/** Name of the entity responsible for invoicing for the services consumed. */
		public string $invoiceIssuerName,
		/** Name of the entity that made the services available for purchase. */
		public string $serviceProviderName,
		/** The display name of the billable metric. Cloudflare extension; replaces FOCUS SkuMeter. */
		public string $xBillableMetricName,
		/** A charge serving as the basis for invoicing, inclusive of all reduced rates and discounts while excluding the amortization of upfront charges (one-time or recurring). */
		public ?float $billedCost = null,
		/** Currency that a charge was billed in (ISO 4217). */
		public ?string $billingCurrency = null,
		/** Exclusive end of the billing cycle that contains this usage record. */
		public ?\DateTimeImmutable $billingPeriodEnd = null,
		/** Inclusive start of the billing cycle that contains this usage record. */
		public ?\DateTimeImmutable $billingPeriodStart = null,
		/** Indicates whether the row represents a correction to one or more charges invoiced in a previous billing period. */
		public ?\FoundryCo\Cloudflare\Enums\BillableUsageV2UsageChargeClass $chargeClass = null,
		/** Cost calculated by multiplying ContractedUnitPrice and the corresponding PricingQuantity. */
		public ?float $contractedCost = null,
		/** The agreed-upon unit price for a single PricingUnit of the associated billable metric, inclusive of negotiated discounts, if present, while excluding any other discounts. */
		public ?float $contractedUnitPrice = null,
		/** The amortized cost of the charge after applying all reduced rates, discounts, and the applicable portion of relevant, prepaid purchases (one-time or recurring) that covered the charge. */
		public ?float $effectiveCost = null,
		/** Cost calculated by multiplying ListUnitPrice and the corresponding PricingQuantity. */
		public ?float $listCost = null,
		/** Suggested provider-published unit price for a single PricingUnit of the associated billable metric, exclusive of any discounts. */
		public ?float $listUnitPrice = null,
		/** Volume of a given service used or purchased, based on the PricingUnit. */
		public ?float $pricingQuantity = null,
		/** Provider-specified measurement unit for determining unit prices, indicating how the provider rates measured usage after applying pricing rules like block pricing. */
		public ?string $pricingUnit = null,
		/** Provider-assigned identifier for an isolated geographic area where a service is provided. */
		public ?string $regionId = null,
		/** Name of an isolated geographic area where a service is provided. */
		public ?string $regionName = null,
		/** Unique identifier assigned to a grouping of services. For Cloudflare, this is the subscription or contract ID. */
		public ?string $subAccountId = null,
		/** Name assigned to a grouping of services. For Cloudflare, this is the subscription or contract display name. */
		public ?string $subAccountName = null,
		/** The unique identifier for the billable metric in the Cloudflare catalog. Cloudflare extension; replaces FOCUS SkuId. */
		public ?string $xBillableMetricId = null,
		/** The product family the charge belongs to (e.g., "R2", "Workers"). Cloudflare extension; replaces FOCUS ServiceName. */
		public ?string $xProductFamilyName = null,
		/** The identifier for the Cloudflare zone (zone tag). Cloudflare extension. */
		public ?string $xZoneId = null,
		/** The display name of the Cloudflare zone. Cloudflare extension. */
		public ?string $xZoneName = null,
	) {
	}
}
