<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigBillingCreateTopup
{
	public function __construct(
		/** Stripe PaymentIntent client secret. */
		public ?string $clientSecret = null,
		/** Whether the user was already onboarded. */
		public ?bool $onboarding = null,
		/** Stripe invoice ID. */
		public ?string $paymentIntentId = null,
		/** Card brand (visa, mastercard, etc.). */
		public ?string $brand = null,
		/** Last 4 digits of card. */
		public ?string $last4 = null,
	) {
	}
}
