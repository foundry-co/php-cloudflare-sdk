<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A parsed workflow entrypoint with its step graph.
 */
readonly class WorkflowsGraphGraphWorkflow
{
	public function __construct(
		public string $className,
		public array $functions,
		public array $nodes,
		/** Shape descriptor for JSON payloads. */
		public mixed $payload = null,
	) {
	}
}
