<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Script and version settings for Workers for Platforms namespace scripts. Same as script-and-version-settings-item but without annotations, which are not supported for namespace scripts.
 */
readonly class WorkersForPlatformsSettings
{
	public function __construct(
		public mixed $bindings = null,
		public mixed $compatibilityDate = null,
		public mixed $compatibilityFlags = null,
		/** Limits to apply for this Worker. */
		public ?WorkersForPlatformsSettingsLimits $limits = null,
		/** Whether Logpush is turned on for the Worker. */
		public ?bool $logpush = null,
		/**
		 * Migrations to apply for Durable Objects associated with this Worker.
		 */
		public mixed $migrations = null,
		/** Observability settings for the Worker. */
		public ?WorkersForPlatformsSettingsObservability $observability = null,
		public mixed $placement = null,
		public mixed $tags = null,
		public mixed $tailConsumers = null,
		/** Usage model for the Worker invocations. */
		public ?\FoundryCo\Cloudflare\Enums\WorkersForPlatformsSettingsUsageModel $usageModel = null,
	) {
	}
}
