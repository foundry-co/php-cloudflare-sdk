<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnRampsListStatus
{
	public function __construct(
		public OnRampsListStatusApplyProgress $applyProgress,
		public \FoundryCo\Cloudflare\Enums\OnRampsListStatusLifecycleState $lifecycleState,
		public OnRampsListStatusPlanProgress $planProgress,
		public array $routes,
		public array $tunnels,
		public ?array $lifecycleErrors = null,
	) {
	}
}
