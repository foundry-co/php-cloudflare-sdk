<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkflowsStep
{
	public function __construct(
		/** Error details when status='errored'; null otherwise. */
		public WorkflowsStepError $error,
		public \FoundryCo\Cloudflare\Enums\WorkflowsStepStatus $status,
		/** Full step output or waitForEvent payload without truncation. Sensitive outputs are returned as '[REDACTED]'. Populated when status='complete'. May be a ReadableStream when the step returned one from step.do; stream outputs are served as application/octet-stream rather than JSON. */
		public ?array $output = null,
	) {
	}
}
