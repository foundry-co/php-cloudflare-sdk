<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnrampsReadStatus
{
	public function __construct(
		public ?OnrampsReadStatusApplyProgress $applyProgress = null,
		public ?\FoundryCo\Cloudflare\Enums\OnrampsReadStatusLifecycleState $lifecycleState = null,
		public ?OnrampsReadStatusPlanProgress $planProgress = null,
		public ?array $routes = null,
		public ?array $tunnels = null,
		public ?array $lifecycleErrors = null,
	) {
	}
}
