<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnrampsCreatePlannedResourcesItem
{
	public function __construct(
		public ?OnrampsCreatePlannedResourcesItemDiff $diff = null,
		public ?array $keysRequireReplace = null,
		public ?OnrampsCreatePlannedResourcesItemMonthlyCostEstimateDiff $monthlyCostEstimateDiff = null,
		public ?\FoundryCo\Cloudflare\Enums\OnrampsCreatePlannedResourcesItemPlannedAction $plannedAction = null,
		public ?OnrampsCreatePlannedResourcesItemResource $resource = null,
	) {
	}
}
