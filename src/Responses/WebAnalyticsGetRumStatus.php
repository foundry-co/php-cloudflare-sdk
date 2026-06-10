<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WebAnalyticsGetRumStatus
{
	public function __construct(
		public ?bool $editable = null,
		public ?string $id = null,
		/** Current state of RUM. Returns On, Off, or Manual. */
		public ?string $value = null,
	) {
	}
}
