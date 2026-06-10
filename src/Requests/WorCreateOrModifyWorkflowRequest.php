<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create/modify Workflow
 */
readonly class WorCreateOrModifyWorkflowRequest
{
	public function __construct(
		public string $className,
		public string $scriptName,
		public ?\FoundryCo\Cloudflare\Responses\WorCreateOrModifyWorkflowRequestLimits $limits = null,
		public ?array $schedules = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'class_name' => $this->className,
		    'script_name' => $this->scriptName,
		    'limits' => $this->limits?->toArray(),
		    'schedules' => $this->schedules,
		], fn ($v) => $v !== null);
	}
}
