<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A component value for a subscription.
 */
readonly class UserSubscriptionUpdateUserSubscriptionRequestComponentValuesItem
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
