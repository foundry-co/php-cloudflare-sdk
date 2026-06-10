<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptGetSettings
{
	public function __construct(
		/** Annotations for the Worker version. Annotations are not inherited across settings updates; omitting this field means the new version will have no annotations. */
		public ?WorkerScriptGetSettingsAnnotations $annotations = null,
		public mixed $bindings = null,
		public mixed $compatibilityDate = null,
		public mixed $compatibilityFlags = null,
		/** Limits to apply for this Worker. */
		public ?WorkerScriptGetSettingsLimits $limits = null,
		/** Whether Logpush is turned on for the Worker. */
		public ?bool $logpush = null,
		/**
		 * Migrations to apply for Durable Objects associated with this Worker.
		 */
		public mixed $migrations = null,
		/** Observability settings for the Worker. */
		public ?WorkerScriptGetSettingsObservability $observability = null,
		public ?WorkerScriptGetSettingsPlacement $placement = null,
		public mixed $tags = null,
		public mixed $tailConsumers = null,
		/** Usage model for the Worker invocations. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerScriptGetSettingsUsageModel $usageModel = null,
	) {
	}
}
