<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A component value for a subscription.
 */
readonly class AccountSubscriptionsUpdateSubscriptionRequestComponentValuesItem
{
	public function __construct(
		/** The default amount assigned. */
		public ?float $default = null,
		/** The name of the component value. */
		public ?string $name = null,
		/** The unit price for the component value. */
		public ?float $price = null,
		/** The amount of the component value assigned. */
		public ?float $value = null,
	) {
	}
}
