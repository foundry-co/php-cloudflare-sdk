<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayTopup
{
	public function __construct(
		/** Stripe PaymentIntent client secret. */
		public string $clientSecret,
		/** Whether the user was already onboarded. */
		public bool $onboarding,
		/** Stripe invoice ID. */
		public string $paymentIntentId,
		/** Card brand (visa, mastercard, etc.). */
		public ?string $brand = null,
		/** Last 4 digits of card. */
		public ?string $last4 = null,
	) {
	}
}
