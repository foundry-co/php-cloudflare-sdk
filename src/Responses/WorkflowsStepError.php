<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Error details when status='errored'; null otherwise.
 */
readonly class WorkflowsStepError
{
	public function __construct(
		public string $message,
		public string $name,
	) {
	}
}
