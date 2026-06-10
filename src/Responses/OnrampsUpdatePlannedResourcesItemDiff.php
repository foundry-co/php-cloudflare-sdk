<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnrampsUpdatePlannedResourcesItemDiff
{
	public function __construct(
		public ?string $diff = null,
		public ?string $leftDescription = null,
		public ?string $leftYaml = null,
		public ?string $rightDescription = null,
		public ?string $rightYaml = null,
	) {
	}
}
