<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptModel
{
	public function __construct(
		/** Usage model for the Worker invocations. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerScriptModelUsageModel $usageModel = null,
		/** User-defined resource limits for Workers with standard usage model. */
		public ?WorkerScriptModelUserLimits $userLimits = null,
	) {
	}
}
