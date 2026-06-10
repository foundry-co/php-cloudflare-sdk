<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Worker Account Settings
 */
readonly class WorkerAccountSettingsCreateWorkerAccountSettingsRequest
{
	public function __construct(
		public ?string $defaultUsageModel = null,
		public ?bool $greenCompute = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'default_usage_model' => $this->defaultUsageModel,
		    'green_compute' => $this->greenCompute,
		], fn ($v) => $v !== null);
	}
}
