<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * AI Security for Apps enablement status for a zone.
 */
readonly class AiSecuritySettingsPut
{
	public function __construct(
		/** Whether AI Security for Apps is enabled on the zone. */
		public ?bool $enabled = null,
	) {
	}
}
