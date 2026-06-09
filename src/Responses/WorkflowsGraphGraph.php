<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Versioned workflow graph payload.
 */
readonly class WorkflowsGraphGraph
{
	public function __construct(
		public float $version,
		/** A parsed workflow entrypoint with its step graph. */
		public WorkflowsGraphGraphWorkflow $workflow,
	) {
	}
}
