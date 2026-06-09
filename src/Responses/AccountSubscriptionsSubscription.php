<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountSubscriptionsSubscription
{
	public function __construct(
		public ?AccountSubscriptionsSubscriptionApp $app = null,
		/** The list of add-ons subscribed to. */
		public ?array $componentValues = null,
		/** The monetary unit in which pricing information is displayed. */
		public ?string $currency = null,
		/** The end of the current period and also when the next billing is due. */
		public ?\DateTimeImmutable $currentPeriodEnd = null,
		/** When the current billing period started. May match initial_period_start if this is the first period. */
		public ?\DateTimeImmutable $currentPeriodStart = null,
		/** How often the subscription is renewed automatically. */
		public ?\FoundryCo\Cloudflare\Enums\AccountSubscriptionsSubscriptionFrequency $frequency = null,
		/** Subscription identifier tag. */
		public ?string $id = null,
		/** The price of the subscription that will be billed, in US dollars. */
		public ?float $price = null,
		/** The rate plan applied to the subscription. */
		public ?AccountSubscriptionsSubscriptionRatePlan $ratePlan = null,
		/** The state that the subscription is in. */
		public ?\FoundryCo\Cloudflare\Enums\AccountSubscriptionsSubscriptionState $state = null,
		/** A simple zone object. May have null properties if not a zone subscription. */
		public ?AccountSubscriptionsSubscriptionZone $zone = null,
	) {
	}
}
