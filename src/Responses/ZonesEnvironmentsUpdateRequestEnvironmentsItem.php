<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZonesEnvironmentsUpdateRequestEnvironmentsItem
{
	public function __construct(
		public ?string $expression = null,
		public ?bool $lockedOnDeployment = null,
		public ?string $name = null,
		public ?ZonesEnvironmentsUpdateRequestEnvironmentsItemPosition $position = null,
		public ?string $ref = null,
		public ?int $version = null,
		public ?string $httpApplicationId = null,
	) {
	}
}
