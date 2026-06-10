<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Zone Subscription
 */
readonly class ZoneSubscriptionCreateZoneSubscriptionRequest
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Responses\ZoneSubscriptionCreateZoneSubscriptionRequestApp $app = null,
		/** The list of add-ons subscribed to. */
		public ?array $componentValues = null,
		/** The monetary unit in which pricing information is displayed. */
		public ?string $currency = null,
		/** The end of the current period and also when the next billing is due. */
		public ?\DateTimeImmutable $currentPeriodEnd = null,
		/** When the current billing period started. May match initial_period_start if this is the first period. */
		public ?\DateTimeImmutable $currentPeriodStart = null,
		/** How often the subscription is renewed automatically. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneSubscriptionCreateZoneSubscriptionRequestFrequency $frequency = null,
		/** Subscription identifier tag. */
		public ?string $id = null,
		/** The price of the subscription that will be billed, in US dollars. */
		public ?float $price = null,
		/** The rate plan applied to the subscription. */
		public ?\FoundryCo\Cloudflare\Responses\ZoneSubscriptionCreateZoneSubscriptionRequestRatePlan $ratePlan = null,
		/** The state that the subscription is in. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneSubscriptionCreateZoneSubscriptionRequestState $state = null,
		/** A simple zone object. May have null properties if not a zone subscription. */
		public ?\FoundryCo\Cloudflare\Responses\ZoneSubscriptionCreateZoneSubscriptionRequestZone $zone = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'app' => $this->app?->toArray(),
		    'component_values' => $this->componentValues,
		    'currency' => $this->currency,
		    'current_period_end' => $this->currentPeriodEnd?->format(\DateTimeImmutable::ATOM),
		    'current_period_start' => $this->currentPeriodStart?->format(\DateTimeImmutable::ATOM),
		    'frequency' => $this->frequency?->value,
		    'id' => $this->id,
		    'price' => $this->price,
		    'rate_plan' => $this->ratePlan?->toArray(),
		    'state' => $this->state?->value,
		    'zone' => $this->zone?->toArray(),
		], fn ($v) => $v !== null);
	}
}
