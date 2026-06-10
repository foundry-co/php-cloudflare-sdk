<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetVerifiedBotsTopByHttpRequestsTop0Item
{
	public function __construct(
		public ?string $botCategory = null,
		public ?string $botName = null,
		public ?string $botOwner = null,
		/** A numeric string. */
		public ?string $value = null,
	) {
	}
}
