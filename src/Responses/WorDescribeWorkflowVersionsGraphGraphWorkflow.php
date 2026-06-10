<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A parsed workflow entrypoint with its step graph.
 */
readonly class WorDescribeWorkflowVersionsGraphGraphWorkflow
{
	public function __construct(
		public ?string $className = null,
		public ?array $functions = null,
		public ?array $nodes = null,
		/** Shape descriptor for JSON payloads. */
		public mixed $payload = null,
	) {
	}
}
