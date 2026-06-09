<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Toggle RUM on/off for a zone
 */
readonly class WebAnalyticsToggleRumRequest
{
	public function __construct(
		/** Value can either be On or Off. */
		public ?string $value = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value,
		], fn ($v) => $v !== null);
	}
}
