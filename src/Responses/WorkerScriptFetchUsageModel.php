<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptFetchUsageModel
{
	public function __construct(
		/** Usage model for the Worker invocations. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerScriptFetchUsageModelUsageModel $usageModel = null,
		/** User-defined resource limits for Workers with standard usage model. */
		public ?WorkerScriptFetchUsageModelUserLimits $userLimits = null,
	) {
	}
}
