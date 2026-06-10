<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneRatePlanAvailablePlanDetails
{
	public function __construct(
		/** Indicates whether you can subscribe to this plan. */
		public ?bool $canSubscribe = null,
		/** The monetary unit in which pricing information is displayed. */
		public ?string $currency = null,
		/** Indicates whether this plan is managed externally. */
		public ?bool $externallyManaged = null,
		/** The frequency at which you will be billed for this plan. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneRatePlanAvailablePlanDetailsFrequency $frequency = null,
		/** Identifier */
		public ?string $id = null,
		/** Indicates whether you are currently subscribed to this plan. */
		public ?bool $isSubscribed = null,
		/** Indicates whether this plan has a legacy discount applied. */
		public ?bool $legacyDiscount = null,
		/** The legacy identifier for this rate plan, if any. */
		public ?string $legacyId = null,
		/** The plan name. */
		public ?string $name = null,
		/** The amount you will be billed for this plan. */
		public ?float $price = null,
	) {
	}
}
