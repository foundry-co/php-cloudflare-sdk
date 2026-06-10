<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorGetWorkflowInstanceStep
{
	public function __construct(
		/** Error details when status='errored'; null otherwise. */
		public ?WorGetWorkflowInstanceStepError $error = null,
		public ?\FoundryCo\Cloudflare\Enums\WorGetWorkflowInstanceStepStatus $status = null,
		/** Full step output or waitForEvent payload without truncation. Sensitive outputs are returned as '[REDACTED]'. Populated when status='complete'. May be a ReadableStream when the step returned one from step.do; stream outputs are served as application/octet-stream rather than JSON. */
		public ?array $output = null,
	) {
	}
}
