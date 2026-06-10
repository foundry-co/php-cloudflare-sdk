<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnrampsUpdatePlannedResourcesItem
{
	public function __construct(
		public ?OnrampsUpdatePlannedResourcesItemDiff $diff = null,
		public ?array $keysRequireReplace = null,
		public ?OnrampsUpdatePlannedResourcesItemMonthlyCostEstimateDiff $monthlyCostEstimateDiff = null,
		public ?\FoundryCo\Cloudflare\Enums\OnrampsUpdatePlannedResourcesItemPlannedAction $plannedAction = null,
		public ?OnrampsUpdatePlannedResourcesItemResource $resource = null,
	) {
	}
}
