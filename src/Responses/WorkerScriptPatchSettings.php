<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptPatchSettings
{
	public function __construct(
		/** Annotations for the Worker version. Annotations are not inherited across settings updates; omitting this field means the new version will have no annotations. */
		public ?WorkerScriptPatchSettingsAnnotations $annotations = null,
		public mixed $bindings = null,
		public mixed $compatibilityDate = null,
		public mixed $compatibilityFlags = null,
		/** Limits to apply for this Worker. */
		public ?WorkerScriptPatchSettingsLimits $limits = null,
		/** Whether Logpush is turned on for the Worker. */
		public ?bool $logpush = null,
		/**
		 * Migrations to apply for Durable Objects associated with this Worker.
		 */
		public mixed $migrations = null,
		/** Observability settings for the Worker. */
		public ?WorkerScriptPatchSettingsObservability $observability = null,
		public ?WorkerScriptPatchSettingsPlacement $placement = null,
		public mixed $tags = null,
		public mixed $tailConsumers = null,
		/** Usage model for the Worker invocations. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerScriptPatchSettingsUsageModel $usageModel = null,
	) {
	}
}
