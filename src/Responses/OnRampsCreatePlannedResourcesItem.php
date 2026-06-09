<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnRampsCreatePlannedResourcesItem
{
	public function __construct(
		public OnRampsCreatePlannedResourcesItemDiff $diff,
		public array $keysRequireReplace,
		public OnRampsCreatePlannedResourcesItemMonthlyCostEstimateDiff $monthlyCostEstimateDiff,
		public \FoundryCo\Cloudflare\Enums\OnRampsCreatePlannedResourcesItemPlannedAction $plannedAction,
		public OnRampsCreatePlannedResourcesItemResource $resource,
	) {
	}
}
