<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Versioned workflow graph payload.
 */
readonly class WorDescribeWorkflowVersionsGraphGraph
{
	public function __construct(
		public ?float $version = null,
		/** A parsed workflow entrypoint with its step graph. */
		public ?WorDescribeWorkflowVersionsGraphGraphWorkflow $workflow = null,
	) {
	}
}
