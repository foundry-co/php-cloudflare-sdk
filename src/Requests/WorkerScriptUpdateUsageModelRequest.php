<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Usage Model
 */
readonly class WorkerScriptUpdateUsageModelRequest
{
	public function __construct(
		/** Usage model for the Worker invocations. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerScriptUpdateUsageModelRequestUsageModel $usageModel = null,
		/** User-defined resource limits for Workers with standard usage model. */
		public ?\FoundryCo\Cloudflare\Responses\WorkerScriptUpdateUsageModelRequestUserLimits $userLimits = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'usage_model' => $this->usageModel?->value,
		    'user_limits' => $this->userLimits?->toArray(),
		], fn ($v) => $v !== null);
	}
}
