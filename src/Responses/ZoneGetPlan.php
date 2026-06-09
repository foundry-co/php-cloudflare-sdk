<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A Zones subscription information.
 */
readonly class ZoneGetPlan
{
	public function __construct(
		/** States if the subscription can be activated. */
		public ?bool $canSubscribe = null,
		/** The denomination of the customer. */
		public ?string $currency = null,
		/** If this Zone is managed by another company. */
		public ?bool $externallyManaged = null,
		/** How often the customer is billed. */
		public ?string $frequency = null,
		/** Identifier */
		public ?string $id = null,
		/** States if the subscription active. */
		public ?bool $isSubscribed = null,
		/** If the legacy discount applies to this Zone. */
		public ?bool $legacyDiscount = null,
		/** The legacy name of the plan. */
		public ?string $legacyId = null,
		/** Name of the owner. */
		public ?string $name = null,
		/** How much the customer is paying. */
		public ?float $price = null,
	) {
	}
}
