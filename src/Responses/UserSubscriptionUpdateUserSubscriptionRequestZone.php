<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A simple zone object. May have null properties if not a zone subscription.
 */
readonly class UserSubscriptionUpdateUserSubscriptionRequestZone
{
	public function __construct(
		/** Identifier */
		public ?string $id = null,
		/** The domain name */
		public ?string $name = null,
	) {
	}
}
