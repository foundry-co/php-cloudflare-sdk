<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Runtime configuration for the Worker.
 */
readonly class WorkerVersionsUploadVersionResourcesScriptRuntime
{
	public function __construct(
		/** Date indicating targeted support in the Workers runtime. Backwards incompatible fixes to the runtime following this date will not affect this Worker. */
		public ?string $compatibilityDate = null,
		/** Flags that enable or disable certain features in the Workers runtime. */
		public ?array $compatibilityFlags = null,
		/** Resource limits for the Worker. */
		public ?WorkerVersionsUploadVersionResourcesScriptRuntimeLimits $limits = null,
		/** The tag of the Durable Object migration that was most recently applied for this Worker. */
		public ?string $migrationTag = null,
		/** Usage model for the Worker invocations. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerVersionsUploadVersionResourcesScriptRuntimeUsageModel $usageModel = null,
	) {
	}
}
