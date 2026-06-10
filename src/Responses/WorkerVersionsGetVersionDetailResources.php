<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerVersionsGetVersionDetailResources
{
	public function __construct(
		public mixed $bindings = null,
		public ?WorkerVersionsGetVersionDetailResourcesScript $script = null,
		/** Runtime configuration for the Worker. */
		public ?WorkerVersionsGetVersionDetailResourcesScriptRuntime $scriptRuntime = null,
	) {
	}
}
