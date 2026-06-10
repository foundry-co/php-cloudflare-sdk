<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WebAnalyticsGetSiteRuleset
{
	public function __construct(
		/** Whether the ruleset is enabled. */
		public ?bool $enabled = null,
		/** The Web Analytics ruleset identifier. */
		public ?string $id = null,
		public ?string $zoneName = null,
		/** The zone identifier. */
		public ?string $zoneTag = null,
	) {
	}
}
