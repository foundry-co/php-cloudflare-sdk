<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneEnvironmentsZonesEnvironmentsListEnvironmentsItem
{
	public function __construct(
		public string $expression,
		public bool $lockedOnDeployment,
		public string $name,
		public ZoneEnvironmentsZonesEnvironmentsListEnvironmentsItemPosition $position,
		public string $ref,
		public int $version,
		public ?string $httpApplicationId = null,
	) {
	}
}
