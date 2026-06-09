<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A simple zone object. May have null properties if not a zone subscription.
 */
readonly class AccountSubscriptionsSubscriptionsZone
{
	public function __construct(
		public ?array $id = null,
		public ?array $name = null,
	) {
	}
}
