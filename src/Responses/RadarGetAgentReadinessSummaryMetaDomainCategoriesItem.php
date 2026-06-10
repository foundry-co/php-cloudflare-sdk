<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAgentReadinessSummaryMetaDomainCategoriesItem
{
	public function __construct(
		/** Sub-category name. */
		public ?string $name = null,
		/** Number of successfully scanned domains in this sub-category. */
		public ?int $value = null,
	) {
	}
}
