<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnrampsReadPlannedResourcesItem
{
	public function __construct(
		public ?OnrampsReadPlannedResourcesItemDiff $diff = null,
		public ?array $keysRequireReplace = null,
		public ?OnrampsReadPlannedResourcesItemMonthlyCostEstimateDiff $monthlyCostEstimateDiff = null,
		public ?\FoundryCo\Cloudflare\Enums\OnrampsReadPlannedResourcesItemPlannedAction $plannedAction = null,
		public ?OnrampsReadPlannedResourcesItemResource $resource = null,
	) {
	}
}
